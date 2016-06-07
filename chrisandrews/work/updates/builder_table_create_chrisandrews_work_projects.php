<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChrisandrewsWorkProjects extends Migration
{
    public function up()
    {
        Schema::create('chrisandrews_work_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('role')->nullable();
            $table->text('link')->nullable();
            $table->string('agency')->nullable();
            $table->string('client')->nullable();
            $table->string('tags')->nullable();
            $table->integer('images')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chrisandrews_work_projects');
    }
}
