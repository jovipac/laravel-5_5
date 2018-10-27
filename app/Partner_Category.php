<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner_Category extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partner_categories';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
