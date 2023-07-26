<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanTirmidziModel extends Model
{
    protected $table = 'sunan_tirmidzi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getSunanTirmidziData()
    {
        return $this->findAll();
    }
}
