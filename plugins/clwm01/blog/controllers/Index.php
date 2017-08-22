<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 12/07/2017
 * Time: 6:12 PM
 */

namespace Clwm01\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Index extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Clwm01.Blog', 'blog', 'view-articles-list');

        $this->bodyClass = 'compact-container'; // To implement a child layout structure.
    }

}