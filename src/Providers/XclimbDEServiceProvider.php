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
	    $dispatcher->listen('IO.init.templates', function (Partial $partial)
	    {
		    pluginApp(Container::class)->register('XclimbDE::PageDesign.Partials.Header.NavigationList.twig', NavigationCacheSettings::class);
		    pluginApp(Container::class)->register('XclimbDE::PageDesign.Partials.Header.SideNavigation.twig', SideNavigationCacheSettings::class);

		    $partial->set('head', 'Ceres::PageDesign.Partials.Head');
		    $partial->set('header', 'Ceres::PageDesign.Partials.Header.Header');
		    $partial->set('page-design', 'Ceres::PageDesign.PageDesign');
		    $partial->set('footer', 'Ceres::PageDesign.Partials.Footer');

		    $partial->set('header', 'XclimbDE::PageDesign.Partials.Header.Header');

		    return false;
	    }, self::PRIORITY);
    }
}

