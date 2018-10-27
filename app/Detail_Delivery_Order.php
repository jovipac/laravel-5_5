<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail_Delivery_Order extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail_delivery_orders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['delivery_order_id', 'material_id', 'quantity', 'price', 'subtotal'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
