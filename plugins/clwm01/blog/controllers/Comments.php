<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 05/08/2017
 * Time: 2:57 PM
 */

namespace Clwm01\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use Illuminate\Support\Facades\Redirect;
use Backend;

class Comments extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Clwm01.Blog', 'blog', 'view-articles-comments');
    }

    public function index() {
        $this->makeLists();
    }

    public function preview() {
        $id = $this->params[0];
        $this->pageTitle = 'preview';

        $model = $this->formFindModelObject($id);
        $this->vars['model'] = $model;
    }

    public function onUpdate() {

        $data = post();
        $comment = \Clwm01\Blog\Models\Comments::find($data['id']);
        $comment->is_show = isset($data['is_show']) ? $data['is_show'] : 0;

        if ($comment->save()) {
            Flash::success('done!');
        } else {
            Flash::error('fail');
        }

        return Redirect::to(Backend::url('clwm01/blog/comments'));
    }
}