<?php namespace Clwm01\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration102 extends Migration
{
    public function up()
    {
        Schema::create('clwm01_blog_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email', 255);
            $table->text('content');
            $table->tinyInteger('is_show')->unsigned()->default(0);
            $table->integer('article_id')->unsigned();
            $table->integer('created_at')->unsigned()->default(0);
        });

        Schema::table('clwm01_blog_comments', function ($table) {
            $table->foreign('article_id')->references('id')->on('clwm01_blog_articles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('clwm01_blog_comments', function ($table) {
            $table->dropForeign('clwm01_blog_comments_article_id_foreign');
        });
        Schema::drop('clwm01_blog_comments');
    }
}