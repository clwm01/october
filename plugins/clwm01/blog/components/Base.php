<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 15/07/2017
 * Time: 6:05 PM
 */

namespace Clwm01\Blog\Components;


use Clwm01\Blog\Models\Articles;
use Cms\Classes\ComponentBase;

class Base extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Base components',
            'description' => 'Base components of clwm01/blog'
        ];
    }


    public function onRun()
    {
        $p = $this->param('page');
        $articles_count = Articles::where('is_show', 1)->count();

        if ($p < 1 || $p > $articles_count) {
            $this->page['article_not_found'] = true;
        }
    }
}