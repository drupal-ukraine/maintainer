<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * service_container_install
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class service_container_install extends \Drupal\Core\DependencyInjection\Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'accept_header_matcher' => 'getAcceptHeaderMatcherService',
            'access_arguments_resolver' => 'getAccessArgumentsResolverService',
            'access_check.csrf' => 'getAccessCheck_CsrfService',
            'access_check.custom' => 'getAccessCheck_CustomService',
            'access_check.default' => 'getAccessCheck_DefaultService',
            'access_check.entity' => 'getAccessCheck_EntityService',
            'access_check.entity_create' => 'getAccessCheck_EntityCreateService',
            'access_check.theme' => 'getAccessCheck_ThemeService',
            'access_manager' => 'getAccessManagerService',
            'access_route_subscriber' => 'getAccessRouteSubscriberService',
            'access_subscriber' => 'getAccessSubscriberService',
            'ajax.subscriber' => 'getAjax_SubscriberService',
            'ajax_response_renderer' => 'getAjaxResponseRendererService',
            'ajax_response_subscriber' => 'getAjaxResponseSubscriberService',
            'asset.css.collection_grouper' => 'getAsset_Css_CollectionGrouperService',
            'asset.css.collection_optimizer' => 'getAsset_Css_CollectionOptimizerService',
            'asset.css.collection_renderer' => 'getAsset_Css_CollectionRendererService',
            'asset.css.dumper' => 'getAsset_Css_DumperService',
            'asset.css.optimizer' => 'getAsset_Css_OptimizerService',
            'asset.js.collection_grouper' => 'getAsset_Js_CollectionGrouperService',
            'asset.js.collection_optimizer' => 'getAsset_Js_CollectionOptimizerService',
            'asset.js.collection_renderer' => 'getAsset_Js_CollectionRendererService',
            'asset.js.dumper' => 'getAsset_Js_DumperService',
            'asset.js.optimizer' => 'getAsset_Js_OptimizerService',
            'authentication' => 'getAuthenticationService',
            'authentication_subscriber' => 'getAuthenticationSubscriberService',
            'batch.storage' => 'getBatch_StorageService',
            'breadcrumb' => 'getBreadcrumbService',
            'cache.backend.apcu' => 'getCache_Backend_ApcuService',
            'cache.backend.database' => 'getCache_Backend_DatabaseService',
            'cache.backend.memory' => 'getCache_Backend_MemoryService',
            'cache.backend.null' => 'getCache_Backend_NullService',
            'cache.backend.php' => 'getCache_Backend_PhpService',
            'cache.bootstrap' => 'getCache_BootstrapService',
            'cache.data' => 'getCache_DataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.discovery' => 'getCache_DiscoveryService',
            'cache.entity' => 'getCache_EntityService',
            'cache.render' => 'getCache_RenderService',
            'cache_context.language' => 'getCacheContext_LanguageService',
            'cache_context.theme' => 'getCacheContext_ThemeService',
            'cache_context.timezone' => 'getCacheContext_TimezoneService',
            'cache_context.url' => 'getCacheContext_UrlService',
            'cache_contexts' => 'getCacheContextsService',
            'cache_factory' => 'getCacheFactoryService',
            'class_loader' => 'getClassLoaderService',
            'class_resolver' => 'getClassResolverService',
            'config.factory' => 'getConfig_FactoryService',
            'config.installer' => 'getConfig_InstallerService',
            'config.manager' => 'getConfig_ManagerService',
            'config.storage' => 'getConfig_StorageService',
            'config.storage.installer' => 'getConfig_Storage_InstallerService',
            'config.storage.schema' => 'getConfig_Storage_SchemaService',
            'config.storage.snapshot' => 'getConfig_Storage_SnapshotService',
            'config.storage.staging' => 'getConfig_Storage_StagingService',
            'config.typed' => 'getConfig_TypedService',
            'config_import_subscriber' => 'getConfigImportSubscriberService',
            'config_snapshot_subscriber' => 'getConfigSnapshotSubscriberService',
            'container.namespaces' => 'getContainer_NamespacesService',
            'content_negotiation' => 'getContentNegotiationService',
            'content_type_header_matcher' => 'getContentTypeHeaderMatcherService',
            'context.handler' => 'getContext_HandlerService',
            'controller.ajax' => 'getController_AjaxService',
            'controller.dialog' => 'getController_DialogService',
            'controller.entityform' => 'getController_EntityformService',
            'controller.page' => 'getController_PageService',
            'controller_resolver' => 'getControllerResolverService',
            'country_manager' => 'getCountryManagerService',
            'cron' => 'getCronService',
            'csrf_token' => 'getCsrfTokenService',
            'current_route_match' => 'getCurrentRouteMatchService',
            'current_user' => 'getCurrentUserService',
            'database' => 'getDatabaseService',
            'database.replica' => 'getDatabase_ReplicaService',
            'date' => 'getDateService',
            'diff.formatter' => 'getDiff_FormatterService',
            'element_info' => 'getElementInfoService',
            'entity.form_builder' => 'getEntity_FormBuilderService',
            'entity.manager' => 'getEntity_ManagerService',
            'entity.query' => 'getEntity_QueryService',
            'entity.query.config' => 'getEntity_Query_ConfigService',
            'entity.query.keyvalue' => 'getEntity_Query_KeyvalueService',
            'entity.query.sql' => 'getEntity_Query_SqlService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exception_controller' => 'getExceptionControllerService',
            'exception_listener' => 'getExceptionListenerService',
            'feed.bridge.reader' => 'getFeed_Bridge_ReaderService',
            'feed.bridge.writer' => 'getFeed_Bridge_WriterService',
            'feed.reader.atomentry' => 'getFeed_Reader_AtomentryService',
            'feed.reader.atomfeed' => 'getFeed_Reader_AtomfeedService',
            'feed.reader.contententry' => 'getFeed_Reader_ContententryService',
            'feed.reader.dublincoreentry' => 'getFeed_Reader_DublincoreentryService',
            'feed.reader.dublincorefeed' => 'getFeed_Reader_DublincorefeedService',
            'feed.reader.podcastentry' => 'getFeed_Reader_PodcastentryService',
            'feed.reader.podcastfeed' => 'getFeed_Reader_PodcastfeedService',
            'feed.reader.slashentry' => 'getFeed_Reader_SlashentryService',
            'feed.reader.threadentry' => 'getFeed_Reader_ThreadentryService',
            'feed.reader.wellformedwebentry' => 'getFeed_Reader_WellformedwebentryService',
            'feed.writer.atomrendererfeed' => 'getFeed_Writer_AtomrendererfeedService',
            'feed.writer.contentrendererentry' => 'getFeed_Writer_ContentrendererentryService',
            'feed.writer.dublincorerendererentry' => 'getFeed_Writer_DublincorerendererentryService',
            'feed.writer.dublincorerendererfeed' => 'getFeed_Writer_DublincorerendererfeedService',
            'feed.writer.itunesentry' => 'getFeed_Writer_ItunesentryService',
            'feed.writer.itunesfeed' => 'getFeed_Writer_ItunesfeedService',
            'feed.writer.itunesrendererentry' => 'getFeed_Writer_ItunesrendererentryService',
            'feed.writer.itunesrendererfeed' => 'getFeed_Writer_ItunesrendererfeedService',
            'feed.writer.slashrendererentry' => 'getFeed_Writer_SlashrendererentryService',
            'feed.writer.threadingrendererentry' => 'getFeed_Writer_ThreadingrendererentryService',
            'feed.writer.wellformedwebrendererentry' => 'getFeed_Writer_WellformedwebrendererentryService',
            'file.mime_type.guesser' => 'getFile_MimeType_GuesserService',
            'file.mime_type.guesser.extension' => 'getFile_MimeType_Guesser_ExtensionService',
            'finish_response_subscriber' => 'getFinishResponseSubscriberService',
            'flood' => 'getFloodService',
            'form_builder' => 'getFormBuilderService',
            'form_submitter' => 'getFormSubmitterService',
            'form_validator' => 'getFormValidatorService',
            'html_fragment_renderer' => 'getHtmlFragmentRendererService',
            'html_page_renderer' => 'getHtmlPageRendererService',
            'html_view_subscriber' => 'getHtmlViewSubscriberService',
            'http_client' => 'getHttpClientService',
            'http_kernel' => 'getHttpKernelService',
            'image.factory' => 'getImage_FactoryService',
            'image.toolkit.manager' => 'getImage_Toolkit_ManagerService',
            'info_parser' => 'getInfoParserService',
            'kernel' => 'getKernelService',
            'kernel_destruct_subscriber' => 'getKernelDestructSubscriberService',
            'keyvalue' => 'getKeyvalueService',
            'keyvalue.database' => 'getKeyvalue_DatabaseService',
            'keyvalue.expirable' => 'getKeyvalue_ExpirableService',
            'keyvalue.expirable.database' => 'getKeyvalue_Expirable_DatabaseService',
            'language.default' => 'getLanguage_DefaultService',
            'language_manager' => 'getLanguageManagerService',
            'library.discovery' => 'getLibrary_DiscoveryService',
            'library.discovery.collector' => 'getLibrary_Discovery_CollectorService',
            'library.discovery.parser' => 'getLibrary_Discovery_ParserService',
            'link_generator' => 'getLinkGeneratorService',
            'lock' => 'getLockService',
            'logger.channel.default' => 'getLogger_Channel_DefaultService',
            'logger.factory' => 'getLogger_FactoryService',
            'logger.log_message_parser' => 'getLogger_LogMessageParserService',
            'maintenance_mode_subscriber' => 'getMaintenanceModeSubscriberService',
            'module_handler' => 'getModuleHandlerService',
            'paramconverter.configentity_admin' => 'getParamconverter_ConfigentityAdminService',
            'paramconverter.entity' => 'getParamconverter_EntityService',
            'paramconverter_manager' => 'getParamconverterManagerService',
            'paramconverter_subscriber' => 'getParamconverterSubscriberService',
            'password' => 'getPasswordService',
            'path.alias_manager' => 'getPath_AliasManagerService',
            'path.alias_storage' => 'getPath_AliasStorageService',
            'path.alias_whitelist' => 'getPath_AliasWhitelistService',
            'path.matcher' => 'getPath_MatcherService',
            'path_processor_alias' => 'getPathProcessorAliasService',
            'path_processor_decode' => 'getPathProcessorDecodeService',
            'path_processor_front' => 'getPathProcessorFrontService',
            'path_processor_manager' => 'getPathProcessorManagerService',
            'path_subscriber' => 'getPathSubscriberService',
            'plugin.cache_clearer' => 'getPlugin_CacheClearerService',
            'plugin.manager.action' => 'getPlugin_Manager_ActionService',
            'plugin.manager.archiver' => 'getPlugin_Manager_ArchiverService',
            'plugin.manager.condition' => 'getPlugin_Manager_ConditionService',
            'plugin.manager.display_variant' => 'getPlugin_Manager_DisplayVariantService',
            'plugin.manager.field.field_type' => 'getPlugin_Manager_Field_FieldTypeService',
            'plugin.manager.field.formatter' => 'getPlugin_Manager_Field_FormatterService',
            'plugin.manager.field.widget' => 'getPlugin_Manager_Field_WidgetService',
            'plugin.manager.mail' => 'getPlugin_Manager_MailService',
            'plugin.manager.menu.contextual_link' => 'getPlugin_Manager_Menu_ContextualLinkService',
            'plugin.manager.menu.local_action' => 'getPlugin_Manager_Menu_LocalActionService',
            'plugin.manager.menu.local_task' => 'getPlugin_Manager_Menu_LocalTaskService',
            'private_key' => 'getPrivateKeyService',
            'queue' => 'getQueueService',
            'queue.database' => 'getQueue_DatabaseService',
            'redirect_response_subscriber' => 'getRedirectResponseSubscriberService',
            'replica_database_ignore__subscriber' => 'getReplicaDatabaseIgnoreSubscriberService',
            'request' => 'getRequestService',
            'request_close_subscriber' => 'getRequestCloseSubscriberService',
            'request_stack' => 'getRequestStackService',
            'resolver_manager.entity' => 'getResolverManager_EntityService',
            'reverse_proxy_subscriber' => 'getReverseProxySubscriberService',
            'route_content_controller_subscriber' => 'getRouteContentControllerSubscriberService',
            'route_content_form_controller_subscriber' => 'getRouteContentFormControllerSubscriberService',
            'route_enhancer.authentication' => 'getRouteEnhancer_AuthenticationService',
            'route_enhancer.entity' => 'getRouteEnhancer_EntityService',
            'route_enhancer.param_conversion' => 'getRouteEnhancer_ParamConversionService',
            'route_http_method_subscriber' => 'getRouteHttpMethodSubscriberService',
            'route_processor_csrf' => 'getRouteProcessorCsrfService',
            'route_processor_manager' => 'getRouteProcessorManagerService',
            'route_special_attributes_subscriber' => 'getRouteSpecialAttributesSubscriberService',
            'route_subscriber.entity' => 'getRouteSubscriber_EntityService',
            'route_subscriber.module' => 'getRouteSubscriber_ModuleService',
            'router' => 'getRouterService',
            'router.admin_context' => 'getRouter_AdminContextService',
            'router.builder' => 'getRouter_BuilderService',
            'router.dumper' => 'getRouter_DumperService',
            'router.dynamic' => 'getRouter_DynamicService',
            'router.matcher' => 'getRouter_MatcherService',
            'router.matcher.final_matcher' => 'getRouter_Matcher_FinalMatcherService',
            'router.path_roots_subscriber' => 'getRouter_PathRootsSubscriberService',
            'router.rebuild_subscriber' => 'getRouter_RebuildSubscriberService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router.route_preloader' => 'getRouter_RoutePreloaderService',
            'router.route_provider' => 'getRouter_RouteProviderService',
            'router_listener' => 'getRouterListenerService',
            'serialization.json' => 'getSerialization_JsonService',
            'serialization.phpserialize' => 'getSerialization_PhpserializeService',
            'serialization.yaml' => 'getSerialization_YamlService',
            'service_container' => 'getServiceContainerService',
            'session_manager' => 'getSessionManagerService',
            'session_manager.metadata_bag' => 'getSessionManager_MetadataBagService',
            'settings' => 'getSettingsService',
            'state' => 'getStateService',
            'string_translation' => 'getStringTranslationService',
            'string_translator.custom_strings' => 'getStringTranslator_CustomStringsService',
            'theme.negotiator' => 'getTheme_NegotiatorService',
            'theme.negotiator.ajax_base_page' => 'getTheme_Negotiator_AjaxBasePageService',
            'theme.negotiator.default' => 'getTheme_Negotiator_DefaultService',
            'theme.negotiator.request_subscriber' => 'getTheme_Negotiator_RequestSubscriberService',
            'theme.registry' => 'getTheme_RegistryService',
            'theme_handler' => 'getThemeHandlerService',
            'title_resolver' => 'getTitleResolverService',
            'token' => 'getTokenService',
            'transliteration' => 'getTransliterationService',
            'twig' => 'getTwigService',
            'twig.loader.filesystem' => 'getTwig_Loader_FilesystemService',
            'typed_data_manager' => 'getTypedDataManagerService',
            'url_generator' => 'getUrlGeneratorService',
            'uuid' => 'getUuidService',
            'validation.constraint' => 'getValidation_ConstraintService',
            'view_subscriber' => 'getViewSubscriberService',
        );
        $this->aliases = array(
            'twig.loader' => 'twig.loader.filesystem',
        );
    }

    /**
     * Gets the 'accept_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\AcceptHeaderMatcher A Drupal\Core\Routing\AcceptHeaderMatcher instance.
     */
    protected function getAcceptHeaderMatcherService()
    {
        return $this->services['accept_header_matcher'] = new \Drupal\Core\Routing\AcceptHeaderMatcher($this->get('content_negotiation'));
    }

    /**
     * Gets the 'access_arguments_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\AccessArgumentsResolver A Drupal\Core\Access\AccessArgumentsResolver instance.
     */
    protected function getAccessArgumentsResolverService()
    {
        return $this->services['access_arguments_resolver'] = new \Drupal\Core\Access\AccessArgumentsResolver();
    }

    /**
     * Gets the 'access_check.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CsrfAccessCheck A Drupal\Core\Access\CsrfAccessCheck instance.
     */
    protected function getAccessCheck_CsrfService()
    {
        return $this->services['access_check.csrf'] = new \Drupal\Core\Access\CsrfAccessCheck($this->get('csrf_token'));
    }

    /**
     * Gets the 'access_check.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CustomAccessCheck A Drupal\Core\Access\CustomAccessCheck instance.
     */
    protected function getAccessCheck_CustomService()
    {
        return $this->services['access_check.custom'] = new \Drupal\Core\Access\CustomAccessCheck($this->get('controller_resolver'), $this->get('access_arguments_resolver'));
    }

    /**
     * Gets the 'access_check.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\DefaultAccessCheck A Drupal\Core\Access\DefaultAccessCheck instance.
     */
    protected function getAccessCheck_DefaultService()
    {
        return $this->services['access_check.default'] = new \Drupal\Core\Access\DefaultAccessCheck();
    }

    /**
     * Gets the 'access_check.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityAccessCheck A Drupal\Core\Entity\EntityAccessCheck instance.
     */
    protected function getAccessCheck_EntityService()
    {
        return $this->services['access_check.entity'] = new \Drupal\Core\Entity\EntityAccessCheck();
    }

    /**
     * Gets the 'access_check.entity_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityCreateAccessCheck A Drupal\Core\Entity\EntityCreateAccessCheck instance.
     */
    protected function getAccessCheck_EntityCreateService()
    {
        return $this->services['access_check.entity_create'] = new \Drupal\Core\Entity\EntityCreateAccessCheck($this->get('entity.manager'));
    }

    /**
     * Gets the 'access_check.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\ThemeAccessCheck A Drupal\Core\Theme\ThemeAccessCheck instance.
     */
    protected function getAccessCheck_ThemeService()
    {
        return $this->services['access_check.theme'] = new \Drupal\Core\Theme\ThemeAccessCheck();
    }

    /**
     * Gets the 'access_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\AccessManager A Drupal\Core\Access\AccessManager instance.
     */
    protected function getAccessManagerService()
    {
        $this->services['access_manager'] = $instance = new \Drupal\Core\Access\AccessManager($this->get('router.route_provider'), $this->get('url_generator'), $this->get('paramconverter_manager'), $this->get('access_arguments_resolver'));

        $instance->setContainer($this);
        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        $instance->addCheckService('access_check.default', 'access', array(0 => '_access'));
        $instance->addCheckService('access_check.entity', 'access', array(0 => '_entity_access'));
        $instance->addCheckService('access_check.entity_create', 'access', array(0 => '_entity_create_access'));
        $instance->addCheckService('access_check.theme', 'access', array(0 => '_access_theme'));
        $instance->addCheckService('access_check.custom', 'access', array(0 => '_custom_access'));
        $instance->addCheckService('access_check.csrf', 'access', array(0 => '_csrf_token'));

        return $instance;
    }

    /**
     * Gets the 'access_route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AccessRouteSubscriber A Drupal\Core\EventSubscriber\AccessRouteSubscriber instance.
     */
    protected function getAccessRouteSubscriberService()
    {
        return $this->services['access_route_subscriber'] = new \Drupal\Core\EventSubscriber\AccessRouteSubscriber($this->get('access_manager'));
    }

    /**
     * Gets the 'access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AccessSubscriber A Drupal\Core\EventSubscriber\AccessSubscriber instance.
     */
    protected function getAccessSubscriberService()
    {
        $a = $this->get('current_user');

        $this->services['access_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AccessSubscriber($this->get('access_manager'), $a);

        if ($this->has('current_user')) {
            $instance->setCurrentUser($a);
        }

        return $instance;
    }

    /**
     * Gets the 'ajax.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Ajax\AjaxSubscriber A Drupal\Core\Ajax\AjaxSubscriber instance.
     */
    protected function getAjax_SubscriberService()
    {
        return $this->services['ajax.subscriber'] = new \Drupal\Core\Ajax\AjaxSubscriber();
    }

    /**
     * Gets the 'ajax_response_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Ajax\AjaxResponseRenderer A Drupal\Core\Ajax\AjaxResponseRenderer instance.
     */
    protected function getAjaxResponseRendererService()
    {
        return $this->services['ajax_response_renderer'] = new \Drupal\Core\Ajax\AjaxResponseRenderer();
    }

    /**
     * Gets the 'ajax_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AjaxResponseSubscriber A Drupal\Core\EventSubscriber\AjaxResponseSubscriber instance.
     */
    protected function getAjaxResponseSubscriberService()
    {
        return $this->services['ajax_response_subscriber'] = new \Drupal\Core\EventSubscriber\AjaxResponseSubscriber();
    }

    /**
     * Gets the 'asset.css.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionGrouper A Drupal\Core\Asset\CssCollectionGrouper instance.
     */
    protected function getAsset_Css_CollectionGrouperService()
    {
        return $this->services['asset.css.collection_grouper'] = new \Drupal\Core\Asset\CssCollectionGrouper();
    }

    /**
     * Gets the 'asset.css.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionOptimizer A Drupal\Core\Asset\CssCollectionOptimizer instance.
     */
    protected function getAsset_Css_CollectionOptimizerService()
    {
        return $this->services['asset.css.collection_optimizer'] = new \Drupal\Core\Asset\CssCollectionOptimizer($this->get('asset.css.collection_grouper'), $this->get('asset.css.optimizer'), $this->get('asset.css.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.css.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssCollectionRenderer A Drupal\Core\Asset\CssCollectionRenderer instance.
     */
    protected function getAsset_Css_CollectionRendererService()
    {
        return $this->services['asset.css.collection_renderer'] = new \Drupal\Core\Asset\CssCollectionRenderer($this->get('state'));
    }

    /**
     * Gets the 'asset.css.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Css_DumperService()
    {
        return $this->services['asset.css.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.css.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\CssOptimizer A Drupal\Core\Asset\CssOptimizer instance.
     */
    protected function getAsset_Css_OptimizerService()
    {
        return $this->services['asset.css.optimizer'] = new \Drupal\Core\Asset\CssOptimizer();
    }

    /**
     * Gets the 'asset.js.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionGrouper A Drupal\Core\Asset\JsCollectionGrouper instance.
     */
    protected function getAsset_Js_CollectionGrouperService()
    {
        return $this->services['asset.js.collection_grouper'] = new \Drupal\Core\Asset\JsCollectionGrouper();
    }

    /**
     * Gets the 'asset.js.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionOptimizer A Drupal\Core\Asset\JsCollectionOptimizer instance.
     */
    protected function getAsset_Js_CollectionOptimizerService()
    {
        return $this->services['asset.js.collection_optimizer'] = new \Drupal\Core\Asset\JsCollectionOptimizer($this->get('asset.js.collection_grouper'), $this->get('asset.js.optimizer'), $this->get('asset.js.dumper'), $this->get('state'));
    }

    /**
     * Gets the 'asset.js.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsCollectionRenderer A Drupal\Core\Asset\JsCollectionRenderer instance.
     */
    protected function getAsset_Js_CollectionRendererService()
    {
        return $this->services['asset.js.collection_renderer'] = new \Drupal\Core\Asset\JsCollectionRenderer($this->get('state'));
    }

    /**
     * Gets the 'asset.js.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Js_DumperService()
    {
        return $this->services['asset.js.dumper'] = new \Drupal\Core\Asset\AssetDumper();
    }

    /**
     * Gets the 'asset.js.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\JsOptimizer A Drupal\Core\Asset\JsOptimizer instance.
     */
    protected function getAsset_Js_OptimizerService()
    {
        return $this->services['asset.js.optimizer'] = new \Drupal\Core\Asset\JsOptimizer();
    }

    /**
     * Gets the 'authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Authentication\AuthenticationManager A Drupal\Core\Authentication\AuthenticationManager instance.
     */
    protected function getAuthenticationService()
    {
        return $this->services['authentication'] = new \Drupal\Core\Authentication\AuthenticationManager();
    }

    /**
     * Gets the 'authentication_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\AuthenticationSubscriber A Drupal\Core\EventSubscriber\AuthenticationSubscriber instance.
     */
    protected function getAuthenticationSubscriberService()
    {
        return $this->services['authentication_subscriber'] = new \Drupal\Core\EventSubscriber\AuthenticationSubscriber($this->get('authentication'));
    }

    /**
     * Gets the 'batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Batch\BatchStorage A Drupal\Core\Batch\BatchStorage instance.
     */
    protected function getBatch_StorageService()
    {
        return $this->services['batch.storage'] = new \Drupal\Core\Batch\BatchStorage($this->get('database'));
    }

    /**
     * Gets the 'breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Breadcrumb\BreadcrumbManager A Drupal\Core\Breadcrumb\BreadcrumbManager instance.
     */
    protected function getBreadcrumbService()
    {
        return $this->services['breadcrumb'] = new \Drupal\Core\Breadcrumb\BreadcrumbManager($this->get('module_handler'));
    }

    /**
     * Gets the 'cache.backend.apcu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\ApcuBackendFactory A Drupal\Core\Cache\ApcuBackendFactory instance.
     */
    protected function getCache_Backend_ApcuService()
    {
        return $this->services['cache.backend.apcu'] = new \Drupal\Core\Cache\ApcuBackendFactory();
    }

    /**
     * Gets the 'cache.backend.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\DatabaseBackendFactory A Drupal\Core\Cache\DatabaseBackendFactory instance.
     */
    protected function getCache_Backend_DatabaseService()
    {
        return $this->services['cache.backend.database'] = new \Drupal\Core\Cache\DatabaseBackendFactory($this->get('database'));
    }

    /**
     * Gets the 'cache.backend.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\MemoryBackendFactory A Drupal\Core\Cache\MemoryBackendFactory instance.
     */
    protected function getCache_Backend_MemoryService()
    {
        return $this->services['cache.backend.memory'] = new \Drupal\Core\Cache\MemoryBackendFactory();
    }

    /**
     * Gets the 'cache.backend.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\NullBackendFactory A Drupal\Core\Cache\NullBackendFactory instance.
     */
    protected function getCache_Backend_NullService()
    {
        return $this->services['cache.backend.null'] = new \Drupal\Core\Cache\NullBackendFactory();
    }

    /**
     * Gets the 'cache.backend.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\PhpBackendFactory A Drupal\Core\Cache\PhpBackendFactory instance.
     */
    protected function getCache_Backend_PhpService()
    {
        return $this->services['cache.backend.php'] = new \Drupal\Core\Cache\PhpBackendFactory();
    }

    /**
     * Gets the 'cache.bootstrap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BootstrapService()
    {
        return $this->services['cache.bootstrap'] = $this->get('cache_factory')->get('bootstrap');
    }

    /**
     * Gets the 'cache.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DataService()
    {
        return $this->services['cache.data'] = $this->get('cache_factory')->get('data');
    }

    /**
     * Gets the 'cache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = $this->get('cache_factory')->get('default');
    }

    /**
     * Gets the 'cache.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DiscoveryService()
    {
        return $this->services['cache.discovery'] = $this->get('cache_factory')->get('discovery');
    }

    /**
     * Gets the 'cache.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_EntityService()
    {
        return $this->services['cache.entity'] = $this->get('cache_factory')->get('entity');
    }

    /**
     * Gets the 'cache.render' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_RenderService()
    {
        return $this->services['cache.render'] = $this->get('cache_factory')->get('render');
    }

    /**
     * Gets the 'cache_context.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\LanguageCacheContext A Drupal\Core\Cache\LanguageCacheContext instance.
     */
    protected function getCacheContext_LanguageService()
    {
        return $this->services['cache_context.language'] = new \Drupal\Core\Cache\LanguageCacheContext($this->get('language_manager'));
    }

    /**
     * Gets the 'cache_context.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\ThemeCacheContext A Drupal\Core\Cache\ThemeCacheContext instance.
     */
    protected function getCacheContext_ThemeService()
    {
        return $this->services['cache_context.theme'] = new \Drupal\Core\Cache\ThemeCacheContext($this->get('current_route_match'), $this->get('theme.negotiator'));
    }

    /**
     * Gets the 'cache_context.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\TimeZoneCacheContext A Drupal\Core\Cache\TimeZoneCacheContext instance.
     */
    protected function getCacheContext_TimezoneService()
    {
        return $this->services['cache_context.timezone'] = new \Drupal\Core\Cache\TimeZoneCacheContext();
    }

    /**
     * Gets the 'cache_context.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\UrlCacheContext A Drupal\Core\Cache\UrlCacheContext instance.
     */
    protected function getCacheContext_UrlService()
    {
        return $this->services['cache_context.url'] = new \Drupal\Core\Cache\UrlCacheContext($this->get('request_stack'));
    }

    /**
     * Gets the 'cache_contexts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheContexts A Drupal\Core\Cache\CacheContexts instance.
     */
    protected function getCacheContextsService()
    {
        return $this->services['cache_contexts'] = new \Drupal\Core\Cache\CacheContexts($this, array(0 => 'cache_context.url', 1 => 'cache_context.language', 2 => 'cache_context.theme', 3 => 'cache_context.timezone'));
    }

    /**
     * Gets the 'cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cache\CacheFactory A Drupal\Core\Cache\CacheFactory instance.
     */
    protected function getCacheFactoryService()
    {
        $this->services['cache_factory'] = $instance = new \Drupal\Core\Cache\CacheFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassLoaderService()
    {
        throw new RuntimeException('You have requested a synthetic service ("class_loader"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'class_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\DependencyInjection\ClassResolver A Drupal\Core\DependencyInjection\ClassResolver instance.
     */
    protected function getClassResolverService()
    {
        $this->services['class_resolver'] = $instance = new \Drupal\Core\DependencyInjection\ClassResolver();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'config.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigFactory A Drupal\Core\Config\ConfigFactory instance.
     */
    protected function getConfig_FactoryService()
    {
        return $this->services['config.factory'] = new \Drupal\Core\Config\ConfigFactory($this->get('config.storage'), $this->get('event_dispatcher'), $this->get('config.typed'));
    }

    /**
     * Gets the 'config.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigInstaller A Drupal\Core\Config\ConfigInstaller instance.
     */
    protected function getConfig_InstallerService()
    {
        return $this->services['config.installer'] = new \Drupal\Core\Config\ConfigInstaller($this->get('config.factory'), $this->get('config.storage'), $this->get('config.typed'), $this->get('config.manager'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'config.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ConfigManager A Drupal\Core\Config\ConfigManager instance.
     */
    protected function getConfig_ManagerService()
    {
        return $this->services['config.manager'] = new \Drupal\Core\Config\ConfigManager($this->get('entity.manager'), $this->get('config.factory'), $this->get('config.typed'), $this->get('string_translation'), $this->get('config.storage'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'config.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_StorageService()
    {
        return $this->services['config.storage'] = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config');
    }

    /**
     * Gets the 'config.storage.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\InstallStorage A Drupal\Core\Config\InstallStorage instance.
     */
    protected function getConfig_Storage_InstallerService()
    {
        return $this->services['config.storage.installer'] = new \Drupal\Core\Config\InstallStorage();
    }

    /**
     * Gets the 'config.storage.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\ExtensionInstallStorage A Drupal\Core\Config\ExtensionInstallStorage instance.
     */
    protected function getConfig_Storage_SchemaService()
    {
        return $this->services['config.storage.schema'] = new \Drupal\Core\Config\ExtensionInstallStorage($this->get('config.storage'), 'config/schema');
    }

    /**
     * Gets the 'config.storage.snapshot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_SnapshotService()
    {
        return $this->services['config.storage.snapshot'] = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config_snapshot');
    }

    /**
     * Gets the 'config.storage.staging' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_StagingService()
    {
        return $this->services['config.storage.staging'] = call_user_func(array('Drupal\\Core\\Config\\FileStorageFactory', 'getStaging'));
    }

    /**
     * Gets the 'config.typed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\TypedConfigManager A Drupal\Core\Config\TypedConfigManager instance.
     */
    protected function getConfig_TypedService()
    {
        return $this->services['config.typed'] = new \Drupal\Core\Config\TypedConfigManager($this->get('config.storage'), $this->get('config.storage.schema'), $this->get('cache.discovery'));
    }

    /**
     * Gets the 'config_import_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigImportSubscriber A Drupal\Core\EventSubscriber\ConfigImportSubscriber instance.
     */
    protected function getConfigImportSubscriberService()
    {
        return $this->services['config_import_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigImportSubscriber();
    }

    /**
     * Gets the 'config_snapshot_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber A Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber instance.
     */
    protected function getConfigSnapshotSubscriberService()
    {
        return $this->services['config_snapshot_subscriber'] = new \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber($this->get('config.manager'), $this->get('config.storage'), $this->get('config.storage.snapshot'));
    }

    /**
     * Gets the 'container.namespaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return ArrayObject A ArrayObject instance.
     */
    protected function getContainer_NamespacesService()
    {
        return $this->services['container.namespaces'] = new \ArrayObject(array('Drupal\\Core\\Entity' => '/var/www/docroot8/core/lib/Drupal/Core/Entity', 'Drupal\\Core\\Field' => '/var/www/docroot8/core/lib/Drupal/Core/Field', 'Drupal\\Core\\Mail' => '/var/www/docroot8/core/lib/Drupal/Core/Mail', 'Drupal\\Core\\TypedData' => '/var/www/docroot8/core/lib/Drupal/Core/TypedData', 'Drupal\\Core\\Validation' => '/var/www/docroot8/core/lib/Drupal/Core/Validation', 'Drupal\\Component\\Annotation' => '/var/www/docroot8/core/lib/Drupal/Component/Annotation'));
    }

    /**
     * Gets the 'content_negotiation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ContentNegotiation A Drupal\Core\ContentNegotiation instance.
     */
    protected function getContentNegotiationService()
    {
        return $this->services['content_negotiation'] = new \Drupal\Core\ContentNegotiation();
    }

    /**
     * Gets the 'content_type_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\ContentTypeHeaderMatcher A Drupal\Core\Routing\ContentTypeHeaderMatcher instance.
     */
    protected function getContentTypeHeaderMatcherService()
    {
        return $this->services['content_type_header_matcher'] = new \Drupal\Core\Routing\ContentTypeHeaderMatcher();
    }

    /**
     * Gets the 'context.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Plugin\Context\ContextHandler A Drupal\Core\Plugin\Context\ContextHandler instance.
     */
    protected function getContext_HandlerService()
    {
        return $this->services['context.handler'] = new \Drupal\Core\Plugin\Context\ContextHandler($this->get('typed_data_manager'));
    }

    /**
     * Gets the 'controller.ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\AjaxController A Drupal\Core\Controller\AjaxController instance.
     */
    protected function getController_AjaxService()
    {
        return $this->services['controller.ajax'] = new \Drupal\Core\Controller\AjaxController($this->get('controller_resolver'), $this->get('ajax_response_renderer'));
    }

    /**
     * Gets the 'controller.dialog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\DialogController A Drupal\Core\Controller\DialogController instance.
     */
    protected function getController_DialogService()
    {
        return $this->services['controller.dialog'] = new \Drupal\Core\Controller\DialogController($this->get('controller_resolver'), $this->get('title_resolver'));
    }

    /**
     * Gets the 'controller.entityform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\HtmlEntityFormController A Drupal\Core\Entity\HtmlEntityFormController instance.
     */
    protected function getController_EntityformService()
    {
        return $this->services['controller.entityform'] = new \Drupal\Core\Entity\HtmlEntityFormController($this->get('class_resolver'), $this->get('controller_resolver'), $this, $this->get('entity.manager'));
    }

    /**
     * Gets the 'controller.page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\HtmlPageController A Drupal\Core\Controller\HtmlPageController instance.
     */
    protected function getController_PageService()
    {
        return $this->services['controller.page'] = new \Drupal\Core\Controller\HtmlPageController($this->get('controller_resolver'), $this->get('title_resolver'), $this->get('url_generator'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ControllerResolver A Drupal\Core\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Drupal\Core\Controller\ControllerResolver($this->get('class_resolver'), $this->get('logger.channel.default'));
    }

    /**
     * Gets the 'country_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Locale\CountryManager A Drupal\Core\Locale\CountryManager instance.
     */
    protected function getCountryManagerService()
    {
        return $this->services['country_manager'] = new \Drupal\Core\Locale\CountryManager($this->get('module_handler'));
    }

    /**
     * Gets the 'cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Cron A Drupal\Core\Cron instance.
     */
    protected function getCronService()
    {
        return $this->services['cron'] = new \Drupal\Core\Cron($this->get('module_handler'), $this->get('lock'), $this->get('queue'), $this->get('state'), $this->get('current_user'), $this->get('session_manager'));
    }

    /**
     * Gets the 'csrf_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\CsrfTokenGenerator A Drupal\Core\Access\CsrfTokenGenerator instance.
     */
    protected function getCsrfTokenService()
    {
        return $this->services['csrf_token'] = new \Drupal\Core\Access\CsrfTokenGenerator($this->get('private_key'));
    }

    /**
     * Gets the 'current_route_match' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\CurrentRouteMatch A Drupal\Core\Routing\CurrentRouteMatch instance.
     */
    protected function getCurrentRouteMatchService()
    {
        return $this->services['current_route_match'] = new \Drupal\Core\Routing\CurrentRouteMatch($this->get('request_stack'));
    }

    /**
     * Gets the 'current_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\AccountProxy A Drupal\Core\Session\AccountProxy instance.
     */
    protected function getCurrentUserService()
    {
        return $this->services['current_user'] = new \Drupal\Core\Session\AccountProxy($this->get('authentication'), $this->get('request'));
    }

    /**
     * Gets the 'database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabaseService()
    {
        return $this->services['database'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'default');
    }

    /**
     * Gets the 'database.replica' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabase_ReplicaService()
    {
        return $this->services['database.replica'] = call_user_func(array('Drupal\\Core\\Database\\Database', 'getConnection'), 'replica');
    }

    /**
     * Gets the 'date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Datetime\Date A Drupal\Core\Datetime\Date instance.
     */
    protected function getDateService()
    {
        return $this->services['date'] = new \Drupal\Core\Datetime\Date($this->get('entity.manager'), $this->get('language_manager'), $this->get('string_translation'), $this->get('config.factory'));
    }

    /**
     * Gets the 'diff.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Diff\DiffFormatter A Drupal\Core\Diff\DiffFormatter instance.
     */
    protected function getDiff_FormatterService()
    {
        return $this->services['diff.formatter'] = new \Drupal\Core\Diff\DiffFormatter($this->get('config.factory'));
    }

    /**
     * Gets the 'element_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Render\ElementInfo A Drupal\Core\Render\ElementInfo instance.
     */
    protected function getElementInfoService()
    {
        return $this->services['element_info'] = new \Drupal\Core\Render\ElementInfo($this->get('module_handler'));
    }

    /**
     * Gets the 'entity.form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityFormBuilder A Drupal\Core\Entity\EntityFormBuilder instance.
     */
    protected function getEntity_FormBuilderService()
    {
        return $this->services['entity.form_builder'] = new \Drupal\Core\Entity\EntityFormBuilder($this->get('entity.manager'), $this->get('form_builder'));
    }

    /**
     * Gets the 'entity.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityManager A Drupal\Core\Entity\EntityManager instance.
     */
    protected function getEntity_ManagerService()
    {
        $this->services['entity.manager'] = $instance = new \Drupal\Core\Entity\EntityManager($this->get('container.namespaces'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('string_translation'), $this->get('class_resolver'), $this->get('typed_data_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'entity.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\QueryFactory A Drupal\Core\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_QueryService()
    {
        $this->services['entity.query'] = $instance = new \Drupal\Core\Entity\Query\QueryFactory($this->get('entity.manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'entity.query.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Config\Entity\Query\QueryFactory A Drupal\Core\Config\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_Query_ConfigService()
    {
        return $this->services['entity.query.config'] = new \Drupal\Core\Config\Entity\Query\QueryFactory($this->get('config.storage'), $this->get('config.factory'));
    }

    /**
     * Gets the 'entity.query.keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\KeyValueStore\Query\QueryFactory A Drupal\Core\Entity\KeyValueStore\Query\QueryFactory instance.
     */
    protected function getEntity_Query_KeyvalueService()
    {
        return $this->services['entity.query.keyvalue'] = new \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory($this->get('keyvalue'));
    }

    /**
     * Gets the 'entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Query\Sql\QueryFactory A Drupal\Core\Entity\Query\Sql\QueryFactory instance.
     */
    protected function getEntity_Query_SqlService()
    {
        return $this->services['entity.query.sql'] = new \Drupal\Core\Entity\Query\Sql\QueryFactory($this->get('database'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('config.factory', 'Drupal\\Core\\Config\\ConfigFactory');
        $instance->addSubscriberService('theme.negotiator.request_subscriber', 'Drupal\\Core\\EventSubscriber\\ThemeNegotiatorRequestSubscriber');
        $instance->addSubscriberService('router.route_provider', 'Drupal\\Core\\Routing\\RouteProvider');
        $instance->addSubscriberService('router.route_preloader', 'Drupal\\Core\\Routing\\RoutePreloader');
        $instance->addSubscriberService('router.path_roots_subscriber', 'Drupal\\Core\\EventSubscriber\\PathRootsSubscriber');
        $instance->addSubscriberService('router.rebuild_subscriber', 'Drupal\\Core\\EventSubscriber\\RouterRebuildSubscriber');
        $instance->addSubscriberService('paramconverter_subscriber', 'Drupal\\Core\\EventSubscriber\\ParamConverterSubscriber');
        $instance->addSubscriberService('route_subscriber.module', 'Drupal\\Core\\EventSubscriber\\ModuleRouteSubscriber');
        $instance->addSubscriberService('route_subscriber.entity', 'Drupal\\Core\\EventSubscriber\\EntityRouteAlterSubscriber');
        $instance->addSubscriberService('reverse_proxy_subscriber', 'Drupal\\Core\\EventSubscriber\\ReverseProxySubscriber');
        $instance->addSubscriberService('ajax_response_subscriber', 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber');
        $instance->addSubscriberService('route_enhancer.param_conversion', 'Drupal\\Core\\Routing\\Enhancer\\ParamConversionEnhancer');
        $instance->addSubscriberService('route_content_controller_subscriber', 'Drupal\\Core\\EventSubscriber\\ContentControllerSubscriber');
        $instance->addSubscriberService('route_content_form_controller_subscriber', 'Drupal\\Core\\EventSubscriber\\ContentFormControllerSubscriber');
        $instance->addSubscriberService('route_special_attributes_subscriber', 'Drupal\\Core\\EventSubscriber\\SpecialAttributesRouteSubscriber');
        $instance->addSubscriberService('route_http_method_subscriber', 'Drupal\\Core\\EventSubscriber\\RouteMethodSubscriber');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('view_subscriber', 'Drupal\\Core\\EventSubscriber\\ViewSubscriber');
        $instance->addSubscriberService('html_view_subscriber', 'Drupal\\Core\\EventSubscriber\\HtmlViewSubscriber');
        $instance->addSubscriberService('access_subscriber', 'Drupal\\Core\\EventSubscriber\\AccessSubscriber');
        $instance->addSubscriberService('access_route_subscriber', 'Drupal\\Core\\EventSubscriber\\AccessRouteSubscriber');
        $instance->addSubscriberService('maintenance_mode_subscriber', 'Drupal\\Core\\EventSubscriber\\MaintenanceModeSubscriber');
        $instance->addSubscriberService('path_subscriber', 'Drupal\\Core\\EventSubscriber\\PathSubscriber');
        $instance->addSubscriberService('finish_response_subscriber', 'Drupal\\Core\\EventSubscriber\\FinishResponseSubscriber');
        $instance->addSubscriberService('redirect_response_subscriber', 'Drupal\\Core\\EventSubscriber\\RedirectResponseSubscriber');
        $instance->addSubscriberService('request_close_subscriber', 'Drupal\\Core\\EventSubscriber\\RequestCloseSubscriber');
        $instance->addSubscriberService('config_import_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigImportSubscriber');
        $instance->addSubscriberService('config_snapshot_subscriber', 'Drupal\\Core\\EventSubscriber\\ConfigSnapshotSubscriber');
        $instance->addSubscriberService('exception_listener', 'Drupal\\Core\\EventSubscriber\\ExceptionListener');
        $instance->addSubscriberService('kernel_destruct_subscriber', 'Drupal\\Core\\EventSubscriber\\KernelDestructionSubscriber');
        $instance->addSubscriberService('ajax.subscriber', 'Drupal\\Core\\Ajax\\AjaxSubscriber');
        $instance->addSubscriberService('replica_database_ignore__subscriber', 'Drupal\\Core\\EventSubscriber\\ReplicaDatabaseIgnoreSubscriber');
        $instance->addSubscriberService('authentication_subscriber', 'Drupal\\Core\\EventSubscriber\\AuthenticationSubscriber');

        return $instance;
    }

    /**
     * Gets the 'exception_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\ExceptionController A Drupal\Core\Controller\ExceptionController instance.
     */
    protected function getExceptionControllerService()
    {
        $this->services['exception_controller'] = $instance = new \Drupal\Core\Controller\ExceptionController($this->get('content_negotiation'), $this->get('title_resolver'), $this->get('html_page_renderer'), $this->get('html_fragment_renderer'), $this->get('string_translation'), $this->get('url_generator'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ExceptionListener A Drupal\Core\EventSubscriber\ExceptionListener instance.
     */
    protected function getExceptionListenerService()
    {
        return $this->services['exception_listener'] = new \Drupal\Core\EventSubscriber\ExceptionListener(array(0 => $this->get('exception_controller'), 1 => 'execute'));
    }

    /**
     * Gets the 'feed.bridge.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_ReaderService()
    {
        $this->services['feed.bridge.reader'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.reader.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_WriterService()
    {
        $this->services['feed.bridge.writer'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.writer.');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Entry A Zend\Feed\Reader\Extension\Atom\Entry instance.
     */
    protected function getFeed_Reader_AtomentryService()
    {
        return $this->services['feed.reader.atomentry'] = new \Zend\Feed\Reader\Extension\Atom\Entry();
    }

    /**
     * Gets the 'feed.reader.atomfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Atom\Feed A Zend\Feed\Reader\Extension\Atom\Feed instance.
     */
    protected function getFeed_Reader_AtomfeedService()
    {
        return $this->services['feed.reader.atomfeed'] = new \Zend\Feed\Reader\Extension\Atom\Feed();
    }

    /**
     * Gets the 'feed.reader.contententry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Content\Entry A Zend\Feed\Reader\Extension\Content\Entry instance.
     */
    protected function getFeed_Reader_ContententryService()
    {
        return $this->services['feed.reader.contententry'] = new \Zend\Feed\Reader\Extension\Content\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincoreentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Entry A Zend\Feed\Reader\Extension\DublinCore\Entry instance.
     */
    protected function getFeed_Reader_DublincoreentryService()
    {
        return $this->services['feed.reader.dublincoreentry'] = new \Zend\Feed\Reader\Extension\DublinCore\Entry();
    }

    /**
     * Gets the 'feed.reader.dublincorefeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\DublinCore\Feed A Zend\Feed\Reader\Extension\DublinCore\Feed instance.
     */
    protected function getFeed_Reader_DublincorefeedService()
    {
        return $this->services['feed.reader.dublincorefeed'] = new \Zend\Feed\Reader\Extension\DublinCore\Feed();
    }

    /**
     * Gets the 'feed.reader.podcastentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Entry A Zend\Feed\Reader\Extension\Podcast\Entry instance.
     */
    protected function getFeed_Reader_PodcastentryService()
    {
        return $this->services['feed.reader.podcastentry'] = new \Zend\Feed\Reader\Extension\Podcast\Entry();
    }

    /**
     * Gets the 'feed.reader.podcastfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Podcast\Feed A Zend\Feed\Reader\Extension\Podcast\Feed instance.
     */
    protected function getFeed_Reader_PodcastfeedService()
    {
        return $this->services['feed.reader.podcastfeed'] = new \Zend\Feed\Reader\Extension\Podcast\Feed();
    }

    /**
     * Gets the 'feed.reader.slashentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Slash\Entry A Zend\Feed\Reader\Extension\Slash\Entry instance.
     */
    protected function getFeed_Reader_SlashentryService()
    {
        return $this->services['feed.reader.slashentry'] = new \Zend\Feed\Reader\Extension\Slash\Entry();
    }

    /**
     * Gets the 'feed.reader.threadentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\Thread\Entry A Zend\Feed\Reader\Extension\Thread\Entry instance.
     */
    protected function getFeed_Reader_ThreadentryService()
    {
        return $this->services['feed.reader.threadentry'] = new \Zend\Feed\Reader\Extension\Thread\Entry();
    }

    /**
     * Gets the 'feed.reader.wellformedwebentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Reader\Extension\WellFormedWeb\Entry A Zend\Feed\Reader\Extension\WellFormedWeb\Entry instance.
     */
    protected function getFeed_Reader_WellformedwebentryService()
    {
        return $this->services['feed.reader.wellformedwebentry'] = new \Zend\Feed\Reader\Extension\WellFormedWeb\Entry();
    }

    /**
     * Gets the 'feed.writer.atomrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Atom\Renderer\Feed A Zend\Feed\Writer\Extension\Atom\Renderer\Feed instance.
     */
    protected function getFeed_Writer_AtomrendererfeedService()
    {
        return $this->services['feed.writer.atomrendererfeed'] = new \Zend\Feed\Writer\Extension\Atom\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.contentrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Content\Renderer\Entry A Zend\Feed\Writer\Extension\Content\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ContentrendererentryService()
    {
        return $this->services['feed.writer.contentrendererentry'] = new \Zend\Feed\Writer\Extension\Content\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry A Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry instance.
     */
    protected function getFeed_Writer_DublincorerendererentryService()
    {
        return $this->services['feed.writer.dublincorerendererentry'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.dublincorerendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed A Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed instance.
     */
    protected function getFeed_Writer_DublincorerendererfeedService()
    {
        return $this->services['feed.writer.dublincorerendererfeed'] = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Entry A Zend\Feed\Writer\Extension\ITunes\Entry instance.
     */
    protected function getFeed_Writer_ItunesentryService()
    {
        return $this->services['feed.writer.itunesentry'] = new \Zend\Feed\Writer\Extension\ITunes\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Feed A Zend\Feed\Writer\Extension\ITunes\Feed instance.
     */
    protected function getFeed_Writer_ItunesfeedService()
    {
        return $this->services['feed.writer.itunesfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Feed();
    }

    /**
     * Gets the 'feed.writer.itunesrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Entry A Zend\Feed\Writer\Extension\ITunes\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ItunesrendererentryService()
    {
        return $this->services['feed.writer.itunesrendererentry'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.itunesrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\ITunes\Renderer\Feed A Zend\Feed\Writer\Extension\ITunes\Renderer\Feed instance.
     */
    protected function getFeed_Writer_ItunesrendererfeedService()
    {
        return $this->services['feed.writer.itunesrendererfeed'] = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed();
    }

    /**
     * Gets the 'feed.writer.slashrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Slash\Renderer\Entry A Zend\Feed\Writer\Extension\Slash\Renderer\Entry instance.
     */
    protected function getFeed_Writer_SlashrendererentryService()
    {
        return $this->services['feed.writer.slashrendererentry'] = new \Zend\Feed\Writer\Extension\Slash\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.threadingrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\Threading\Renderer\Entry A Zend\Feed\Writer\Extension\Threading\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ThreadingrendererentryService()
    {
        return $this->services['feed.writer.threadingrendererentry'] = new \Zend\Feed\Writer\Extension\Threading\Renderer\Entry();
    }

    /**
     * Gets the 'feed.writer.wellformedwebrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry A Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry instance.
     */
    protected function getFeed_Writer_WellformedwebrendererentryService()
    {
        return $this->services['feed.writer.wellformedwebrendererentry'] = new \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry();
    }

    /**
     * Gets the 'file.mime_type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\File\MimeType\MimeTypeGuesser A Drupal\Core\File\MimeType\MimeTypeGuesser instance.
     */
    protected function getFile_MimeType_GuesserService()
    {
        $this->services['file.mime_type.guesser'] = $instance = new \Drupal\Core\File\MimeType\MimeTypeGuesser();

        $instance->addGuesser($this->get('file.mime_type.guesser.extension'), 0);

        return $instance;
    }

    /**
     * Gets the 'file.mime_type.guesser.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser A Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser instance.
     */
    protected function getFile_MimeType_Guesser_ExtensionService()
    {
        return $this->services['file.mime_type.guesser.extension'] = new \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser($this->get('module_handler'));
    }

    /**
     * Gets the 'finish_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\FinishResponseSubscriber A Drupal\Core\EventSubscriber\FinishResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'finish_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getFinishResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('finish_response_subscriber', 'request');
        }

        return $this->services['finish_response_subscriber'] = $this->scopedServices['request']['finish_response_subscriber'] = new \Drupal\Core\EventSubscriber\FinishResponseSubscriber($this->get('language_manager'), $this->get('config.factory'));
    }

    /**
     * Gets the 'flood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Flood\DatabaseBackend A Drupal\Core\Flood\DatabaseBackend instance.
     */
    protected function getFloodService()
    {
        return $this->services['flood'] = new \Drupal\Core\Flood\DatabaseBackend($this->get('database'), $this->get('request_stack'));
    }

    /**
     * Gets the 'form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormBuilder A Drupal\Core\Form\FormBuilder instance.
     */
    protected function getFormBuilderService()
    {
        return $this->services['form_builder'] = new \Drupal\Core\Form\FormBuilder($this->get('form_validator'), $this->get('form_submitter'), $this->get('module_handler'), $this->get('keyvalue.expirable'), $this->get('event_dispatcher'), $this->get('request_stack'), $this->get('class_resolver'), $this->get('csrf_token', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('http_kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'form_submitter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormSubmitter A Drupal\Core\Form\FormSubmitter instance.
     */
    protected function getFormSubmitterService()
    {
        return $this->services['form_submitter'] = new \Drupal\Core\Form\FormSubmitter($this->get('request_stack'), $this->get('url_generator'));
    }

    /**
     * Gets the 'form_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Form\FormValidator A Drupal\Core\Form\FormValidator instance.
     */
    protected function getFormValidatorService()
    {
        return $this->services['form_validator'] = new \Drupal\Core\Form\FormValidator($this->get('request_stack'), $this->get('string_translation'), $this->get('csrf_token'));
    }

    /**
     * Gets the 'html_fragment_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Page\DefaultHtmlFragmentRenderer A Drupal\Core\Page\DefaultHtmlFragmentRenderer instance.
     */
    protected function getHtmlFragmentRendererService()
    {
        return $this->services['html_fragment_renderer'] = new \Drupal\Core\Page\DefaultHtmlFragmentRenderer($this->get('language_manager'));
    }

    /**
     * Gets the 'html_page_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Page\DefaultHtmlPageRenderer A Drupal\Core\Page\DefaultHtmlPageRenderer instance.
     */
    protected function getHtmlPageRendererService()
    {
        return $this->services['html_page_renderer'] = new \Drupal\Core\Page\DefaultHtmlPageRenderer();
    }

    /**
     * Gets the 'html_view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\HtmlViewSubscriber A Drupal\Core\EventSubscriber\HtmlViewSubscriber instance.
     */
    protected function getHtmlViewSubscriberService()
    {
        return $this->services['html_view_subscriber'] = new \Drupal\Core\EventSubscriber\HtmlViewSubscriber($this->get('html_fragment_renderer'), $this->get('html_page_renderer'));
    }

    /**
     * Gets the 'http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Http\Client A Drupal\Core\Http\Client instance.
     */
    protected function getHttpClientService()
    {
        return $this->services['http_client'] = new \Drupal\Core\Http\Client();
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\HttpKernel A Drupal\Core\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        $this->services['http_kernel'] = $instance = new \Drupal\Core\HttpKernel($this->get('event_dispatcher'), $this->get('controller_resolver'), $this->get('request_stack'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'image.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Image\ImageFactory A Drupal\Core\Image\ImageFactory instance.
     */
    protected function getImage_FactoryService()
    {
        return $this->services['image.factory'] = new \Drupal\Core\Image\ImageFactory($this->get('image.toolkit.manager'));
    }

    /**
     * Gets the 'image.toolkit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ImageToolkit\ImageToolkitManager A Drupal\Core\ImageToolkit\ImageToolkitManager instance.
     */
    protected function getImage_Toolkit_ManagerService()
    {
        return $this->services['image.toolkit.manager'] = new \Drupal\Core\ImageToolkit\ImageToolkitManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('config.factory'), $this->get('module_handler'));
    }

    /**
     * Gets the 'info_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\InfoParser A Drupal\Core\Extension\InfoParser instance.
     */
    protected function getInfoParserService()
    {
        return $this->services['info_parser'] = new \Drupal\Core\Extension\InfoParser();
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel_destruct_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\KernelDestructionSubscriber A Drupal\Core\EventSubscriber\KernelDestructionSubscriber instance.
     */
    protected function getKernelDestructSubscriberService()
    {
        $this->services['kernel_destruct_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\KernelDestructionSubscriber();

        $instance->setContainer($this);
        $instance->registerService('keyvalue.expirable.database');
        $instance->registerService('path.alias_whitelist');
        $instance->registerService('theme.registry');
        $instance->registerService('library.discovery.collector');

        return $instance;
    }

    /**
     * Gets the 'keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueFactory A Drupal\Core\KeyValueStore\KeyValueFactory instance.
     */
    protected function getKeyvalueService()
    {
        return $this->services['keyvalue'] = new \Drupal\Core\KeyValueStore\KeyValueFactory($this, $this->get('settings'));
    }

    /**
     * Gets the 'keyvalue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseFactory instance.
     */
    protected function getKeyvalue_DatabaseService()
    {
        return $this->services['keyvalue.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory($this->get('serialization.phpserialize'), $this->get('database'));
    }

    /**
     * Gets the 'keyvalue.expirable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueExpirableFactory A Drupal\Core\KeyValueStore\KeyValueExpirableFactory instance.
     */
    protected function getKeyvalue_ExpirableService()
    {
        return $this->services['keyvalue.expirable'] = new \Drupal\Core\KeyValueStore\KeyValueExpirableFactory($this, $this->get('settings'));
    }

    /**
     * Gets the 'keyvalue.expirable.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory instance.
     */
    protected function getKeyvalue_Expirable_DatabaseService()
    {
        return $this->services['keyvalue.expirable.database'] = new \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory($this->get('serialization.phpserialize'), $this->get('database'));
    }

    /**
     * Gets the 'language.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Language\LanguageDefault A Drupal\Core\Language\LanguageDefault instance.
     */
    protected function getLanguage_DefaultService()
    {
        return $this->services['language.default'] = new \Drupal\Core\Language\LanguageDefault(array('id' => 'en', 'name' => 'English', 'direction' => 0, 'weight' => 0, 'locked' => 0, 'default' => true));
    }

    /**
     * Gets the 'language_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Language\LanguageManager A Drupal\Core\Language\LanguageManager instance.
     */
    protected function getLanguageManagerService()
    {
        return $this->services['language_manager'] = new \Drupal\Core\Language\LanguageManager($this->get('language.default'));
    }

    /**
     * Gets the 'library.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\LibraryDiscovery A Drupal\Core\Asset\LibraryDiscovery instance.
     */
    protected function getLibrary_DiscoveryService()
    {
        return $this->services['library.discovery'] = new \Drupal\Core\Asset\LibraryDiscovery($this->get('library.discovery.collector'));
    }

    /**
     * Gets the 'library.discovery.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\LibraryDiscoveryCollector A Drupal\Core\Asset\LibraryDiscoveryCollector instance.
     */
    protected function getLibrary_Discovery_CollectorService()
    {
        return $this->services['library.discovery.collector'] = new \Drupal\Core\Asset\LibraryDiscoveryCollector($this->get('cache.discovery'), $this->get('lock'), $this->get('library.discovery.parser'));
    }

    /**
     * Gets the 'library.discovery.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Asset\LibraryDiscoveryParser A Drupal\Core\Asset\LibraryDiscoveryParser instance.
     */
    protected function getLibrary_Discovery_ParserService()
    {
        return $this->services['library.discovery.parser'] = new \Drupal\Core\Asset\LibraryDiscoveryParser($this->get('module_handler'));
    }

    /**
     * Gets the 'link_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\LinkGenerator A Drupal\Core\Utility\LinkGenerator instance.
     */
    protected function getLinkGeneratorService()
    {
        return $this->services['link_generator'] = new \Drupal\Core\Utility\LinkGenerator($this->get('url_generator'), $this->get('module_handler'));
    }

    /**
     * Gets the 'lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Lock\DatabaseLockBackend A Drupal\Core\Lock\DatabaseLockBackend instance.
     */
    protected function getLockService()
    {
        return $this->services['lock'] = new \Drupal\Core\Lock\DatabaseLockBackend($this->get('database'));
    }

    /**
     * Gets the 'logger.channel.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_DefaultService()
    {
        return $this->services['logger.channel.default'] = $this->get('logger.factory')->get('system');
    }

    /**
     * Gets the 'logger.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LoggerChannelFactory A Drupal\Core\Logger\LoggerChannelFactory instance.
     */
    protected function getLogger_FactoryService()
    {
        $this->services['logger.factory'] = $instance = new \Drupal\Core\Logger\LoggerChannelFactory();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'logger.log_message_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Logger\LogMessageParser A Drupal\Core\Logger\LogMessageParser instance.
     */
    protected function getLogger_LogMessageParserService()
    {
        return $this->services['logger.log_message_parser'] = new \Drupal\Core\Logger\LogMessageParser();
    }

    /**
     * Gets the 'maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\MaintenanceModeSubscriber A Drupal\Core\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getMaintenanceModeSubscriberService()
    {
        return $this->services['maintenance_mode_subscriber'] = new \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber($this->get('state'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'), $this->get('current_user'));
    }

    /**
     * Gets the 'module_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\ModuleHandler A Drupal\Core\Extension\ModuleHandler instance.
     */
    protected function getModuleHandlerService()
    {
        return $this->services['module_handler'] = new \Drupal\Core\Extension\ModuleHandler(array(), $this->get('cache.bootstrap'));
    }

    /**
     * Gets the 'paramconverter.configentity_admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\AdminPathConfigEntityConverter A Drupal\Core\ParamConverter\AdminPathConfigEntityConverter instance.
     */
    protected function getParamconverter_ConfigentityAdminService()
    {
        return $this->services['paramconverter.configentity_admin'] = new \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter($this->get('entity.manager'), $this->get('config.factory'), $this->get('router.admin_context'));
    }

    /**
     * Gets the 'paramconverter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\EntityConverter A Drupal\Core\ParamConverter\EntityConverter instance.
     */
    protected function getParamconverter_EntityService()
    {
        return $this->services['paramconverter.entity'] = new \Drupal\Core\ParamConverter\EntityConverter($this->get('entity.manager'));
    }

    /**
     * Gets the 'paramconverter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\ParamConverter\ParamConverterManager A Drupal\Core\ParamConverter\ParamConverterManager instance.
     */
    protected function getParamconverterManagerService()
    {
        $this->services['paramconverter_manager'] = $instance = new \Drupal\Core\ParamConverter\ParamConverterManager();

        $instance->addConverter($this->get('paramconverter.configentity_admin'), 'paramconverter.configentity_admin');
        $instance->addConverter($this->get('paramconverter.entity'), 'paramconverter.entity');

        return $instance;
    }

    /**
     * Gets the 'paramconverter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ParamConverterSubscriber A Drupal\Core\EventSubscriber\ParamConverterSubscriber instance.
     */
    protected function getParamconverterSubscriberService()
    {
        return $this->services['paramconverter_subscriber'] = new \Drupal\Core\EventSubscriber\ParamConverterSubscriber($this->get('paramconverter_manager'));
    }

    /**
     * Gets the 'password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Password\PhpassHashedPassword A Drupal\Core\Password\PhpassHashedPassword instance.
     */
    protected function getPasswordService()
    {
        return $this->services['password'] = new \Drupal\Core\Password\PhpassHashedPassword(16);
    }

    /**
     * Gets the 'path.alias_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasManager A Drupal\Core\Path\AliasManager instance.
     */
    protected function getPath_AliasManagerService()
    {
        return $this->services['path.alias_manager'] = new \Drupal\Core\Path\AliasManager($this->get('path.alias_storage'), $this->get('path.alias_whitelist'), $this->get('language_manager'), $this->get('cache.data'));
    }

    /**
     * Gets the 'path.alias_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasStorage A Drupal\Core\Path\AliasStorage instance.
     */
    protected function getPath_AliasStorageService()
    {
        return $this->services['path.alias_storage'] = new \Drupal\Core\Path\AliasStorage($this->get('database'), $this->get('module_handler'));
    }

    /**
     * Gets the 'path.alias_whitelist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\AliasWhitelist A Drupal\Core\Path\AliasWhitelist instance.
     */
    protected function getPath_AliasWhitelistService()
    {
        return $this->services['path.alias_whitelist'] = new \Drupal\Core\Path\AliasWhitelist('path_alias_whitelist', $this->get('cache.default'), $this->get('lock'), $this->get('state'), $this->get('path.alias_storage'));
    }

    /**
     * Gets the 'path.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Path\PathMatcher A Drupal\Core\Path\PathMatcher instance.
     */
    protected function getPath_MatcherService()
    {
        return $this->services['path.matcher'] = new \Drupal\Core\Path\PathMatcher($this->get('config.factory'));
    }

    /**
     * Gets the 'path_processor_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorAlias A Drupal\Core\PathProcessor\PathProcessorAlias instance.
     */
    protected function getPathProcessorAliasService()
    {
        return $this->services['path_processor_alias'] = new \Drupal\Core\PathProcessor\PathProcessorAlias($this->get('path.alias_manager'));
    }

    /**
     * Gets the 'path_processor_decode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorDecode A Drupal\Core\PathProcessor\PathProcessorDecode instance.
     */
    protected function getPathProcessorDecodeService()
    {
        return $this->services['path_processor_decode'] = new \Drupal\Core\PathProcessor\PathProcessorDecode();
    }

    /**
     * Gets the 'path_processor_front' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorFront A Drupal\Core\PathProcessor\PathProcessorFront instance.
     */
    protected function getPathProcessorFrontService()
    {
        return $this->services['path_processor_front'] = new \Drupal\Core\PathProcessor\PathProcessorFront($this->get('config.factory'));
    }

    /**
     * Gets the 'path_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PathProcessor\PathProcessorManager A Drupal\Core\PathProcessor\PathProcessorManager instance.
     */
    protected function getPathProcessorManagerService()
    {
        $a = $this->get('path_processor_front');
        $b = $this->get('path_processor_alias');

        $this->services['path_processor_manager'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorManager();

        $instance->addInbound($this->get('path_processor_decode'), 1000);
        $instance->addInbound($a, 200);
        $instance->addInbound($b, 100);
        $instance->addOutbound($b, 300);
        $instance->addOutbound($a, 200);

        return $instance;
    }

    /**
     * Gets the 'path_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\PathSubscriber A Drupal\Core\EventSubscriber\PathSubscriber instance.
     */
    protected function getPathSubscriberService()
    {
        return $this->services['path_subscriber'] = new \Drupal\Core\EventSubscriber\PathSubscriber($this->get('path.alias_manager'), $this->get('path_processor_manager'));
    }

    /**
     * Gets the 'plugin.cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Plugin\CachedDiscoveryClearer A Drupal\Core\Plugin\CachedDiscoveryClearer instance.
     */
    protected function getPlugin_CacheClearerService()
    {
        $this->services['plugin.cache_clearer'] = $instance = new \Drupal\Core\Plugin\CachedDiscoveryClearer();

        $instance->addCachedDiscovery($this->get('entity.manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.field_type'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.widget'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.formatter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.archiver'));
        $instance->addCachedDiscovery($this->get('plugin.manager.action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_task'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.contextual_link'));
        $instance->addCachedDiscovery($this->get('plugin.manager.display_variant'));
        $instance->addCachedDiscovery($this->get('typed_data_manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.mail'));
        $instance->addCachedDiscovery($this->get('plugin.manager.condition'));

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Action\ActionManager A Drupal\Core\Action\ActionManager instance.
     */
    protected function getPlugin_Manager_ActionService()
    {
        return $this->services['plugin.manager.action'] = new \Drupal\Core\Action\ActionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.archiver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Archiver\ArchiverManager A Drupal\Core\Archiver\ArchiverManager instance.
     */
    protected function getPlugin_Manager_ArchiverService()
    {
        return $this->services['plugin.manager.archiver'] = new \Drupal\Core\Archiver\ArchiverManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.condition' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Condition\ConditionManager A Drupal\Core\Condition\ConditionManager instance.
     */
    protected function getPlugin_Manager_ConditionService()
    {
        return $this->services['plugin.manager.condition'] = new \Drupal\Core\Condition\ConditionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.display_variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Display\VariantManager A Drupal\Core\Display\VariantManager instance.
     */
    protected function getPlugin_Manager_DisplayVariantService()
    {
        return $this->services['plugin.manager.display_variant'] = new \Drupal\Core\Display\VariantManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.field.field_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\FieldTypePluginManager A Drupal\Core\Field\FieldTypePluginManager instance.
     */
    protected function getPlugin_Manager_Field_FieldTypeService()
    {
        return $this->services['plugin.manager.field.field_type'] = new \Drupal\Core\Field\FieldTypePluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'plugin.manager.field.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\FormatterPluginManager A Drupal\Core\Field\FormatterPluginManager instance.
     */
    protected function getPlugin_Manager_Field_FormatterService()
    {
        return $this->services['plugin.manager.field.formatter'] = new \Drupal\Core\Field\FormatterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.field.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Field\WidgetPluginManager A Drupal\Core\Field\WidgetPluginManager instance.
     */
    protected function getPlugin_Manager_Field_WidgetService()
    {
        return $this->services['plugin.manager.field.widget'] = new \Drupal\Core\Field\WidgetPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));
    }

    /**
     * Gets the 'plugin.manager.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Mail\MailManager A Drupal\Core\Mail\MailManager instance.
     */
    protected function getPlugin_Manager_MailService()
    {
        return $this->services['plugin.manager.mail'] = new \Drupal\Core\Mail\MailManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('config.factory'));
    }

    /**
     * Gets the 'plugin.manager.menu.contextual_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\ContextualLinkManager A Drupal\Core\Menu\ContextualLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_ContextualLinkService()
    {
        return $this->services['plugin.manager.menu.contextual_link'] = new \Drupal\Core\Menu\ContextualLinkManager($this->get('controller_resolver'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'), $this->get('request_stack'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalActionManager A Drupal\Core\Menu\LocalActionManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalActionService()
    {
        return $this->services['plugin.manager.menu.local_action'] = new \Drupal\Core\Menu\LocalActionManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));
    }

    /**
     * Gets the 'plugin.manager.menu.local_task' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Menu\LocalTaskManager A Drupal\Core\Menu\LocalTaskManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalTaskService()
    {
        return $this->services['plugin.manager.menu.local_task'] = new \Drupal\Core\Menu\LocalTaskManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('router.route_provider'), $this->get('router.builder'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));
    }

    /**
     * Gets the 'private_key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\PrivateKey A Drupal\Core\PrivateKey instance.
     */
    protected function getPrivateKeyService()
    {
        return $this->services['private_key'] = new \Drupal\Core\PrivateKey($this->get('state'));
    }

    /**
     * Gets the 'queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueFactory A Drupal\Core\Queue\QueueFactory instance.
     */
    protected function getQueueService()
    {
        $this->services['queue'] = $instance = new \Drupal\Core\Queue\QueueFactory($this->get('settings'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'queue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Queue\QueueDatabaseFactory A Drupal\Core\Queue\QueueDatabaseFactory instance.
     */
    protected function getQueue_DatabaseService()
    {
        return $this->services['queue.database'] = new \Drupal\Core\Queue\QueueDatabaseFactory($this->get('database'));
    }

    /**
     * Gets the 'redirect_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RedirectResponseSubscriber A Drupal\Core\EventSubscriber\RedirectResponseSubscriber instance.
     * 
     * @throws InactiveScopeException when the 'redirect_response_subscriber' service is requested while the 'request' scope is not active
     */
    protected function getRedirectResponseSubscriberService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('redirect_response_subscriber', 'request');
        }

        return $this->services['redirect_response_subscriber'] = $this->scopedServices['request']['redirect_response_subscriber'] = new \Drupal\Core\EventSubscriber\RedirectResponseSubscriber($this->get('url_generator'));
    }

    /**
     * Gets the 'replica_database_ignore__subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber A Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber instance.
     */
    protected function getReplicaDatabaseIgnoreSubscriberService()
    {
        return $this->services['replica_database_ignore__subscriber'] = new \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber();
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_close_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RequestCloseSubscriber A Drupal\Core\EventSubscriber\RequestCloseSubscriber instance.
     */
    protected function getRequestCloseSubscriberService()
    {
        return $this->services['request_close_subscriber'] = new \Drupal\Core\EventSubscriber\RequestCloseSubscriber($this->get('module_handler'));
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'resolver_manager.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\EntityResolverManager A Drupal\Core\Entity\EntityResolverManager instance.
     */
    protected function getResolverManager_EntityService()
    {
        return $this->services['resolver_manager.entity'] = new \Drupal\Core\Entity\EntityResolverManager($this->get('entity.manager'), $this->get('controller_resolver'), $this->get('class_resolver'));
    }

    /**
     * Gets the 'reverse_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ReverseProxySubscriber A Drupal\Core\EventSubscriber\ReverseProxySubscriber instance.
     */
    protected function getReverseProxySubscriberService()
    {
        return $this->services['reverse_proxy_subscriber'] = new \Drupal\Core\EventSubscriber\ReverseProxySubscriber($this->get('settings'));
    }

    /**
     * Gets the 'route_content_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ContentControllerSubscriber A Drupal\Core\EventSubscriber\ContentControllerSubscriber instance.
     */
    protected function getRouteContentControllerSubscriberService()
    {
        return $this->services['route_content_controller_subscriber'] = new \Drupal\Core\EventSubscriber\ContentControllerSubscriber($this->get('content_negotiation'));
    }

    /**
     * Gets the 'route_content_form_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ContentFormControllerSubscriber A Drupal\Core\EventSubscriber\ContentFormControllerSubscriber instance.
     */
    protected function getRouteContentFormControllerSubscriberService()
    {
        $this->services['route_content_form_controller_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ContentFormControllerSubscriber($this->get('class_resolver'), $this->get('controller_resolver'), $this->get('form_builder'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\AuthenticationEnhancer A Drupal\Core\Routing\Enhancer\AuthenticationEnhancer instance.
     */
    protected function getRouteEnhancer_AuthenticationService()
    {
        return $this->services['route_enhancer.authentication'] = new \Drupal\Core\Routing\Enhancer\AuthenticationEnhancer($this->get('authentication'), $this->get('current_user'));
    }

    /**
     * Gets the 'route_enhancer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Entity\Enhancer\EntityRouteEnhancer A Drupal\Core\Entity\Enhancer\EntityRouteEnhancer instance.
     */
    protected function getRouteEnhancer_EntityService()
    {
        return $this->services['route_enhancer.entity'] = new \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer($this->get('controller_resolver'), $this->get('entity.manager'), $this->get('form_builder'));
    }

    /**
     * Gets the 'route_enhancer.param_conversion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\Enhancer\ParamConversionEnhancer A Drupal\Core\Routing\Enhancer\ParamConversionEnhancer instance.
     */
    protected function getRouteEnhancer_ParamConversionService()
    {
        return $this->services['route_enhancer.param_conversion'] = new \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer($this->get('paramconverter_manager'));
    }

    /**
     * Gets the 'route_http_method_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RouteMethodSubscriber A Drupal\Core\EventSubscriber\RouteMethodSubscriber instance.
     */
    protected function getRouteHttpMethodSubscriberService()
    {
        return $this->services['route_http_method_subscriber'] = new \Drupal\Core\EventSubscriber\RouteMethodSubscriber();
    }

    /**
     * Gets the 'route_processor_csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Access\RouteProcessorCsrf A Drupal\Core\Access\RouteProcessorCsrf instance.
     */
    protected function getRouteProcessorCsrfService()
    {
        return $this->services['route_processor_csrf'] = new \Drupal\Core\Access\RouteProcessorCsrf($this->get('csrf_token'));
    }

    /**
     * Gets the 'route_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\RouteProcessor\RouteProcessorManager A Drupal\Core\RouteProcessor\RouteProcessorManager instance.
     */
    protected function getRouteProcessorManagerService()
    {
        $this->services['route_processor_manager'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorManager();

        $instance->addOutbound($this->get('route_processor_csrf'), 0);

        return $instance;
    }

    /**
     * Gets the 'route_special_attributes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber A Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber instance.
     */
    protected function getRouteSpecialAttributesSubscriberService()
    {
        return $this->services['route_special_attributes_subscriber'] = new \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber();
    }

    /**
     * Gets the 'route_subscriber.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber A Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber instance.
     */
    protected function getRouteSubscriber_EntityService()
    {
        return $this->services['route_subscriber.entity'] = new \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber($this->get('resolver_manager.entity'));
    }

    /**
     * Gets the 'route_subscriber.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ModuleRouteSubscriber A Drupal\Core\EventSubscriber\ModuleRouteSubscriber instance.
     */
    protected function getRouteSubscriber_ModuleService()
    {
        return $this->services['route_subscriber.module'] = new \Drupal\Core\EventSubscriber\ModuleRouteSubscriber($this->get('module_handler'));
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.dynamic'));

        return $instance;
    }

    /**
     * Gets the 'router.admin_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\AdminContext A Drupal\Core\Routing\AdminContext instance.
     */
    protected function getRouter_AdminContextService()
    {
        return $this->services['router.admin_context'] = new \Drupal\Core\Routing\AdminContext($this->get('request_stack'));
    }

    /**
     * Gets the 'router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteBuilder A Drupal\Core\Routing\RouteBuilder instance.
     */
    protected function getRouter_BuilderService()
    {
        return $this->services['router.builder'] = new \Drupal\Core\Routing\RouteBuilder($this->get('router.dumper'), $this->get('lock'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('controller_resolver'), $this->get('state'));
    }

    /**
     * Gets the 'router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\MatcherDumper A Drupal\Core\Routing\MatcherDumper instance.
     */
    protected function getRouter_DumperService()
    {
        return $this->services['router.dumper'] = new \Drupal\Core\Routing\MatcherDumper($this->get('database'), $this->get('state'));
    }

    /**
     * Gets the 'router.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getRouter_DynamicService()
    {
        $this->services['router.dynamic'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('router.matcher'), $this->get('url_generator'));

        $instance->addRouteEnhancer($this->get('route_enhancer.authentication'), 1000);
        $instance->addRouteEnhancer($this->get('route_enhancer.entity'), 20);
        $instance->addRouteEnhancer($this->get('route_enhancer.param_conversion'), 0);

        return $instance;
    }

    /**
     * Gets the 'router.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getRouter_MatcherService()
    {
        $this->services['router.matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('router.route_provider'));

        $instance->setFinalMatcher($this->get('router.matcher.final_matcher'));
        $instance->addRouteFilter($this->get('content_type_header_matcher'), 0);
        $instance->addRouteFilter($this->get('accept_header_matcher'), 0);

        return $instance;
    }

    /**
     * Gets the 'router.matcher.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlMatcher A Drupal\Core\Routing\UrlMatcher instance.
     */
    protected function getRouter_Matcher_FinalMatcherService()
    {
        return $this->services['router.matcher.final_matcher'] = new \Drupal\Core\Routing\UrlMatcher();
    }

    /**
     * Gets the 'router.path_roots_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\PathRootsSubscriber A Drupal\Core\EventSubscriber\PathRootsSubscriber instance.
     */
    protected function getRouter_PathRootsSubscriberService()
    {
        return $this->services['router.path_roots_subscriber'] = new \Drupal\Core\EventSubscriber\PathRootsSubscriber($this->get('state'));
    }

    /**
     * Gets the 'router.rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\RouterRebuildSubscriber A Drupal\Core\EventSubscriber\RouterRebuildSubscriber instance.
     */
    protected function getRouter_RebuildSubscriberService()
    {
        return $this->services['router.rebuild_subscriber'] = new \Drupal\Core\EventSubscriber\RouterRebuildSubscriber($this->get('router.builder'), $this->get('lock'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext();
    }

    /**
     * Gets the 'router.route_preloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RoutePreloader A Drupal\Core\Routing\RoutePreloader instance.
     */
    protected function getRouter_RoutePreloaderService()
    {
        return $this->services['router.route_preloader'] = new \Drupal\Core\Routing\RoutePreloader($this->get('router.route_provider'), $this->get('state'), $this->get('content_negotiation'));
    }

    /**
     * Gets the 'router.route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\RouteProvider A Drupal\Core\Routing\RouteProvider instance.
     */
    protected function getRouter_RouteProviderService()
    {
        return $this->services['router.route_provider'] = new \Drupal\Core\Routing\RouteProvider($this->get('database'), $this->get('router.builder'), $this->get('state'));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), NULL, $this->get('request_stack'));
    }

    /**
     * Gets the 'serialization.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\Json A Drupal\Component\Serialization\Json instance.
     */
    protected function getSerialization_JsonService()
    {
        return $this->services['serialization.json'] = new \Drupal\Component\Serialization\Json();
    }

    /**
     * Gets the 'serialization.phpserialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\PhpSerialize A Drupal\Component\Serialization\PhpSerialize instance.
     */
    protected function getSerialization_PhpserializeService()
    {
        return $this->services['serialization.phpserialize'] = new \Drupal\Component\Serialization\PhpSerialize();
    }

    /**
     * Gets the 'serialization.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Serialization\Yaml A Drupal\Component\Serialization\Yaml instance.
     */
    protected function getSerialization_YamlService()
    {
        return $this->services['serialization.yaml'] = new \Drupal\Component\Serialization\Yaml();
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\SessionManager A Drupal\Core\Session\SessionManager instance.
     */
    protected function getSessionManagerService()
    {
        return $this->services['session_manager'] = new \Drupal\Core\Session\SessionManager($this->get('request_stack'), $this->get('database'), $this->get('session_manager.metadata_bag'), $this->get('settings'));
    }

    /**
     * Gets the 'session_manager.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Session\MetadataBag A Drupal\Core\Session\MetadataBag instance.
     */
    protected function getSessionManager_MetadataBagService()
    {
        return $this->services['session_manager.metadata_bag'] = new \Drupal\Core\Session\MetadataBag($this->get('settings'));
    }

    /**
     * Gets the 'settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Site\Settings A Drupal\Core\Site\Settings instance.
     */
    protected function getSettingsService()
    {
        return $this->services['settings'] = call_user_func(array('Drupal\\Core\\Site\\Settings', 'getInstance'));
    }

    /**
     * Gets the 'state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\State\State A Drupal\Core\State\State instance.
     */
    protected function getStateService()
    {
        return $this->services['state'] = new \Drupal\Core\State\State($this->get('keyvalue'));
    }

    /**
     * Gets the 'string_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\TranslationManager A Drupal\Core\StringTranslation\TranslationManager instance.
     */
    protected function getStringTranslationService()
    {
        $this->services['string_translation'] = $instance = new \Drupal\Core\StringTranslation\TranslationManager($this->get('language_manager'));

        $instance->initLanguageManager();
        $instance->addTranslator($this->get('string_translator.custom_strings'), 30);

        return $instance;
    }

    /**
     * Gets the 'string_translator.custom_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\StringTranslation\Translator\CustomStrings A Drupal\Core\StringTranslation\Translator\CustomStrings instance.
     */
    protected function getStringTranslator_CustomStringsService()
    {
        return $this->services['string_translator.custom_strings'] = new \Drupal\Core\StringTranslation\Translator\CustomStrings($this->get('settings'));
    }

    /**
     * Gets the 'theme.negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\ThemeNegotiator A Drupal\Core\Theme\ThemeNegotiator instance.
     */
    protected function getTheme_NegotiatorService()
    {
        $this->services['theme.negotiator'] = $instance = new \Drupal\Core\Theme\ThemeNegotiator($this->get('access_check.theme'));

        $instance->addNegotiator($this->get('theme.negotiator.ajax_base_page'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.default'), -100);

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.ajax_base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\AjaxBasePageNegotiator A Drupal\Core\Theme\AjaxBasePageNegotiator instance.
     */
    protected function getTheme_Negotiator_AjaxBasePageService()
    {
        return $this->services['theme.negotiator.ajax_base_page'] = new \Drupal\Core\Theme\AjaxBasePageNegotiator($this->get('csrf_token'), $this->get('config.factory'), $this->get('request_stack'));
    }

    /**
     * Gets the 'theme.negotiator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\DefaultNegotiator A Drupal\Core\Theme\DefaultNegotiator instance.
     */
    protected function getTheme_Negotiator_DefaultService()
    {
        return $this->services['theme.negotiator.default'] = new \Drupal\Core\Theme\DefaultNegotiator($this->get('config.factory'));
    }

    /**
     * Gets the 'theme.negotiator.request_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ThemeNegotiatorRequestSubscriber A Drupal\Core\EventSubscriber\ThemeNegotiatorRequestSubscriber instance.
     */
    protected function getTheme_Negotiator_RequestSubscriberService()
    {
        return $this->services['theme.negotiator.request_subscriber'] = new \Drupal\Core\EventSubscriber\ThemeNegotiatorRequestSubscriber();
    }

    /**
     * Gets the 'theme.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Theme\Registry A Drupal\Core\Theme\Registry instance.
     */
    protected function getTheme_RegistryService()
    {
        return $this->services['theme.registry'] = new \Drupal\Core\Theme\Registry($this->get('cache.default'), $this->get('lock'), $this->get('module_handler'));
    }

    /**
     * Gets the 'theme_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Extension\ThemeHandler A Drupal\Core\Extension\ThemeHandler instance.
     */
    protected function getThemeHandlerService()
    {
        return $this->services['theme_handler'] = new \Drupal\Core\Extension\ThemeHandler($this->get('config.factory'), $this->get('module_handler'), $this->get('state'), $this->get('info_parser'), $this->get('config.installer'), $this->get('router.builder'));
    }

    /**
     * Gets the 'title_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Controller\TitleResolver A Drupal\Core\Controller\TitleResolver instance.
     */
    protected function getTitleResolverService()
    {
        return $this->services['title_resolver'] = new \Drupal\Core\Controller\TitleResolver($this->get('controller_resolver'), $this->get('string_translation'));
    }

    /**
     * Gets the 'token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Utility\Token A Drupal\Core\Utility\Token instance.
     */
    protected function getTokenService()
    {
        return $this->services['token'] = new \Drupal\Core\Utility\Token($this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'));
    }

    /**
     * Gets the 'transliteration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Transliteration\PHPTransliteration A Drupal\Core\Transliteration\PHPTransliteration instance.
     */
    protected function getTransliterationService()
    {
        return $this->services['transliteration'] = new \Drupal\Core\Transliteration\PHPTransliteration();
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Template\TwigEnvironment A Drupal\Core\Template\TwigEnvironment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Drupal\Core\Template\TwigEnvironment($this->get('twig.loader.filesystem'), array('cache' => false, 'autoescape' => false, 'debug' => false, 'auto_reload' => NULL), $this->get('module_handler'), $this->get('theme_handler'));

        $instance->addExtension(new \Drupal\Core\Template\TwigExtension());
        $instance->addExtension(new \Twig_Extension_Debug());

        return $instance;
    }

    /**
     * Gets the 'twig.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Loader_Filesystem A Twig_Loader_Filesystem instance.
     */
    protected function getTwig_Loader_FilesystemService()
    {
        return $this->services['twig.loader.filesystem'] = new \Twig_Loader_Filesystem('/var/www/docroot8');
    }

    /**
     * Gets the 'typed_data_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\TypedData\TypedDataManager A Drupal\Core\TypedData\TypedDataManager instance.
     */
    protected function getTypedDataManagerService()
    {
        $this->services['typed_data_manager'] = $instance = new \Drupal\Core\TypedData\TypedDataManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->setValidationConstraintManager($this->get('validation.constraint'));

        return $instance;
    }

    /**
     * Gets the 'url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Routing\UrlGenerator A Drupal\Core\Routing\UrlGenerator instance.
     */
    protected function getUrlGeneratorService()
    {
        $this->services['url_generator'] = $instance = new \Drupal\Core\Routing\UrlGenerator($this->get('router.route_provider'), $this->get('path_processor_manager'), $this->get('route_processor_manager'), $this->get('config.factory'), $this->get('settings'), $this->get('logger.channel.default'));

        if ($this->has('request')) {
            $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('router.request_context')) {
            $instance->setContext($this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Component\Uuid\Php A Drupal\Component\Uuid\Php instance.
     */
    protected function getUuidService()
    {
        return $this->services['uuid'] = new \Drupal\Component\Uuid\Php();
    }

    /**
     * Gets the 'validation.constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\Validation\ConstraintManager A Drupal\Core\Validation\ConstraintManager instance.
     */
    protected function getValidation_ConstraintService()
    {
        return $this->services['validation.constraint'] = new \Drupal\Core\Validation\ConstraintManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));
    }

    /**
     * Gets the 'view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Drupal\Core\EventSubscriber\ViewSubscriber A Drupal\Core\EventSubscriber\ViewSubscriber instance.
     */
    protected function getViewSubscriberService()
    {
        return $this->services['view_subscriber'] = new \Drupal\Core\EventSubscriber\ViewSubscriber($this->get('content_negotiation'), $this->get('title_resolver'), $this->get('ajax_response_renderer'));
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('url_generator')) {
                    if ($this->has('request')) {
    $this->get('url_generator')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));        }

        }
        if ($this->initialized('access_manager')) {
                    if ($this->has('request')) {
    $this->get('access_manager')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));        }

        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'install',
            'container.modules' => array(

            ),
            'container.namespaces' => array(
                'Drupal\\Core\\Entity' => '/var/www/docroot8/core/lib/Drupal/Core/Entity',
                'Drupal\\Core\\Field' => '/var/www/docroot8/core/lib/Drupal/Core/Field',
                'Drupal\\Core\\Mail' => '/var/www/docroot8/core/lib/Drupal/Core/Mail',
                'Drupal\\Core\\TypedData' => '/var/www/docroot8/core/lib/Drupal/Core/TypedData',
                'Drupal\\Core\\Validation' => '/var/www/docroot8/core/lib/Drupal/Core/Validation',
                'Drupal\\Component\\Annotation' => '/var/www/docroot8/core/lib/Drupal/Component/Annotation',
            ),
            'language.default_values' => array(
                'id' => 'en',
                'name' => 'English',
                'direction' => 0,
                'weight' => 0,
                'locked' => 0,
                'default' => true,
            ),
            'persistids' => array(
                0 => 'class_loader',
                1 => 'kernel',
                2 => 'service_container',
                3 => 'request',
                4 => 'request_stack',
                5 => 'router.request_context',
                6 => 'session_manager',
            ),
            'cache_bins' => array(
                'cache.bootstrap' => 'bootstrap',
                'cache.default' => 'default',
                'cache.entity' => 'entity',
                'cache.render' => 'render',
                'cache.data' => 'data',
                'cache.discovery' => 'discovery',
            ),
            'cache_contexts' => array(
                0 => 'cache_context.url',
                1 => 'cache_context.language',
                2 => 'cache_context.theme',
                3 => 'cache_context.timezone',
            ),
        );
    }
}
