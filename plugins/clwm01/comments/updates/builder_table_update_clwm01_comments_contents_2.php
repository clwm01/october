<?php namespace Clwm01\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateClwm01CommentsContents2 extends Migration
{
    public function up()
    {
        Schema::table('clwm01_comments_contents', function($table)
        {
            $table->integer('post_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('clwm01_comments_contents', function($table)
        {
            $table->dropColumn('post_id');
        });
    }
}
