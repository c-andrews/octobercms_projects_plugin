<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChrisandrewsWorkProjectImages extends Migration
{
    public function up()
    {
        Schema::create('chrisandrews_work_project_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('url')->nullable();
            $table->integer('project_id')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chrisandrews_work_project_images');
    }
}
