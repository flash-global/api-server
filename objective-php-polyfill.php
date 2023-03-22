<?php

if (!interface_exists('ObjectivePHP\Gateway\Entity\EntityInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Entity\EntityInterface', 'ObjectivePHP\Gateway\Entity\EntityInterface');
    echo 'ENTITY INTERFACE ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface', 'ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface');
    echo 'PAGINATED RESULT SET INTERFACE ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\ResultSetInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSetInterface', 'ObjectivePHP\Gateway\ResultSet\ResultSetInterface');
    echo 'RESULT INTERFACE ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\ServicesFactory\Annotation\Inject')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Annotation\Inject', 'ObjectivePHP\ServicesFactory\Annotation\Inject');
    echo 'INJECT ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\ServicesFactory\ServiceReference')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference', 'ObjectivePHP\ServicesFactory\ServiceReference');
    echo 'SERVICE REFERENCE ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Entity\Entity')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Entity\Entity', 'ObjectivePHP\Gateway\Entity\Entity');
    echo 'ENTITY ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\String\Camel')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Camel', 'ObjectivePHP\Primitives\String\Camel');
    echo 'CAMEL ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\String\Snake')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Snake', 'ObjectivePHP\Primitives\String\Snake');
    echo 'SNAKE ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\ApplicationInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface', 'ObjectivePHP\Application\ApplicationInterface');
    echo 'APPLICATION INTERFACE ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Exception', 'ObjectivePHP\Application\Exception');
    echo 'APPLICATION EXCEPTION ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Invokable\InvokableInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface', 'ObjectivePHP\Invokable\InvokableInterface');
    echo 'InvokableInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Notification\MessageInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\MessageInterface', 'ObjectivePHP\Notification\MessageInterface');
    echo 'Notification\MessageInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Html\Message\MessageInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\MessageInterface', 'ObjectivePHP\Html\Message\MessageInterface');
    echo 'Html\Message\MessageInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Invokable\Invokable')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Invokable\Invokable', 'ObjectivePHP\Invokable\Invokable');
    echo 'Invokable ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Invokable\AbstractInvokable')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Invokable\AbstractInvokable', 'ObjectivePHP\Invokable\AbstractInvokable');
    echo 'AbstractInvokable ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Invokable\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Invokable\Exception', 'ObjectivePHP\Invokable\Exception');
    echo 'Invokable\Exception ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactory')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory', 'ObjectivePHP\ServicesFactory\ServicesFactory');
    echo 'ServicesFactory ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Matcher\Matcher')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Matcher\Matcher', 'ObjectivePHP\Matcher\Matcher');
    echo 'Matcher\Matcher ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\AbstractPrimitive')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\AbstractPrimitive', 'ObjectivePHP\Primitives\AbstractPrimitive');
    echo 'Primitives\AbstractPrimitive ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\PrimitiveInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\PrimitiveInterface', 'ObjectivePHP\Primitives\PrimitiveInterface');
    echo 'PrimitiveInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer', 'ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer');
    echo 'ObjectNormalizer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer', 'ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer');
    echo 'PrimitiveNormalizer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Middleware\EmbeddedMiddleware')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\EmbeddedMiddleware', 'ObjectivePHP\Application\Middleware\EmbeddedMiddleware');
    echo 'EmbeddedMiddleware ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Middleware\AbstractMiddleware')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\AbstractMiddleware', 'ObjectivePHP\Application\Middleware\AbstractMiddleware');
    echo 'AbstractMiddleware ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\Validator\ObjectValidator')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Validator\ObjectValidator', 'ObjectivePHP\Primitives\Collection\Validator\ObjectValidator');
    echo 'ObjectValidator ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Merger\MergerInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergerInterface', 'ObjectivePHP\Primitives\Merger\MergerInterface');
    echo 'MergerInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\String\Str')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Str', 'ObjectivePHP\Primitives\String\Str');
    echo 'Primitives\String\Str ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface', 'ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface');
    echo 'ServiceBuilderInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface', 'ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface');
    echo 'ServiceSpecsInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait', 'ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait');
    echo 'ServicesFactoryAwareTrait ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Workflow\Filter\FiltersHandler')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\FiltersHandler', 'ObjectivePHP\Application\Workflow\Filter\FiltersHandler');
    echo 'FiltersHandler ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Workflow\Hook')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Hook', 'ObjectivePHP\Application\Workflow\Hook');
    echo 'Hook ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Config\ConfigInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\ConfigInterface', 'ObjectivePHP\Config\ConfigInterface');
    echo 'ConfigInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Config\DirectiveInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\DirectiveInterface', 'ObjectivePHP\Config\DirectiveInterface');
    echo 'DirectiveInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Exception\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\Exception', 'ObjectivePHP\ServicesFactory\Exception\Exception');
    echo 'ServicesFactory\Exception\Exception ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs');
    echo 'ClassServiceSpecs ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs');
    echo 'AbstractServiceSpecs ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs');
    echo 'UndefinedServiceSpecs ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs');
    echo 'PrefabServiceSpecs ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException', 'ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException');
    echo 'ServiceNotFoundException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider', 'ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider');
    echo 'InjectionAnnotationProvider ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Message\Request\RequestInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface', 'ObjectivePHP\Message\Request\RequestInterface');
    echo 'Message\Request\RequestInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface', 'ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface');
    echo 'ParameterContainerInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Message\Response\ResponseInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Response\ResponseInterface', 'ObjectivePHP\Message\Response\ResponseInterface');
    echo 'Message\Response\ResponseInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\EventsHandler')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandler', 'ObjectivePHP\Events\EventsHandler');
    echo 'Events\EventsHandler ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\EventsHandlerInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandlerInterface', 'ObjectivePHP\Events\EventsHandlerInterface');
    echo 'Events\EventsHandlerInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\EventInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\EventInterface', 'ObjectivePHP\Events\EventInterface');
    echo 'Events\EventInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\Event')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Event', 'ObjectivePHP\Events\Event');
    echo 'Events\Event ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Events\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Exception', 'ObjectivePHP\Events\Exception');
    echo 'Events\Exception ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Events\Callback\AliasedCallback')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\AliasedCallback', 'ObjectivePHP\Events\Callback\AliasedCallback');
    echo 'AliasedCallback ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Events\Callback\CallbacksAggregate')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\CallbacksAggregate', 'ObjectivePHP\Events\Callback\CallbacksAggregate');
    echo 'CallbacksAggregate ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Matcher\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Matcher\Exception', 'ObjectivePHP\Matcher\Exception');
    echo 'Matcher\Exception ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\PaginatedResultSet')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSet', 'ObjectivePHP\Gateway\ResultSet\PaginatedResultSet');
    echo 'PaginatedResultSet ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\ResultSet\ResultSet')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSet', 'ObjectivePHP\Gateway\ResultSet\ResultSet');
    echo 'ResultSet ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Exception\ResultSetException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetException', 'ObjectivePHP\Gateway\Exception\ResultSetException');
    echo 'ResultSetException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Exception', 'ObjectivePHP\Primitives\Exception');
    echo 'Primitives\Exception ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\BreakException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\BreakException', 'ObjectivePHP\Primitives\Collection\BreakException');
    echo 'BreakException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Middleware\MiddlewareInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface', 'ObjectivePHP\Application\Middleware\MiddlewareInterface');
    echo 'MiddlewareInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface', 'ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface');
    echo 'ServicesFactoryAwareInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder');
    echo 'ClassServiceBuilder ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Config\ConfigReference')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\ConfigReference', 'ObjectivePHP\Config\ConfigReference');
    echo 'ConfigReference ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder');
    echo 'PrefabServiceBuilder ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\Collection\Collection')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection', 'ObjectivePHP\Primitives\Collection\Collection');
    echo 'Collection\Collection ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Stack')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Stack', 'ObjectivePHP\Notification\Stack');
    echo 'Stack ' . $result . PHP_EOL;
}


if (!class_exists('ObjectivePHP\Application\Workflow\Step')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Step', 'ObjectivePHP\Application\Workflow\Step');
    echo 'Step ' . $result . PHP_EOL;
}