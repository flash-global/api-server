<?php
    
    namespace Fei\ApiServer\Entity;
    
    
    interface PaginatedEntitySetInterface
    {
        public function getCurrentPage() : int;

        public function getTotal() : int;

        public function getPerPage()  : int;
    }
