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

if (!class_exists('ObjectivePHP\ServicesFactory\ServicesFactory')) {
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

if (!class_exists('ObjectivePHP\Application\Middleware\ActionMiddleware')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\ActionMiddleware', 'ObjectivePHP\Application\Middleware\ActionMiddleware');
    echo 'ActionMiddleware ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Middleware\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Middleware\Exception', 'ObjectivePHP\Application\Middleware\Exception');
    echo 'Exception ' . $result . PHP_EOL;
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

if (!trait_exists('ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait', 'ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait');
    echo 'ServicesFactoryAwareTrait ' . $result . PHP_EOL;
}

if (!trait_exists('ObjectivePHP\Application\Workflow\Filter\FiltersHandler')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\FiltersHandler', 'ObjectivePHP\Application\Workflow\Filter\FiltersHandler');
    echo 'FiltersHandler ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Workflow\Filter\AbstractFilter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\AbstractFilter', 'ObjectivePHP\Application\Workflow\Filter\AbstractFilter');
    echo 'AbstractFilter ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Workflow\Filter\ContentTypeFilter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\ContentTypeFilter', 'ObjectivePHP\Application\Workflow\Filter\ContentTypeFilter');
    echo 'ContentTypeFilter ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Workflow\Filter\EnvFilter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\EnvFilter', 'ObjectivePHP\Application\Workflow\Filter\EnvFilter');
    echo 'EnvFilter ' . $result . PHP_EOL;
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

if (!class_exists('ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs');
    echo 'ClassServiceSpecs ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs');
    echo 'AbstractServiceSpecs ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs', 'ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs');
    echo 'UndefinedServiceSpecs ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs')) {
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

if (!class_exists('ObjectivePHP\Events\EventsHandler')) {
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

if (!class_exists('ObjectivePHP\Config\Config')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\Config', 'ObjectivePHP\Config\Config');
    echo 'Config\Config ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\ApplicationAwareInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\ApplicationAwareInterface', 'ObjectivePHP\Application\ApplicationAwareInterface');
    echo 'ApplicationAwareInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\DataProcessor\DataProcessorInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessorInterface', 'ObjectivePHP\DataProcessor\DataProcessorInterface');
    echo 'DataProcessorInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Action\Parameter\ParameterProcessorInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\Parameter\ParameterProcessorInterface', 'ObjectivePHP\Application\Action\Parameter\ParameterProcessorInterface');
    echo 'ParameterProcessorInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\AjaxAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\AjaxAction', 'ObjectivePHP\Application\Action\AjaxAction');
    echo 'AjaxAction ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\HttpAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\HttpAction', 'ObjectivePHP\Application\Action\HttpAction');
    echo 'HttpAction ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\RenderableAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\RenderableAction', 'ObjectivePHP\Application\Action\RenderableAction');
    echo 'RenderableAction ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Action\RenderableActionInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\RenderableActionInterface', 'ObjectivePHP\Application\Action\RenderableActionInterface');
    echo 'RenderableActionInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Application\Action\RenderableActionInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\RenderableActionInterface', 'ObjectivePHP\Application\Action\RenderableActionInterface');
    echo 'RenderableActionInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\SubRoutingAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\SubRoutingAction', 'ObjectivePHP\Application\Action\SubRoutingAction');
    echo 'SubRoutingAction ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\RestfulAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\RestfulAction', 'ObjectivePHP\Application\Action\RestfulAction');
    echo 'RestfulAction ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Action\VersionedApiAction')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Action\VersionedApiAction', 'ObjectivePHP\Application\Action\VersionedApiAction');
    echo 'VersionedApiAction ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\StackedValuesDirective')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\StackedValuesDirective', 'ObjectivePHP\Config\StackedValuesDirective');
    echo 'StackedValuesDirective ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\ActionNamespace')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\ActionNamespace', 'ObjectivePHP\Application\Config\ActionNamespace');
    echo 'ActionNamespace ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\SingleValueDirective')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\SingleValueDirective', 'ObjectivePHP\Config\SingleValueDirective');
    echo 'SingleValueDirective ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\ApplicationName')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\ApplicationName', 'ObjectivePHP\Application\Config\ApplicationName');
    echo 'ApplicationName ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\LayoutsLocation')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\LayoutsLocation', 'ObjectivePHP\Application\Config\LayoutsLocation');
    echo 'LayoutsLocation ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\SingleValueDirectiveGroup')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\SingleValueDirectiveGroup', 'ObjectivePHP\Config\SingleValueDirectiveGroup');
    echo 'SingleValueDirectiveGroup ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\Param')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\Param', 'ObjectivePHP\Application\Config\Param');
    echo 'Config\Param ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\SimpleRoute')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\SimpleRoute', 'ObjectivePHP\Application\Config\SimpleRoute');
    echo 'SimpleRoute ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\UrlAlias')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\UrlAlias', 'ObjectivePHP\Application\Config\UrlAlias');
    echo 'UrlAlias ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Config\ViewsLocation')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Config\ViewsLocation', 'ObjectivePHP\Application\Config\ViewsLocation');
    echo 'ViewsLocation ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ActionPlugger')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ActionPlugger', 'ObjectivePHP\Application\Operation\ActionPlugger');
    echo 'ActionPlugger ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ExceptionHandler')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ExceptionHandler', 'ObjectivePHP\Application\Operation\ExceptionHandler');
    echo 'ExceptionHandler ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\PackageLoader')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\PackageLoader', 'ObjectivePHP\Application\Operation\PackageLoader');
    echo 'PackageLoader ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\RequestWrapper')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\RequestWrapper', 'ObjectivePHP\Application\Operation\RequestWrapper');
    echo 'RequestWrapper ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ResponseInitializer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ResponseInitializer', 'ObjectivePHP\Application\Operation\ResponseInitializer');
    echo 'ResponseInitializer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ResponseSender')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ResponseSender', 'ObjectivePHP\Application\Operation\ResponseSender');
    echo 'ResponseSender ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ServiceLoader')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ServiceLoader', 'ObjectivePHP\Application\Operation\ServiceLoader');
    echo 'ServiceLoader ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\SimpleRouter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\SimpleRouter', 'ObjectivePHP\Application\Operation\SimpleRouter');
    echo 'SimpleRouter ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ViewRenderer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ViewRenderer', 'ObjectivePHP\Application\Operation\ViewRenderer');
    echo 'ViewRenderer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Operation\ViewResolver')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Operation\ViewResolver', 'ObjectivePHP\Application\Operation\ViewResolver');
    echo 'ViewResolver ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Session\Session')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Session\Session', 'ObjectivePHP\Application\Session\Session');
    echo 'Session\Session ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\View\Helper\Currency')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\View\Helper\Currency', 'ObjectivePHP\Application\View\Helper\Currency');
    echo 'Helper\Currency ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\View\Helper\Date')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\View\Helper\Date', 'ObjectivePHP\Application\View\Helper\Date');
    echo 'Helper\Date ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\View\Helper\Vars')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\View\Helper\Vars', 'ObjectivePHP\Application\View\Helper\Vars');
    echo 'Helper\Vars ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Workflow\Filter\RouteFilter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\RouteFilter', 'ObjectivePHP\Application\Workflow\Filter\RouteFilter');
    echo 'RouteFilter ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\Workflow\Filter\UrlFilter')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\UrlFilter', 'ObjectivePHP\Application\Workflow\Filter\UrlFilter');
    echo 'UrlFilter ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Application\AbstractApplication')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Application\AbstractApplication', 'ObjectivePHP\Application\AbstractApplication');
    echo 'AbstractApplication ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\Loader\DirectoryLoader')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\Loader\DirectoryLoader', 'ObjectivePHP\Config\Loader\DirectoryLoader');
    echo 'DirectoryLoader ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Config\Loader\LoaderInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\Loader\LoaderInterface', 'ObjectivePHP\Config\Loader\LoaderInterface');
    echo 'LoaderInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\AbstractDirective')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\AbstractDirective', 'ObjectivePHP\Config\AbstractDirective');
    echo 'AbstractDirective ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\Exception', 'ObjectivePHP\Config\Exception');
    echo 'Config\Exception ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\SingleDirective')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\SingleDirective', 'ObjectivePHP\Config\SingleDirective');
    echo 'Config\SingleDirective ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Config\StackedDirective')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Config\StackedDirective', 'ObjectivePHP\Config\StackedDirective');
    echo 'Config\StackedDirective ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\DataProcessor\AbstractDataProcessor')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\AbstractDataProcessor', 'ObjectivePHP\DataProcessor\AbstractDataProcessor');
    echo 'AbstractDataProcessor ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\DataProcessor\DataProcessingException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessingException', 'ObjectivePHP\DataProcessor\DataProcessingException');
    echo 'DataProcessingException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\DataProcessor\DataProcessorInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessorInterface', 'ObjectivePHP\DataProcessor\DataProcessorInterface');
    echo 'DataProcessorInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\DataProcessor\DateProcessor')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\DateProcessor', 'ObjectivePHP\DataProcessor\DateProcessor');
    echo 'DateProcessor ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\DataProcessor\NumericProcessor')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\NumericProcessor', 'ObjectivePHP\DataProcessor\NumericProcessor');
    echo 'NumericProcessor ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\DataProcessor\StringProcessor')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\DataProcessor\StringProcessor', 'ObjectivePHP\DataProcessor\StringProcessor');
    echo 'StringProcessor ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Events\Callback\AbstractCallback')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\AbstractCallback', 'ObjectivePHP\Events\Callback\AbstractCallback');
    echo 'AbstractCallback ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\Callback\CallbackInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\Callback\CallbackInterface', 'ObjectivePHP\Events\Callback\CallbackInterface');
    echo 'CallbackInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Events\EventsHandlerAwareInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandlerAwareInterface', 'ObjectivePHP\Events\EventsHandlerAwareInterface');
    echo 'EventsHandlerAwareInterface ' . $result . PHP_EOL;
}

if (!trait_exists('ObjectivePHP\Events\EventsHandlerAwareTrait')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Events\EventsHandlerAwareTrait', 'ObjectivePHP\Events\EventsHandlerAwareTrait');
    echo 'EventsHandlerAwareTrait ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Event\MetaGateway\OnProxyReadingRequestException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Event\MetaGateway\OnProxyReadingRequestException', 'ObjectivePHP\Gateway\Event\MetaGateway\OnProxyReadingRequestException');
    echo 'OnProxyReadingRequestException ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Event\MetaGateway\OnProxyWritingRequestException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Event\MetaGateway\OnProxyWritingRequestException', 'ObjectivePHP\Gateway\Event\MetaGateway\OnProxyWritingRequestException');
    echo 'OnProxyWritingRequestException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\EntityException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\EntityException', 'ObjectivePHP\Gateway\Exception\EntityException');
    echo 'EntityException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\GatewayException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\GatewayException', 'ObjectivePHP\Gateway\Exception\GatewayException');
    echo 'GatewayException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\MetaGatewayException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\MetaGatewayException', 'ObjectivePHP\Gateway\Exception\MetaGatewayException');
    echo 'MetaGatewayException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\NoResultException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\NoResultException', 'ObjectivePHP\Gateway\Exception\NoResultException');
    echo 'NoResultException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\ProjectionException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\ProjectionException', 'ObjectivePHP\Gateway\Exception\ProjectionException');
    echo 'ProjectionException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Exception\ResultSetDescriptorException')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetDescriptorException', 'ObjectivePHP\Gateway\Exception\ResultSetDescriptorException');
    echo 'ResultSetDescriptorException ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface', 'ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface');
    echo 'DenormalizedDataExtractorInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Projection\Projection')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Projection\Projection', 'ObjectivePHP\Gateway\Projection\Projection');
    echo 'Projection ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Projection\ProjectionInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Projection\ProjectionInterface', 'ObjectivePHP\Gateway\Projection\ProjectionInterface');
    echo 'ProjectionInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\Projection\PaginatedProjectionInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Projection\PaginatedProjectionInterface', 'ObjectivePHP\Gateway\Projection\PaginatedProjectionInterface');
    echo 'PaginatedProjectionInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\Projection\PaginatedProjection')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\Projection\PaginatedProjection', 'ObjectivePHP\Gateway\Projection\PaginatedProjection');
    echo 'PaginatedProjection ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptor')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptor', 'ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptor');
    echo 'ResultSetDescriptor ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptorInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptorInterface', 'ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptorInterface');
    echo 'ResultSetDescriptorInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\ResultSet\Factory\ResultSetFactoryInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Factory\ResultSetFactoryInterface', 'ObjectivePHP\Gateway\ResultSet\Factory\ResultSetFactoryInterface');
    echo 'ResultSetFactoryInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\ResultSet\PaginatedResultSet')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSet', 'ObjectivePHP\Gateway\ResultSet\PaginatedResultSet');
    echo 'PaginatedResultSet ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\ResultSet\ResultSet')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSet', 'ObjectivePHP\Gateway\ResultSet\ResultSet');
    echo 'ResultSet ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\AbstractGateway')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\AbstractGateway', 'ObjectivePHP\Gateway\AbstractGateway');
    echo 'AbstractGateway ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\AbstractPaginableGateway')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\AbstractPaginableGateway', 'ObjectivePHP\Gateway\AbstractPaginableGateway');
    echo 'AbstractPaginableGateway ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\GatewayInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\GatewayInterface', 'ObjectivePHP\Gateway\GatewayInterface');
    echo 'GatewayInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Gateway\MetaGateway')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\MetaGateway', 'ObjectivePHP\Gateway\MetaGateway');
    echo 'MetaGateway ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\MetaGatewayInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\MetaGatewayInterface', 'ObjectivePHP\Gateway\MetaGatewayInterface');
    echo 'MetaGatewayInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Gateway\PaginableGatewayInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Gateway\PaginableGatewayInterface', 'ObjectivePHP\Gateway\PaginableGatewayInterface');
    echo 'PaginableGatewayInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Attributes\Attributes')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Attributes\Attributes', 'ObjectivePHP\Html\Attributes\Attributes');
    echo 'Html\Attributes\Attributes ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Markdown\Md')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Markdown\Md', 'ObjectivePHP\Html\Markdown\Md');
    echo 'Html\Markdown\Md ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\AbstractMessage')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\AbstractMessage', 'ObjectivePHP\Html\Message\AbstractMessage');
    echo 'Html\Message\AbstractMessage ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\Alert')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\Alert', 'ObjectivePHP\Html\Message\Alert');
    echo 'Html\Message\Alert ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\Info')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\Info', 'ObjectivePHP\Html\Message\Info');
    echo 'Html\Message\Info ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Html\Message\MessageInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\MessageInterface', 'ObjectivePHP\Html\Message\MessageInterface');
    echo 'MessageInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\MessageStack')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\MessageStack', 'ObjectivePHP\Html\Message\MessageStack');
    echo 'MessageStack ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\Success')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\Success', 'ObjectivePHP\Html\Message\Success');
    echo 'Success ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Message\Warning')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Message\Warning', 'ObjectivePHP\Html\Message\Warning');
    echo 'Warning ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Tag')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Tag', 'ObjectivePHP\Html\Tag\Tag');
    echo 'Html\Tag\Tag ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Html\Tag\TagInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Tag', 'ObjectivePHP\Html\Tag\TagInterface');
    echo 'Html\Tag\TagInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Input\Input')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Input', 'ObjectivePHP\Html\Tag\Input\Input');
    echo 'Tag\Input\Input ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Input\InputTagRenderer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Input', 'ObjectivePHP\Html\Tag\Input\InputTagRenderer');
    echo 'Tag\Input\InputTagRenderer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Input\Option')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Option', 'ObjectivePHP\Html\Tag\Input\Option');
    echo 'Tag\Input\Option ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Input\Select')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Select', 'ObjectivePHP\Html\Tag\Input\Select');
    echo 'Tag\Input\Select ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer', 'ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer');
    echo 'Tag\Renderer\DefaultTagRenderer ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Html\Tag\Renderer\TagRendererInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\TagRendererInterface', 'ObjectivePHP\Html\Tag\Renderer\TagRendererInterface');
    echo 'Tag\Renderer\TagRendererInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Css')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Css', 'ObjectivePHP\Html\Css');
    echo 'Tag\Renderer\TagRendererInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Exception')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Exception', 'ObjectivePHP\Html\Exception');
    echo 'Html\Exception ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Html\Js')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Html\Js', 'ObjectivePHP\Html\Js');
    echo 'Html\Js ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer', 'ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer');
    echo 'AbstractContainer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Request\Parameter\Container\CliParameterContainer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\CliParameterContainer', 'ObjectivePHP\Message\Request\Parameter\Container\CliParameterContainer');
    echo 'CliParameterContainer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer', 'ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer');
    echo 'HttpParameterContainer ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Request\AbstractRequest')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\AbstractRequest', 'ObjectivePHP\Message\Request\AbstractRequest');
    echo 'AbstractRequest ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Request\HttpRequest')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Request\HttpRequest', 'ObjectivePHP\Message\Request\HttpRequest');
    echo 'HttpRequest ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Response\HttpResponse')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Response\HttpResponse', 'ObjectivePHP\Message\Response\HttpResponse');
    echo 'Message\Response\HttpResponse ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Message\Response\JsonResponse')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Message\Response\JsonResponse', 'ObjectivePHP\Message\Response\JsonResponse');
    echo 'Message\Response\JsonResponse ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\AbstractMessage')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\AbstractMessage', 'ObjectivePHP\Notification\AbstractMessage');
    echo 'Notification\AbstractMessage ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Alert')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Alert', 'ObjectivePHP\Notification\Alert');
    echo 'Notification\Alert ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Info')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Info', 'ObjectivePHP\Notification\Info');
    echo 'Notification\Info ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Notification\MessageInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\MessageInterface', 'ObjectivePHP\Notification\MessageInterface');
    echo 'Notification\MessageInterface ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Stack')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Stack', 'ObjectivePHP\Notification\Stack');
    echo 'Notification\Stack ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Success')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Success', 'ObjectivePHP\Notification\Success');
    echo 'Notification\Success ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Notification\Warning')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Notification\Warning', 'ObjectivePHP\Notification\Warning');
    echo 'Notification\Warning ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\Merger\AbstractMerger')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\AbstractMerger', 'ObjectivePHP\Primitives\Merger\AbstractMerger');
    echo 'AbstractMerger ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\Primitives\Merger\MergePolicy')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergePolicy', 'ObjectivePHP\Primitives\Merger\MergePolicy');
    echo 'MergePolicy ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Merger\MergerInterface')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergerInterface', 'ObjectivePHP\Primitives\Merger\MergerInterface');
    echo 'MergerInterface ' . $result . PHP_EOL;
}

if (!interface_exists('ObjectivePHP\Primitives\Merger\ValueMerger')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\Primitives\Merger\ValueMerger', 'ObjectivePHP\Primitives\Merger\ValueMerger');
    echo 'ValueMerger ' . $result . PHP_EOL;
}

if (!class_exists('ObjectivePHP\ServicesFactory\Config\Service')) {
    $result = class_alias('Fei\ApiServer\ObjectivePHP\ServicesFactory\Config\Service', 'ObjectivePHP\ServicesFactory\Config\Service');
    echo 'Service ' . $result . PHP_EOL;
}
