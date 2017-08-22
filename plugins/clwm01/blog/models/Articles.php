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

    // mutator
    public function getCreatedAtAttribute($value) {
        return strtotime($value);
    }

    static function threeArticles($id) {
        if (!$id) {
            $article = self::where('is_show', 1)
                ->orderBy('created_at', 'desc')
                ->first();
        } else {
            $article = self::find($id);
        }

        $created_at = $article->created_at;
        $prev = self::where('created_at', '<=', date('Y-m-d H:i:s', $created_at))
            ->where('id', '<', $article->id)
            ->orderBy('created_at', 'desc')
            ->first();


        $next = self::where('created_at', '>=', date('Y-m-d H:i:s', $created_at))
            ->where('id', '>', $article->id)
            ->orderBy('created_at', 'asc')
            ->first();

        return [
            'prev' => $prev,
            'article' => $article,
            'next' => $next
        ];
    }

}