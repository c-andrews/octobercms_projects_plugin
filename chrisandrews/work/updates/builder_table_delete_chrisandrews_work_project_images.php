<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteChrisandrewsWorkProjectImages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('chrisandrews_work_project_images');
    }
    
    public function down()
    {
        Schema::create('chrisandrews_work_project_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('url', 255)->nullable();
            $table->integer('project_id')->nullable();
            $table->primary(['id']);
        });
    }
}
