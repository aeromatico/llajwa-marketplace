<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroManagerEditor extends Migration
{
    public function up()
    {
        Schema::create('aero_manager_editor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('slider')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_manager_editor');
    }
}
