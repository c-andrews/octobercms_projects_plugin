<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChrisandrewsWorkProjects2 extends Migration
{
    public function up()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->string('url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
