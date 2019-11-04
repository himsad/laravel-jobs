<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version October 20, 2019, 1:11 pm UTC
 *
 * @property integer user_id
 * @property integer title
 * @property integer skills_required
 * @property integer description
 * @property string work_type
 * @property string job_type
 * @property string status
 * @property integer organisation_id
 * @property integer country_id
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'title',
        'skills_required',
        'description',
        'work_type',
        'job_type',
        'status',
        'organisation_id',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'integer',
        'skills_required' => 'integer',
        'description' => 'integer',
        'work_type' => 'string',
        'job_type' => 'string',
        'status' => 'string',
        'organisation_id' => 'integer',
        'country_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'skills_required' => 'required',
        'description' => 'required',
        'work_type' => 'required',
        'job_type' => 'required'
    ];

    
}
