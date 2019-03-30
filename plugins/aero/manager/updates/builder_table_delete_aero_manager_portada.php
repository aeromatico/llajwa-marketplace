<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAeroManagerPortada extends Migration
{
    public function up()
    {
        Schema::dropIfExists('aero_manager_portada');
    }
    
    public function down()
    {
        Schema::create('aero_manager_portada', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
