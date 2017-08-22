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

        $id = $this->param('id');
        $three_articles = Articles::threeArticles($id);

        $this->page['three_articles'] = $three_articles;
    }
}