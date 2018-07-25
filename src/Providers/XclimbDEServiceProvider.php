<?php

namespace XclimbDE\Providers;

use Ceres\Caching\NavigationCacheSettings;
use Ceres\Caching\SideNavigationCacheSettings;
use IO\Services\ContentCaching\Services\Container;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\ConfigRepository;


/**
 * Class XclimbDEServiceProvider
 * @package XclimbDE\Providers
 */
class XclimbDEServiceProvider extends ServiceProvider
{
    const PRIORITY = 0;

    public function register()
    {
    }

    public function boot(Twig $twig, Dispatcher $dispatcher, ConfigRepository $config)
    {

    }
}

