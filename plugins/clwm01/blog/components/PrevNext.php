<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 14/07/2017
 * Time: 1:24 PM
 */

namespace Clwm01\Blog\Components;


use Clwm01\Blog\Models\Articles;

class PrevNext extends Base
{
    public function componentDetails()
    {
        return [
            'name' => 'prev and next',
            'description' => 'used to navigate user to previous or next article.'
        ];
    }

    public function onRun()
    {
        parent::onRun();

        $p = $this->param('page');
        $articles_count = Articles::where('is_show', 1)->count();

        $this->addCss('/plugins/clwm01/blog/assets/css/blog.css');

        $this->page['articles_count'] = $articles_count;
        $this->page['p'] = $p;
    }

}