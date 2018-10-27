<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material_Measure extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'material_measures';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['material_id, measure_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
