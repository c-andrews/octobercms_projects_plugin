<?php namespace ChrisAndrews\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChrisandrewsWorkProjects5 extends Migration
{
    public function up()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('url');
        });
    }
    
    public function down()
    {
        Schema::table('chrisandrews_work_projects', function($table)
        {
            $table->string('image', 255)->nullable();
            $table->string('url', 255)->nullable();
        });
    }
}
