<?php

    namespace Fei\ApiServer\ObjectivePHP\Gateway\ResultSet;

/**
     * Interface PaginatedResultSetInterface
     *
     * @package Fei\ApiServer\ObjectivePHP\Gateway\Entity
     */
    interface PaginatedResultSetInterface extends ResultSetInterface
    {
        /**
         * @return int
         */
        public function getCurrentPage();

        /**
         * @return int
         */
        public function getTotal();

        /**
         * @return int
         */
        public function getPageSize();
    }
