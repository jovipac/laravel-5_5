<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business_Partner_Document extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'business_partner_documents';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'business_partner_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
