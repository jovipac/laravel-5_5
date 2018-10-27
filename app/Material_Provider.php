<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material_Provider extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'material_providers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['material_id', 'provider_id', 'stock', 'last_purchase', 'active'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
