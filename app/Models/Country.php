<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 * @package App\Models
 * @version October 20, 2019, 12:59 pm UTC
 *
 * @property string name
 * @property string code
 * @property string currency
 * @property string phone_ext
 * @property string flag
 */
class Country extends Model
{
    use SoftDeletes;

    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code',
        'currency',
        'phone_ext',
        'flag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'currency' => 'string',
        'phone_ext' => 'string',
        'flag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
    
}
