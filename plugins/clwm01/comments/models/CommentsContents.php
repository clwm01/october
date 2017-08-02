<?php namespace Clwm01\Comments\Models;

use Model;

/**
 * Model
 */
class CommentsContents extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'clwm01_comments_contents';
}