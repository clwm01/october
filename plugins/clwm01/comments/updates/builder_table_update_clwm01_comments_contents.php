<?php namespace Clwm01\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateClwm01CommentsContents extends Migration
{
    public function up()
    {
        Schema::table('clwm01_comments_contents', function($table)
        {
            $table->time('created_at');
            $table->time('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('clwm01_comments_contents', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
