<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailDeliveryOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('detail_delivery_orders', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('delivery_order_id');
                $table->integer('material_id');
                $table->integer('quantity');
                $table->float('price');
                $table->float('subtotal');

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
        Schema::drop('detail_delivery_orders');
    }

}
