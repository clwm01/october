<?php
namespace Clwm01\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Clwm01\Blog\Components\Latest' => 'latest',
            'Clwm01\Blog\Components\PrevNext' => 'prevnext',
            'Clwm01\Blog\Components\Comments' => 'comments'
        ];
    }

    public function registerSettings()
    {

    }
}