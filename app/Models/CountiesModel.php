<?php

namespace App\Models;

use CodeIgniter\Model;


class CountiesModel extends Model
{
    protected $table = 'counties';

    protected $allowedFields = ['county_code','county_name','slug'];

    public function getCounty($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}