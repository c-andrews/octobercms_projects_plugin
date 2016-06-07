<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChrisandrewsWorkProjects3 extends Migration
{
    public function up()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
