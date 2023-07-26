<?php

namespace App\Models;

use CodeIgniter\Model;

class ShahihBukhariModel extends Model
{
    protected $table = 'shahih_bukhari';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function getShahihBukhariData()
    {
        return $this->findAll();
    }
}
