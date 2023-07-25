<?php

namespace App\Models;

use CodeIgniter\Model;

class ShahihMuslimModel extends Model
{
    protected $table = 'shahih_muslim';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getShahihMuslimData()
    {
        return $this->findAll();
    }
}
