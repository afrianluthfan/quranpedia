<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanNasaiModel extends Model
{
    protected $table = 'sunan_nasai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getSunanNasaiData()
    {
        return $this->findAll();
    }
}
