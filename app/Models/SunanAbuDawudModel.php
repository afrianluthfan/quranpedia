<?php

namespace App\Models;

use CodeIgniter\Model;

class SunanAbuDawudModel extends Model
{
    protected $table = 'sunan_abu_daud';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];

    public function paginateFiltered($selectedWord, $perPage = 10, $group = 'default')
    {
        // Filter the rows based on $selectedWord
        $this->where('arab LIKE', "%$selectedWord%");

        // Call the paginate() method with the filtered result set
        return $this->paginate($perPage, $group);
    }

    public function getSunanAbuDawudData()
    {
        return $this->findAll();
    }
}