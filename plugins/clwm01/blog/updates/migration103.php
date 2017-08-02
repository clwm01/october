<?php
namespace Clwm01\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration103 extends Migration
{
    public function up() {
        Schema::create('clwm01_blog_tags', function ($table) {
            $table->engine = "InnoDB";
            $table->increments('id')->unsigned();
            $table->string('name', 64);
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('clwm01_blog_tags');
    }
}