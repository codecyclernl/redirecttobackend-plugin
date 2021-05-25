<?php namespace Codecycler\RedirectToBackend;

use Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        Event::listen('cms.page.start', function ($controller) {
            if ($controller->getRouter()->getUrl() === '/') {
                return redirect(config('backend.uri'));
            }
        });
    }
}
