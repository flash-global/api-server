<?php
/**
 * Created by PhpStorm.
 * User: fmagyari
 * Date: 05/04/16
 * Time: 17:56
 */

namespace Fei\ApiServer\Gateway;


use Aura\SqlQuery\AbstractQuery;
use Aura\SqlQuery\Common\SelectInterface;
use Aura\SqlQuery\Mysql\Insert;
use Aura\SqlQuery\Mysql\Select;
use Aura\SqlQuery\Mysql\Update;
use Aura\SqlQuery\Quoter;
use Fei\ApiServer\Entity\EntitySet;
use Fei\ApiServer\Gateway\MySQLException;

/**
 * Class AbstractMySqlGateway
 * @package Fei\ApiServer\Gateway
 */
class AbstractMySqlGateway extends AbstractGateway
{

    /**
     * Link to master identifier
     */
    const READ_WRITE = 1;

    /**
     * Link to slave identifier
     */
    const READ_ONLY = 2;

    /**
     * @var \PDO
     */
    protected $readLink;
    /**
     * @var \PDO
     */
    protected $link;

    /**
     * @var \PDO
     */
    protected $lastUsedLink;


    /**
     * @var bool
     */
    protected $paginateNextQuery = false;

    /**
     * @var
     */
    protected $currentPage;

    /**
     * @var
     */
    protected $resultsPerPage;

    /**
     * @var int
     */
    protected $defaultResultPerPage = 20;


    /**
     * @param $page
     * @param null $resultsPerPage
     * @return $this
     */
    public function paginate($page, $resultsPerPage = null)
    {

        $this->paginateNextQuery = true;

        $this->currentPage = $page;

        if(!is_null($resultsPerPage))
        {
            $this->resultsPerPage = $resultsPerPage;
        }

        return $this;
    }

    /**
     * @return \PDO
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param \PDO $link
     * @return $this
     * @throws Exception
     */
    public function setLink($link)
    {
        if(!$link instanceof \PDO)
        {
            throw new Exception('Link is not a PDO link', Exception::INVALID_RESOURCE);
        }

        $this->link = $link;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReadLink()
    {
        return $this->readLink;
    }

    /**
     * @param \PDO $readLink
     * @return $this
     * @throws Exception
     */
    public function setReadLink($readLink)
    {
        if(!$readLink instanceof \PDO)
        {
            throw new Exception('Link is not a PDO link', Exception::INVALID_RESOURCE);
        }

        $this->readLink = $readLink;

        return $this;
    }

    /**
     * @param AbstractQuery|string $query
     * @param int $link
     * @return EntitySet
     * @throws Exception
     */
    public function query($query, $link = self::READ_WRITE)
    {
        if ($this->loadFromCache($this->getQueryCacheId($query))) {
            return $this->loadFromCache($this->getQueryCacheId($query));
        }
        
        switch($link)
        {
            case self::READ_ONLY:
                $link =  $this->readLink;
                break;

            default:
            case self::READ_WRITE:
                $link = $this->link;
                break;
        }

        if(!$link instanceof \PDO)
        {
            throw new MySQLException('Selected link is not a PDO link', MySQLException::INVALID_RESOURCE);
        }

        $this->lastUsedLink = $link;

        // handle pagination
        if($this->paginateNextQuery)
        {
            if(!$query instanceof Select)
            {
                throw new Exception('Cannot paginate string queries. Please use aura/sqlquery.');
            }

            $offset = ($this->currentPage -1) * $this->resultsPerPage;
            $limit = $this->resultsPerPage;

            $query->limit($limit)->offset($offset);

            $this->resultsPerPage = $this->defaultResultPerPage;
            $this->currentPage = null;
            $this->paginateNextQuery = false;
        }

        try {
            if($query instanceof AbstractQuery)
            {
                $sth = $link->prepare($query->getStatement());
                $sth->execute($query->getBindValues());

                if ($query instanceof SelectInterface)
                {
                    $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
                }
            } else {
                $rows = $link->query($query);
            }
        } catch (\PDOException $e) {
            throw new MySQLException(sprintf("SQL Query failed : %s - %s",
                $query, $this->getLastError()), MySQLException::SQL_ERROR);
        }


        if (isset($rows))
        {
            $entities = new EntitySet();
            foreach ($rows as $row) {
                $entities[] = $this->entityFactory($row);
            }

            $this->resetTargetEntity();
            $this->storeInCache($this->getQueryCacheId($query), $entities);

            return $entities;
        }

        return false;
    }

    /**
     * @param null $link
     * @return string
     */
    public function getLastError($link = null)
    {
        $link = $link ?: $this->lastUsedLink;

        return implode(' - ', $link->errorInfo());
    }

    /**
     * @param null $link
     * @return mixed
     */
    public function getLastErrorNo($link = null)
    {
        $link = $link ?: $this->lastUsedLink;

        return $link->errorCode();
    }

    /**
     * @param null $link
     * @return mixed
     */
    public function getLastInsertId($link = null)
    {
        $link = $link ?: $this->lastUsedLink;
        
        return $link->lastInsertId();
    }

    /**
     * @param array $columns
     * @return Select
     */
    protected function select(array $columns = array('*'))
    {
        $select = new Select(new Quoter("`", "`"));

        $select->cols($columns);

        return $select;
    }

    /**
     * @return Insert
     */
    protected function insert()
    {
        $insert = new Insert(new Quoter("`", "`"));

        return $insert;
    }

    /**
     * @return Update
     */
    protected function update()
    {
        $update = new Update(new Quoter("`", "`"));
        
        return $update;
    }

    /**
     * @param $query
     * @return string
     */
    protected function getQueryCacheId($query) {
        if ($query instanceof AbstractQuery) {
            return md5($query->getStatement() . serialize($query->getBindValues()));
        } else {
            return md5($query);
        }
    }
}