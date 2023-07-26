<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanIbnuMajahModel extends Model
{
    protected $table = 'sunan_ibnu_majah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getSunanIbnuMajahData()
    {
        return $this->findAll();
    }
}
