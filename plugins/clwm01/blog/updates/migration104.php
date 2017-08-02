<?php namespace Clwm01\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration104 extends Migration
{
    public function up()
    {
        Schema::create('clwm01_blog_tags_articles', function($table)
        {
            $table->integer('tag_id')->unsigned();
            $table->integer('article_id')->unsigned();
        });

        Schema::table('clwm01_blog_tags_articles', function ($table) {
            $table->foreign('tag_id')->references('id')->on('clwm01_blog_tags')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('clwm01_blog_articles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('clwm01_blog_tags_articles', function($table) {
            $table->dropForeign('clwm01_blog_tags_articles_tag_id_foreign');
            $table->dropForeign('clwm01_blog_tags_articles_article_id_foreign');
        });

        Schema::drop('clwm01_blog_tags_articles');
    }
}