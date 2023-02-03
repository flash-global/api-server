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

if (!interface_exists('ObjectivePHP\ServicesFactory\Annotation\Inject')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Annotation\Inject', 'ObjectivePHP\ServicesFactory\Annotation\Inject');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServiceReference')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference', 'ObjectivePHP\ServicesFactory\ServiceReference');
}

if (!interface_exists('ObjectivePHP\Gateway\Entity\Entity')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Entity\Entity', 'ObjectivePHP\Gateway\Entity\Entity');
}

if (!interface_exists('ObjectivePHP\Primitives\String\Camel')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Camel', 'ObjectivePHP\Primitives\String\Camel');
}

if (!interface_exists('ObjectivePHP\Primitives\String\Snake')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Snake', 'ObjectivePHP\Primitives\String\Snake');
}
