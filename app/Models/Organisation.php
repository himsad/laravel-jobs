<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Organisation extends Model
{
    use SoftDeletes;

    public $table = 'organisations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'user_id',
        'name',
        'description',
        'city',
        'state',
        'country_id',
        'contact_details'
        
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_id' => 'string',
        'contact_details' => 'string'
    ];


    public static $rules = [

        'user_id' => 'required',
        'name' => 'required',
        'description' => 'required'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



}