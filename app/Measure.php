<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Measure extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'measures';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'unit'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
