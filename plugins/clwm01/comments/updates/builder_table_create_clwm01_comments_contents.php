<?php namespace Clwm01\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateClwm01CommentsContents extends Migration
{
    public function up()
    {
        Schema::create('clwm01_comments_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('user_id')->unsigned();
            $table->string('content', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('clwm01_comments_contents');
    }
}
