<?php

namespace App\Repositories;

use App\Models\Account;
use App\Repositories\BaseRepository;

/**
 * Class AccountRepository
 * @package App\Repositories
 * @version October 20, 2019, 12:58 pm UTC
*/

class AccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'currency',
        'phone_ext',
        'flag'
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
        return Account::class;
    }
}
