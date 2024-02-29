<?php

namespace App\Models;

use CodeIgniter\Model;



class SpecializationsModel extends Model
{
    protected $table = 'specializations';

    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'description'];

    public function getAllSpecializations()
  {
    return $this->findAll();
  }


    // public function getSpecializations($id= null)
    // {
    //     if (empty($id)){
    //         return $this->findAll();

    //     }
    //     return $this->find($id);
    // }
}