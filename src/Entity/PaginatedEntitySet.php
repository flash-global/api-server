<?php

namespace Fei\ApiServer\Entity;


/**
 * Class EntitySet
 * @package Pricer\Entity
 */
class PaginatedEntitySet extends EntitySet implements PaginatedEntitySetInterface
{

    protected $currentPage;

    protected $perPage;

    protected $total;

    /**
     * @return mixed
     */
    public function getCurrentPage() : int
    {
        return $this->currentPage;
    }

    /**
     * @param mixed $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }

    /**
     * @param mixed $perPage
     *
     * @return $this
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal() : int
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

}
