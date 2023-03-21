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

if (!interface_exists('ObjectivePHP\Application\ApplicationInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface', 'ObjectivePHP\Application\ApplicationInterface');
}

if (!class_exists('ObjectivePHP\Application\Workflow\Step')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Step', 'ObjectivePHP\Application\Workflow\Step');
}

if (!interface_exists('ObjectivePHP\Application\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Exception', 'ObjectivePHP\Application\Exception');
}

if (!interface_exists('ObjectivePHP\Application\Middleware\EmbeddedMiddleware')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\EmbeddedMiddleware', 'ObjectivePHP\Application\Middleware\EmbeddedMiddleware');
}

if (!interface_exists('ObjectivePHP\Application\Middleware\AbstractMiddleware')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\AbstractMiddleware', 'ObjectivePHP\Application\Middleware\AbstractMiddleware');
}

if (!interface_exists('ObjectivePHP\Application\Middleware\MiddlewareInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface', 'ObjectivePHP\Application\Middleware\MiddlewareInterface');
}

if (!interface_exists('ObjectivePHP\Invokable\InvokableInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface', 'ObjectivePHP\Invokable\InvokableInterface');
}

if (!interface_exists('ObjectivePHP\Notification\Stack')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Notification\Stack', 'ObjectivePHP\Notification\Stack');
}

if (!interface_exists('ObjectivePHP\Notification\MessageInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Notification\MessageInterface', 'ObjectivePHP\Notification\MessageInterface');
}

if (!interface_exists('ObjectivePHP\Invokable\Invokable')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Invokable\Invokable', 'ObjectivePHP\Invokable\Invokable');
}

if (!interface_exists('ObjectivePHP\Invokable\AbstractInvokable')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Invokable\AbstractInvokable', 'ObjectivePHP\Invokable\AbstractInvokable');
}

if (!interface_exists('ObjectivePHP\Invokable\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Invokable\Exception', 'ObjectivePHP\Invokable\Exception');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactory')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory', 'ObjectivePHP\ServicesFactory\ServicesFactory');
}

if (!interface_exists('ObjectivePHP\Matcher\Matcher')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Matcher\Matcher', 'ObjectivePHP\Matcher\Matcher');
}

if (!class_exists('ObjectivePHP\Primitives\Collection\Collection')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection', 'ObjectivePHP\Primitives\Collection\Collection');
}

if (!interface_exists('ObjectivePHP\Primitives\AbstractPrimitive')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\AbstractPrimitive', 'ObjectivePHP\Primitives\AbstractPrimitive');
}

if (!interface_exists('ObjectivePHP\Primitives\PrimitiveInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\PrimitiveInterface', 'ObjectivePHP\Primitives\PrimitiveInterface');
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer', 'ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer');
}

if (!interface_exists('ObjectivePHP\Primitives\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Exception', 'ObjectivePHP\Primitives\Exception');
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer', 'ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer');
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\Validator\ObjectValidator')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\Validator\ObjectValidator', 'ObjectivePHP\Primitives\Collection\Validator\ObjectValidator');
}

if (!interface_exists('ObjectivePHP\Primitives\Merger\MergerInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergerInterface', 'ObjectivePHP\Primitives\Merger\MergerInterface');
}

if (!interface_exists('ObjectivePHP\Primitives\String\Str')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\String\Str', 'ObjectivePHP\Primitives\String\Str');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface', 'ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface', 'ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface', 'ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait', 'ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait');
}

if (!interface_exists('ObjectivePHP\Config\ConfigReference')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Config\ConfigReference', 'ObjectivePHP\Config\ConfigReference');
}

if (!interface_exists('ObjectivePHP\Application\Workflow\Filter\FiltersHandler')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\FiltersHandler', 'ObjectivePHP\Application\Workflow\Filter\FiltersHandler');
}

if (!interface_exists('ObjectivePHP\Application\Workflow\Hook')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Hook', 'ObjectivePHP\Application\Workflow\Hook');
}

if (!interface_exists('ObjectivePHP\Primitives\Collection\BreakException')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Collection\BreakException', 'ObjectivePHP\Primitives\Collection\BreakException');
}

if (!interface_exists('ObjectivePHP\Config\Config')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Config\Config', 'ObjectivePHP\Config\Config');
}

if (!interface_exists('ObjectivePHP\Config\ConfigInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Config\ConfigInterface', 'ObjectivePHP\Config\ConfigInterface');
}

if (!interface_exists('ObjectivePHP\Config\DirectiveInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Config\DirectiveInterface', 'ObjectivePHP\Config\DirectiveInterface');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Exception\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\Exception', 'ObjectivePHP\ServicesFactory\Exception\Exception');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder', 'ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException', 'ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException');
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider')) {
    class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider', 'ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider');
}

if (!interface_exists('ObjectivePHP\Message\Request\RequestInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface', 'ObjectivePHP\Message\Request\RequestInterface');
}

if (!interface_exists('ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface', 'ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface');
}

if (!interface_exists('ObjectivePHP\Message\Response\ResponseInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Message\Response\ResponseInterface', 'ObjectivePHP\Message\Response\ResponseInterface');
}

if (!interface_exists('ObjectivePHP\Events\EventsHandler')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandler', 'ObjectivePHP\Events\EventsHandler');
}

if (!interface_exists('ObjectivePHP\Events\EventsHandlerInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandlerInterface', 'ObjectivePHP\Events\EventsHandlerInterface');
}

if (!interface_exists('ObjectivePHP\Events\EventInterface')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\EventInterface', 'ObjectivePHP\Events\EventInterface');
}

if (!interface_exists('ObjectivePHP\Events\Event')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\Event', 'ObjectivePHP\Events\Event');
}

if (!interface_exists('ObjectivePHP\Events\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\Exception', 'ObjectivePHP\Events\Exception');
}

if (!interface_exists('ObjectivePHP\Events\Callback\AliasedCallback')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\AliasedCallback', 'ObjectivePHP\Events\Callback\AliasedCallback');
}

if (!interface_exists('ObjectivePHP\Events\Callback\CallbacksAggregate')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\CallbacksAggregate', 'ObjectivePHP\Events\Callback\CallbacksAggregate');
}

if (!interface_exists('ObjectivePHP\Matcher\Exception')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Matcher\Exception', 'ObjectivePHP\Matcher\Exception');
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\PaginatedResultSet')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSet', 'ObjectivePHP\Gateway\ResultSet\PaginatedResultSet');
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\ResultSet')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSet', 'ObjectivePHP\Gateway\ResultSet\ResultSet');
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\ResultSetException')) {
    class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetException', 'ObjectivePHP\Gateway\Exception\ResultSetException');
}

