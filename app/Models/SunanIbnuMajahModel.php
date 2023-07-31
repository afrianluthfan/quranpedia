<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanIbnuMajahModel extends Model
{
    protected $table = 'sunan_ibnu_majah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function paginateFiltered($selectedWord, $perPage = 10, $group = 'default')
    {
        // Filter the rows based on $selectedWord
        $this->where('arab LIKE', "%$selectedWord%");

        // Call the paginate() method with the filtered result set
        return $this->paginate($perPage, $group);
    }

    public function getSunanIbnuMajahData()
    {
        return $this->findAll();
    }
}