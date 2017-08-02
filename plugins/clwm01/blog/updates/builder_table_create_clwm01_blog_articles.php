<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 12/07/2017
 * Time: 7:09 PM
 */

namespace Clwm01\Blog\Updates;
use Schema;
use October\Rain\Database\Updates\Migration;


class BuilderTableCreateClwm01BlogArticles extends Migration
{
    public function up()
    {
        Schema::create('clwm01_blog_articles', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('content');
            $table->tinyInteger('is_show')->unsigned()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clwm01_blog_articles');
    }

}