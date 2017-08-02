<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 13/07/2017
 * Time: 6:38 PM
 */

namespace Clwm01\Blog\Components;


use Clwm01\Blog\Models\Articles;

class Latest extends Base
{

    public function componentDetails()
    {
        return [
            'name' => 'Latest article',
            'description' => 'Show you the latest article.'
        ];
    }

    public function onRun()
    {
        parent::onRun();

        $p = $this->param('page');
        $size = 1;
        $article = Articles::where('is_show', 1)
            ->orderBy('created_at', 'desc')
            ->skip(($p - 1) * $size)
            ->take($size)
            ->first();

        $this->page['article'] = $article;
        $this->page['article_id'] = $article->id;
    }
}