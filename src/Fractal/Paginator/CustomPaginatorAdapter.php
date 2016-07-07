<?php

    namespace Fei\ApiServer\Fractal\Paginator;
    
    
    use Fei\Entity\PaginatedEntitySet;
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
         * @var int
         */
        protected $lastPage;

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

            $this->updateLastPage();
        }

        static public function factory(PaginatedEntitySet $set)
        {
            return new self($set->getCurrentPage(), $set->getPerPage(), count($set), $set->getTotal());
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
            return $this->lastPage;
        }

        /**
         * @param mixed $lastPage
         *
         * @return $this
         */
        protected function setLastPage($lastPage)
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
            $this->updateLastPage();

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
            $this->updateLastPage();
            
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

            preg_match('/(([\?&])page=(\d+))/', $url, $matches);

            if(!empty($matches[0]))
            {
                $builtUrl = str_replace($matches[1], $matches[2] . 'page=' . $page, $url);
            }
            else
            {
                if(strpos($url, '?'))
                {
                    $builtUrl = $url . '&page=' . $page;
                }
                else {
                    $builtUrl = $url . '?page=' . $page;
                }
            }

             return $builtUrl;

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

        protected function updateLastPage()
        {
            $this->setLastPage(ceil($this->total / $this->perPage));

            return $this;
        }

    }
