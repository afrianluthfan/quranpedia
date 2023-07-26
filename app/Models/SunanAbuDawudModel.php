<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanAbuDawudModel extends Model
{
    protected $table = 'sunan_abu_daud';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getSunanAbuDawudData()
    {
        return $this->findAll();
    }
}
