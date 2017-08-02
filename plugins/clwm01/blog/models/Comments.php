<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 21/07/2017
 * Time: 7:06 PM
 */

namespace Clwm01\Blog\Models;

use Model;

class Comments extends Model
{
    public $table = 'clwm01_blog_comments';

    public $timestamps = false;
}