<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 12/07/2017
 * Time: 6:16 PM
 */

namespace Clwm01\Blog\Models;

use Model;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Validation;

class Articles extends Model
{
    use Validation;
    use SoftDelete;

    protected $dates = ['deleted_at'];

    // Validation
    public $rules = [];

    // The database table used by this model.
    public $table = 'clwm01_blog_articles';

    public function latest()
    {
        
    }

}