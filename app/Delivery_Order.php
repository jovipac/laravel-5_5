<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery_Order extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'delivery_orders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id', 'user_id', 'doc_type', 'doc_serie', 'doc_num', 'doc_date', 'total', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
