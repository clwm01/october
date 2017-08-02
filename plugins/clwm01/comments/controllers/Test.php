<?php namespace Clwm01\Comments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Test extends Controller
{
    public $implement = [];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Clwm01.Comments', 'comments-main');
    }
}