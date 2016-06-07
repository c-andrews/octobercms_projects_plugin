<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChrisandrewsWorkProjects8 extends Migration
{
    public function up()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->integer('sort_order');
        });
    }
}
