<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('material_providers', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('material_id');
                $table->integer('provider_id');
                $table->integer('stock');
                $table->date('last_purchase');
                $table->boolean('active');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('material_providers');
    }

}
