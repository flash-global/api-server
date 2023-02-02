<?php

if (!interface_exists('ObjectivePHP\Gateway\Entity\EntityInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Entity\EntityInterface', 'ObjectivePHP\Gateway\Entity\EntityInterface');
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface', 'ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface');
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\ResultSetInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSetInterface', 'ObjectivePHP\Gateway\ResultSet\ResultSetInterface');
}
