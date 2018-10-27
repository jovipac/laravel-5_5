<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('business_partners', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('telephone');
                $table->string('email');
                $table->integer('category_id');
                $table->text('nit');

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
        Schema::drop('business_partners');
    }

}
