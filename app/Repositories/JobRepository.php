<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\BaseRepository;

/**
 * Class JobRepository
 * @package App\Repositories
 * @version October 20, 2019, 1:11 pm UTC
*/

class JobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Job::class;
    }
}
