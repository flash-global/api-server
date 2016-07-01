<?php

    namespace Fei\ApiServer\Entity;
    
    
    interface EntitySetInterface
    {
        public function toArray() : array;

        public function isEmpty() : bool;
    }
