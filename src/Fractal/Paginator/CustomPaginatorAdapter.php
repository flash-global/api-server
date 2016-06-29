<?php

    namespace Fei\ApiServer\Fractal\Paginator;
    
    
    use League\Fractal\Pagination\PaginatorInterface;

    /**
     * Class CustomPaginatorAdapter
     *
     * @package Fei\ApiServer\Fractal\Paginator
     */
    class CustomPaginatorAdapter implements PaginatorInterface
    {

        /**
         * @var int
         */
        protected $currentPage;

        /**
         * @var int
         */
        protected $total;

        /**
         * @var int
         */
        protected $count;

        /**
         * @var int
         */
        protected $perPage;

        /**
         * @var string
         */
        protected $url;

        /**
         * CustomPaginatorAdapter constructor.
         *
         * @param $currentPage
         * @param $perPage
         * @param $count
         * @param $total
         *
         * @throws Exception
         */
        public function __construct($currentPage, $perPage, $count, $total)
        {
            $this->setCurrentPage($currentPage);
            $this->setPerPage($perPage);
            $this->setCount($count);
            $this->setTotal($total);
        }


        /**
         * @return mixed
         */
        public function getCurrentPage()
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
        public function getLastPage()
        {
            return ceil($this->total / $this->perPage);
        }

        /**
         * @param mixed $lastPage
         *
         * @return $this
         */
        public function setLastPage($lastPage)
        {
            $this->lastPage = $lastPage;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getTotal()
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

        /**
         * @return mixed
         */
        public function getCount()
        {
            return $this->count;
        }

        /**
         * @param mixed $count
         *
         * @return $this
         */
        public function setCount($count)
        {
            $this->count = $count;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getPerPage()
        {
            return $this->perPage;
        }

        /**
         * @param mixed $perPage
         *
         * @return $this
         * @throws Exception
         */
        public function setPerPage($perPage)
        {
            if($perPage < 1)
            {
                throw new Exception('Items per page must be greater than 0');
            }
            $this->perPage = $perPage;

            return $this;
        }
    
        /**
         * @param int $page
         *
         * @return mixed
         * @throws Exception
         */
        public function getUrl($page)
        {
            $url = $this->url ?: 'http://' . rtrim($_SERVER['HTTP_HOST'], '/') . '/' . ltrim($_SERVER['REQUEST_URI'], '/');

            preg_match('/[\?\&](page=(\d+))/', $url, $matches);

            if(!$matches[0])
            {
                throw new Exception('Unable to build URL for page #' . $page . ': no "page" parameter has been found in URI');
            }

            return str_replace($matches[1], 'page=' . $page, $url);

        }

        /**
         * @param mixed $url
         *
         * @return $this
         */
        public function setUrl($url)
        {
            $this->url = $url;

            return $this;
        }

    }
