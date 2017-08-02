<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 16/07/2017
 * Time: 11:54 PM
 */

namespace Clwm01\Blog\Components;


use Flash;

class Comments extends Base
{
    public function componentDetails()
    {
        return [
            'name' => 'comments',
            'description' => 'Comments for an article'
        ];
    }

    public function onRun()
    {
        // provided by latest
        $article_id = $this->page['article_id'];
        // then get all comments for this artcle.
        $this->page['aid'] = $article_id;

        // Gets latest available comments.
        $comments = \Clwm01\Blog\Models\Comments::where('is_show', 1)->orderBy('created_at', 'desc')->skip(0)->take(10)->get();

        $this->page['comments'] = $comments;
    }


    public function onSendComment()
    {
        // This is the data posted via form.
        $data = post();
        $comments = new \Clwm01\Blog\Models\Comments;
        $comments->email = $data['email'];
        $comments->content = $data['content'];
        $comments->article_id = $data['article_id'];
        $comments->created_at = time();


        if ($comments->save()) {
            // Gets latest available comments.
            $comments = \Clwm01\Blog\Models\Comments::where('is_show', 1)->orderBy('created_at', 'desc')->skip(0)->take(10)->get();

            $this->page['comments'] = $comments;

            Flash::success('done!');
        } else
            Flash::error('fail');
    }
}