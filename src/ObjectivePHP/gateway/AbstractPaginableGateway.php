<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway;

/**
 * Class AbstractGateway
 *
 * @package Fei\ApiServer\Gateway
 */
abstract class AbstractPaginableGateway extends AbstractGateway implements PaginableGatewayInterface
{

    /**
     * @var
     */
    protected $pageSize;

    /**
     * @var bool
     */
    protected $paginateCurrentQuery = false;

    /**
     * @var bool
     */
    protected $paginateNextQuery = false;

    /**
     * @var
     */
    protected $currentPage;

    /**
     * @var int
     */
    protected $defaultPageSize = 20;

    /**
     * @param      $page
     * @param null $pageSize
     *
     * @return $this
     */
    public function paginate($page = 1, $pageSize = null)
    {
        $this->paginateNextQuery = true;

        $this->currentPage = $page;

        $this->pageSize = $pageSize ?? $this->defaultPageSize;

        return $this;
    }
}
