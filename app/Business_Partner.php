<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business_Partner extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'business_partners';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'telephone', 'email', 'category_id', 'nit'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
