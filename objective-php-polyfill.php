<?php

$polyfillMap = [
    'ObjectivePHP\Gateway\Entity\EntityInterface'                           => 'Fei\ApiServer\ObjectivePHP\Gateway\Entity\EntityInterface',
    'ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface'            => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSetInterface',
    'ObjectivePHP\Gateway\ResultSet\ResultSetInterface'                     => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSetInterface',
    'ObjectivePHP\ServicesFactory\Annotation\Inject'                        => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Annotation\Inject',
    'ObjectivePHP\ServicesFactory\ServiceReference'                         => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\ServiceReference',
    'ObjectivePHP\Gateway\Entity\Entity'                                    => 'Fei\ApiServer\ObjectivePHP\Gateway\Entity\Entity',
    'ObjectivePHP\Primitives\String\Camel'                                  => 'Fei\ApiServer\ObjectivePHP\Primitives\String\Camel',
    'ObjectivePHP\Primitives\String\Snake'                                  => 'Fei\ApiServer\ObjectivePHP\Primitives\String\Snake',
    'ObjectivePHP\Application\ApplicationInterface'                         => 'Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface',
    'ObjectivePHP\Application\Exception'                                    => 'Fei\ApiServer\ObjectivePHP\Application\Exception',
    'ObjectivePHP\Invokable\InvokableInterface'                             => 'Fei\ApiServer\ObjectivePHP\Invokable\InvokableInterface',
    'ObjectivePHP\Notification\MessageInterface'                            => 'Fei\ApiServer\ObjectivePHP\Notification\MessageInterface',
    'ObjectivePHP\Html\Message\MessageInterface'                            => 'Fei\ApiServer\ObjectivePHP\Html\Message\MessageInterface',
    'ObjectivePHP\Invokable\Invokable'                                      => 'Fei\ApiServer\ObjectivePHP\Invokable\Invokable',
    'ObjectivePHP\Invokable\AbstractInvokable'                              => 'Fei\ApiServer\ObjectivePHP\Invokable\AbstractInvokable',
    'ObjectivePHP\Invokable\Exception'                                      => 'Fei\ApiServer\ObjectivePHP\Invokable\Exception',
    'ObjectivePHP\ServicesFactory\ServicesFactory'                          => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactory',
    'ObjectivePHP\Matcher\Matcher'                                          => 'Fei\ApiServer\ObjectivePHP\Matcher\Matcher',
    'ObjectivePHP\Application\Middleware\AbstractMiddleware'                => 'Fei\ApiServer\ObjectivePHP\Application\Middleware\AbstractMiddleware',
    'ObjectivePHP\Primitives\AbstractPrimitive'                             => 'Fei\ApiServer\ObjectivePHP\Primitives\AbstractPrimitive',
    'ObjectivePHP\Primitives\PrimitiveInterface'                            => 'Fei\ApiServer\ObjectivePHP\Primitives\PrimitiveInterface',
    'ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer'        => 'Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\ObjectNormalizer',
    'ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer'     => 'Fei\ApiServer\ObjectivePHP\Primitives\Collection\Normalizer\PrimitiveNormalizer',
    'ObjectivePHP\Application\Middleware\EmbeddedMiddleware'                => 'Fei\ApiServer\ObjectivePHP\Application\Middleware\EmbeddedMiddleware',
    'ObjectivePHP\Application\Middleware\ActionMiddleware'                  => 'Fei\ApiServer\ObjectivePHP\Application\Middleware\ActionMiddleware',
    'ObjectivePHP\Application\Middleware\Exception'                         => 'Fei\ApiServer\ObjectivePHP\Application\Middleware\Exception',
    'ObjectivePHP\Primitives\Collection\Validator\ObjectValidator'          => 'Fei\ApiServer\ObjectivePHP\Primitives\Collection\Validator\ObjectValidator',
    'ObjectivePHP\Primitives\Merger\MergerInterface'                        => 'Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergerInterface',
    'ObjectivePHP\Primitives\String\Str'                                    => 'Fei\ApiServer\ObjectivePHP\Primitives\String\Str',
    'ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface'          => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ServiceBuilderInterface',
    'ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface'              => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ServiceSpecsInterface',
    'ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait'                => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareTrait',
    'ObjectivePHP\Application\Workflow\Filter\FiltersHandler'               => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\FiltersHandler',
    'ObjectivePHP\Application\Workflow\Filter\AbstractFilter'               => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\AbstractFilter',
    'ObjectivePHP\Application\Workflow\Filter\ContentTypeFilter'            => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\ContentTypeFilter',
    'ObjectivePHP\Application\Workflow\Filter\EnvFilter'                    => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\EnvFilter',
    'ObjectivePHP\Application\Workflow\Hook'                                => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Hook',
    'ObjectivePHP\Config\ConfigInterface'                                   => 'Fei\ApiServer\ObjectivePHP\Config\ConfigInterface',
    'ObjectivePHP\Config\DirectiveInterface'                                => 'Fei\ApiServer\ObjectivePHP\Config\DirectiveInterface',
    'ObjectivePHP\ServicesFactory\Exception\Exception'                      => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\Exception',
    'ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs'                  => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\ClassServiceSpecs',
    'ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs'               => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\AbstractServiceSpecs',
    'ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs'              => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\UndefinedServiceSpecs',
    'ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs'                 => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\PrefabServiceSpecs',
    'ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException'       => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Exception\ServiceNotFoundException',
    'ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider'        => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Specs\InjectionAnnotationProvider',
    'ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface' => 'Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\ParameterContainerInterface',
    'ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer'     => 'Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\AbstractContainer',
    'ObjectivePHP\Message\Response\ResponseInterface'                        => 'Fei\ApiServer\ObjectivePHP\Message\Response\ResponseInterface',
    'ObjectivePHP\Message\Request\RequestInterface'                          => 'Fei\ApiServer\ObjectivePHP\Message\Request\RequestInterface',
    'ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer' => 'Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\HttpParameterContainer',
    'ObjectivePHP\Events\EventsHandler'                                      => 'Fei\ApiServer\ObjectivePHP\Events\EventsHandler',
    'ObjectivePHP\Events\EventsHandlerInterface'                             => 'Fei\ApiServer\ObjectivePHP\Events\EventsHandlerInterface',
    'ObjectivePHP\Events\EventInterface'                                     => 'Fei\ApiServer\ObjectivePHP\Events\EventInterface',
    'ObjectivePHP\Events\Event'                                              => 'Fei\ApiServer\ObjectivePHP\Events\Event',
    'ObjectivePHP\Events\Exception'                                          => 'Fei\ApiServer\ObjectivePHP\Events\Exception',
    'ObjectivePHP\Events\Callback\AliasedCallback'                           => 'Fei\ApiServer\ObjectivePHP\Events\Callback\AliasedCallback',
    'ObjectivePHP\Events\Callback\CallbacksAggregate'                        => 'Fei\ApiServer\ObjectivePHP\Events\Callback\CallbacksAggregate',
    'ObjectivePHP\Matcher\Exception'                                         => 'Fei\ApiServer\ObjectivePHP\Matcher\Exception',
    'ObjectivePHP\Gateway\ResultSet\PaginatedResultSet'                      => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\PaginatedResultSet',
    'ObjectivePHP\Gateway\ResultSet\ResultSet'                               => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\ResultSet',
    'ObjectivePHP\Gateway\Exception\ResultSetException'                      => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetException',
    'ObjectivePHP\Primitives\Exception'                                      => 'Fei\ApiServer\ObjectivePHP\Primitives\Exception',
    'ObjectivePHP\Primitives\Collection\BreakException'                      => 'Fei\ApiServer\ObjectivePHP\Primitives\Collection\BreakException',
    'ObjectivePHP\Application\Middleware\MiddlewareInterface'                => 'Fei\ApiServer\ObjectivePHP\Application\Middleware\MiddlewareInterface',
    'ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface'             => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\ServicesFactoryAwareInterface',
    'ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder'            => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\AbstractServiceBuilder',
    'ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder'               => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\ClassServiceBuilder',
    'ObjectivePHP\Config\ConfigReference'                                    => 'Fei\ApiServer\ObjectivePHP\Config\ConfigReference',
    'ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder'              => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Builder\PrefabServiceBuilder',
    'ObjectivePHP\Primitives\Collection\Collection'                          => 'Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection',
    'ObjectivePHP\Notification\Stack'                                        => 'Fei\ApiServer\ObjectivePHP\Notification\Stack',
    'ObjectivePHP\Application\Workflow\Step'                                 => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Step',
    'ObjectivePHP\Config\Config'                                             => 'Fei\ApiServer\ObjectivePHP\Config\Config',
    'ObjectivePHP\Application\ApplicationAwareInterface'                     => 'Fei\ApiServer\ObjectivePHP\Application\ApplicationAwareInterface',
    'ObjectivePHP\DataProcessor\DataProcessorInterface'                      => 'Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessorInterface',
    'ObjectivePHP\Application\Action\Parameter\ParameterProcessorInterface'  => 'Fei\ApiServer\ObjectivePHP\Application\Action\Parameter\ParameterProcessorInterface',
    'ObjectivePHP\Application\Action\AjaxAction'                             => 'Fei\ApiServer\ObjectivePHP\Application\Action\AjaxAction',
    'ObjectivePHP\Application\Action\HttpAction'                             => 'Fei\ApiServer\ObjectivePHP\Application\Action\HttpAction',
    'ObjectivePHP\Application\Action\RenderableAction'                       => 'Fei\ApiServer\ObjectivePHP\Application\Action\RenderableAction',
    'ObjectivePHP\Application\Action\RenderableActionInterface'              => 'Fei\ApiServer\ObjectivePHP\Application\Action\RenderableActionInterface',
    'ObjectivePHP\Application\Action\SubRoutingAction'                       => 'Fei\ApiServer\ObjectivePHP\Application\Action\SubRoutingAction',
    'ObjectivePHP\Application\Action\RestfulAction'                          => 'Fei\ApiServer\ObjectivePHP\Application\Action\RestfulAction',
    'ObjectivePHP\Application\Action\VersionedApiAction'                     => 'Fei\ApiServer\ObjectivePHP\Application\Action\VersionedApiAction',
    'ObjectivePHP\Config\StackedValuesDirective'                             => 'Fei\ApiServer\ObjectivePHP\Config\StackedValuesDirective',
    'ObjectivePHP\Application\Config\ActionNamespace'                        => 'Fei\ApiServer\ObjectivePHP\Application\Config\ActionNamespace',
    'ObjectivePHP\Config\SingleValueDirective'                               => 'Fei\ApiServer\ObjectivePHP\Config\SingleValueDirective',
    'ObjectivePHP\Application\Config\ApplicationName'                        => 'Fei\ApiServer\ObjectivePHP\Application\Config\ApplicationName',
    'ObjectivePHP\Application\Config\LayoutsLocation'                        => 'Fei\ApiServer\ObjectivePHP\Application\Config\LayoutsLocation',
    'ObjectivePHP\Config\SingleValueDirectiveGroup'                          => 'Fei\ApiServer\ObjectivePHP\Config\SingleValueDirectiveGroup',
    'ObjectivePHP\Application\Config\Param'                                  => 'Fei\ApiServer\ObjectivePHP\Application\Config\Param',
    'ObjectivePHP\Application\Config\SimpleRoute'                            => 'Fei\ApiServer\ObjectivePHP\Application\Config\SimpleRoute',
    'ObjectivePHP\Application\Config\UrlAlias'                               => 'Fei\ApiServer\ObjectivePHP\Application\Config\UrlAlias',
    'ObjectivePHP\Application\Config\ViewsLocation'                          => 'Fei\ApiServer\ObjectivePHP\Application\Config\ViewsLocation',
    'ObjectivePHP\Application\Operation\ActionPlugger'                       => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ActionPlugger',
    'ObjectivePHP\Application\Operation\ExceptionHandler'                    => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ExceptionHandler',
    'ObjectivePHP\Application\Operation\PackageLoader'                       => 'Fei\ApiServer\ObjectivePHP\Application\Operation\PackageLoader',
    'ObjectivePHP\Application\Operation\RequestWrapper'                      => 'Fei\ApiServer\ObjectivePHP\Application\Operation\RequestWrapper',
    'ObjectivePHP\Application\Operation\ResponseInitializer'                 => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ResponseInitializer',
    'ObjectivePHP\Application\Operation\ResponseSender'                      => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ResponseSender',
    'ObjectivePHP\Application\Operation\ServiceLoader'                       => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ServiceLoader',
    'ObjectivePHP\Application\Operation\SimpleRouter'                        => 'Fei\ApiServer\ObjectivePHP\Application\Operation\SimpleRouter',
    'ObjectivePHP\Application\Operation\ViewRenderer'                        => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ViewRenderer',
    'ObjectivePHP\Application\Operation\ViewResolver'                        => 'Fei\ApiServer\ObjectivePHP\Application\Operation\ViewResolver',
    'ObjectivePHP\Application\Session\Session'                               => 'Fei\ApiServer\ObjectivePHP\Application\Session\Session',
    'ObjectivePHP\Application\View\Helper\Currency'                           => 'Fei\ApiServer\ObjectivePHP\Application\View\Helper\Currency',
    'ObjectivePHP\Application\View\Helper\Date'                               => 'Fei\ApiServer\ObjectivePHP\Application\View\Helper\Date',
    'ObjectivePHP\Application\View\Helper\Vars'                               => 'Fei\ApiServer\ObjectivePHP\Application\View\Helper\Vars',
    'ObjectivePHP\Application\Workflow\Filter\RouteFilter'                   => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\RouteFilter',
    'ObjectivePHP\Application\Workflow\Filter\UrlFilter'                     => 'Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter\UrlFilter',
    'ObjectivePHP\Application\AbstractApplication'                            => 'Fei\ApiServer\ObjectivePHP\Application\AbstractApplication',
    'ObjectivePHP\Config\Loader\DirectoryLoader'                             => 'Fei\ApiServer\ObjectivePHP\Config\Loader\DirectoryLoader',
    'ObjectivePHP\Config\Loader\LoaderInterface'                             => 'Fei\ApiServer\ObjectivePHP\Config\Loader\LoaderInterface',
    'ObjectivePHP\Config\AbstractDirective'                                  => 'Fei\ApiServer\ObjectivePHP\Config\AbstractDirective',
    'ObjectivePHP\Config\Exception'                                          => 'Fei\ApiServer\ObjectivePHP\Config\Exception',
    'ObjectivePHP\Config\SingleDirective'                                    => 'Fei\ApiServer\ObjectivePHP\Config\SingleDirective',
    'ObjectivePHP\Config\StackedDirective'                                   => 'Fei\ApiServer\ObjectivePHP\Config\StackedDirective',
    'ObjectivePHP\DataProcessor\AbstractDataProcessor'                        => 'Fei\ApiServer\ObjectivePHP\DataProcessor\AbstractDataProcessor',
    'ObjectivePHP\DataProcessor\DataProcessingException'                     => 'Fei\ApiServer\ObjectivePHP\DataProcessor\DataProcessingException',
    'ObjectivePHP\DataProcessor\DateProcessor'                               => 'Fei\ApiServer\ObjectivePHP\DataProcessor\DateProcessor',
    'ObjectivePHP\DataProcessor\NumericProcessor'                            => 'Fei\ApiServer\ObjectivePHP\DataProcessor\NumericProcessor',
    'ObjectivePHP\DataProcessor\StringProcessor'                             => 'Fei\ApiServer\ObjectivePHP\DataProcessor\StringProcessor',
    'ObjectivePHP\Events\Callback\AbstractCallback'                          => 'Fei\ApiServer\ObjectivePHP\Events\Callback\AbstractCallback',
    'ObjectivePHP\Events\Callback\CallbackInterface'                         => 'Fei\ApiServer\ObjectivePHP\Events\Callback\CallbackInterface',
    'ObjectivePHP\Events\EventsHandlerAwareInterface'                        => 'Fei\ApiServer\ObjectivePHP\Events\EventsHandlerAwareInterface',
    'ObjectivePHP\Events\EventsHandlerAwareTrait'                            => 'Fei\ApiServer\ObjectivePHP\Events\EventsHandlerAwareTrait',
    'ObjectivePHP\Gateway\Event\MetaGateway\OnProxyReadingRequestException'  => 'Fei\ApiServer\ObjectivePHP\Gateway\Event\MetaGateway\OnProxyReadingRequestException',
    'ObjectivePHP\Gateway\Event\MetaGateway\OnProxyWritingRequestException'  => 'Fei\ApiServer\ObjectivePHP\Gateway\Event\MetaGateway\OnProxyWritingRequestException',
    'ObjectivePHP\Gateway\Exception\EntityException'                         => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\EntityException',
    'ObjectivePHP\Gateway\Exception\GatewayException'                        => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\GatewayException',
    'ObjectivePHP\Gateway\Exception\MetaGatewayException'                    => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\MetaGatewayException',
    'ObjectivePHP\Gateway\Exception\NoResultException'                       => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\NoResultException',
    'ObjectivePHP\Gateway\Exception\ProjectionException'                     => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\ProjectionException',
    'ObjectivePHP\Gateway\Exception\ResultSetDescriptorException'            => 'Fei\ApiServer\ObjectivePHP\Gateway\Exception\ResultSetDescriptorException',
    'ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface'       => 'Fei\ApiServer\ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface',
    'ObjectivePHP\Gateway\Projection\Projection'                             => 'Fei\ApiServer\ObjectivePHP\Gateway\Projection\Projection',
    'ObjectivePHP\Gateway\Projection\ProjectionInterface'                    => 'Fei\ApiServer\ObjectivePHP\Gateway\Projection\ProjectionInterface',
    'ObjectivePHP\Gateway\Projection\PaginatedProjectionInterface'           => 'Fei\ApiServer\ObjectivePHP\Gateway\Projection\PaginatedProjectionInterface',
    'ObjectivePHP\Gateway\Projection\PaginatedProjection'                    => 'Fei\ApiServer\ObjectivePHP\Gateway\Projection\PaginatedProjection',
    'ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptor'          => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptor',
    'ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptorInterface' => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Descriptor\ResultSetDescriptorInterface',
    'ObjectivePHP\Gateway\ResultSet\Factory\ResultSetFactoryInterface'       => 'Fei\ApiServer\ObjectivePHP\Gateway\ResultSet\Factory\ResultSetFactoryInterface',
    'ObjectivePHP\Gateway\AbstractGateway'                                   => 'Fei\ApiServer\ObjectivePHP\Gateway\AbstractGateway',
    'ObjectivePHP\Gateway\AbstractPaginableGateway'                          => 'Fei\ApiServer\ObjectivePHP\Gateway\AbstractPaginableGateway',
    'ObjectivePHP\Gateway\GatewayInterface'                                  => 'Fei\ApiServer\ObjectivePHP\Gateway\GatewayInterface',
    'ObjectivePHP\Gateway\MetaGateway'                                       => 'Fei\ApiServer\ObjectivePHP\Gateway\MetaGateway',
    'ObjectivePHP\Gateway\MetaGatewayInterface'                              => 'Fei\ApiServer\ObjectivePHP\Gateway\MetaGatewayInterface',
    'ObjectivePHP\Gateway\PaginableGatewayInterface'                         => 'Fei\ApiServer\ObjectivePHP\Gateway\PaginableGatewayInterface',
    'ObjectivePHP\Html\Attributes\Attributes'                                => 'Fei\ApiServer\ObjectivePHP\Html\Attributes\Attributes',
    'ObjectivePHP\Html\Markdown\Md'                                          => 'Fei\ApiServer\ObjectivePHP\Html\Markdown\Md',
    'ObjectivePHP\Html\Message\AbstractMessage'                              => 'Fei\ApiServer\ObjectivePHP\Html\Message\AbstractMessage',
    'ObjectivePHP\Html\Message\Alert'                                        => 'Fei\ApiServer\ObjectivePHP\Html\Message\Alert',
    'ObjectivePHP\Html\Message\Info'                                         => 'Fei\ApiServer\ObjectivePHP\Html\Message\Info',
    'ObjectivePHP\Html\Message\MessageStack'                                 => 'Fei\ApiServer\ObjectivePHP\Html\Message\MessageStack',
    'ObjectivePHP\Html\Message\Success'                                      => 'Fei\ApiServer\ObjectivePHP\Html\Message\Success',
    'ObjectivePHP\Html\Message\Warning'                                      => 'Fei\ApiServer\ObjectivePHP\Html\Message\Warning',
    'ObjectivePHP\Html\Tag\Tag'                                               => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Tag',
    'ObjectivePHP\Html\Tag\TagInterface'                                      => 'Fei\ApiServer\ObjectivePHP\Html\Tag\TagInterface',
    'ObjectivePHP\Html\Tag\Input\Input'                                       => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Input',
    'ObjectivePHP\Html\Tag\Input\Option'                                      => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Option',
    'ObjectivePHP\Html\Tag\Input\Select'                                      => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Input\Select',
    'ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer'                      => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer',
    'ObjectivePHP\Html\Tag\Renderer\TagRendererInterface'                     => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\TagRendererInterface',
    'ObjectivePHP\Html\Tag\Input\InputTagRenderer'                            => 'Fei\ApiServer\ObjectivePHP\Html\Tag\Input\InputTagRenderer',
    'ObjectivePHP\Html\Css'                                                   => 'Fei\ApiServer\ObjectivePHP\Html\Css',
    'ObjectivePHP\Html\Exception'                                             => 'Fei\ApiServer\ObjectivePHP\Html\Exception',
    'ObjectivePHP\Html\Js'                                                    => 'Fei\ApiServer\ObjectivePHP\Html\Js',
    'ObjectivePHP\Message\Request\Parameter\Container\CliParameterContainer'  => 'Fei\ApiServer\ObjectivePHP\Message\Request\Parameter\Container\CliParameterContainer',
    'ObjectivePHP\Message\Request\AbstractRequest'                            => 'Fei\ApiServer\ObjectivePHP\Message\Request\AbstractRequest',
    'ObjectivePHP\Message\Request\HttpRequest'                                => 'Fei\ApiServer\ObjectivePHP\Message\Request\HttpRequest',
    'ObjectivePHP\Message\Response\HttpResponse'                              => 'Fei\ApiServer\ObjectivePHP\Message\Response\HttpResponse',
    'ObjectivePHP\Message\Response\JsonResponse'                              => 'Fei\ApiServer\ObjectivePHP\Message\Response\JsonResponse',
    'ObjectivePHP\Notification\AbstractMessage'                               => 'Fei\ApiServer\ObjectivePHP\Notification\AbstractMessage',
    'ObjectivePHP\Notification\Alert'                                         => 'Fei\ApiServer\ObjectivePHP\Notification\Alert',
    'ObjectivePHP\Notification\Info'                                          => 'Fei\ApiServer\ObjectivePHP\Notification\Info',
    'ObjectivePHP\Notification\Success'                                       => 'Fei\ApiServer\ObjectivePHP\Notification\Success',
    'ObjectivePHP\Notification\Warning'                                       => 'Fei\ApiServer\ObjectivePHP\Notification\Warning',
    'ObjectivePHP\Primitives\Merger\AbstractMerger'                           => 'Fei\ApiServer\ObjectivePHP\Primitives\Merger\AbstractMerger',
    'ObjectivePHP\Primitives\Merger\MergePolicy'                              => 'Fei\ApiServer\ObjectivePHP\Primitives\Merger\MergePolicy',
    'ObjectivePHP\Primitives\Merger\ValueMerger'                              => 'Fei\ApiServer\ObjectivePHP\Primitives\Merger\ValueMerger',
    'ObjectivePHP\ServicesFactory\Config\Service'                             => 'Fei\ApiServer\ObjectivePHP\ServicesFactory\Config\Service',
];

$classMap = [];

foreach ($polyfillMap as $originalClass => $polyfillClass) {
    if (!class_exists($originalClass) && !interface_exists($originalClass) && !trait_exists($originalClass)) {
        $result = class_alias($polyfillClass, $originalClass);
        $originalClassSlash = str_replace('\\', '/', $originalClass);
        $classMap[$originalClass] = __DIR__ . '/src/' . $originalClassSlash . '.php';
        // echo $originalClass . ' + ' . $result . PHP_EOL;
    }
}
