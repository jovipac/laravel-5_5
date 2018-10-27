<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('delivery_orders', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('customer_id');
                $table->integer('user_id');
                $table->integer('doc_type');
                $table->string('doc_serie');
                $table->string('doc_num');
                $table->date('doc_date');
                $table->float('total');
                $table->char('status');

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
        Schema::drop('delivery_orders');
    }

}
