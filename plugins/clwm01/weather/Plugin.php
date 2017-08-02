<?php namespace Clwm01\Weather;

use Backend;
use System\Classes\PluginBase;

/**
 * weather Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'weather',
            'description' => 'Provides the local weather information.',
            'author'      => 'clwm01',
            'icon'        => 'icon-sun-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Clwm01\Weather\Components\Weather' => 'weather',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'clwm01.weather.some_permission' => [
                'tab' => 'weather',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'weather' => [
                'label'       => 'weather',
                'url'         => Backend::url('clwm01/weather/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['clwm01.weather.*'],
                'order'       => 500,
            ],
        ];
    }
}
