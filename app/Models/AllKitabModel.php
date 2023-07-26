<?php

namespace App\Models;

use CodeIgniter\Model;

class AllKitabModel extends Model
{
    protected $table1 = 'shahih_bukhari';
    protected $table2 = 'shahih_muslim';
    protected $table3 = 'sunan_tirmidzi';
    protected $table4 = 'sunan_nasai';
    protected $table5 = 'sunan_abu_daud';
    protected $table6 = 'sunan_ibnu_majah';
    protected $allowedFields = ['kitab', 'arab', 'terjemah'];
    protected $returnType = 'array';

    public function getAllKitabData()
    {
        $db = \Config\Database::connect();
        // Load the Query Builder
        $builder = $this->db->table($this->table1);
        $builder->select('kitab, arab, terjemah');
        $bukhariData = $builder->get()->getResultArray();

        $builder->resetQuery();

        $builder = $this->db->table($this->table2);
        $builder->select('kitab, arab, terjemah');
        $muslimData = $builder->get()->getResultArray();

        $builder->resetQuery();

        $builder = $this->db->table($this->table3);
        $builder->select('kitab, arab, terjemah');
        $tirmidziData = $builder->get()->getResultArray();

        $builder->resetQuery();

        $builder = $this->db->table($this->table4);
        $builder->select('kitab, arab, terjemah');
        $nasaiData = $builder->get()->getResultArray();

        $builder->resetQuery();

        $builder = $this->db->table($this->table5);
        $builder->select('kitab, arab, terjemah');
        $abuDawudData = $builder->get()->getResultArray();

        $builder->resetQuery();

        $builder = $this->db->table($this->table6);
        $builder->select('kitab, arab, terjemah');
        $ibnuMajahData = $builder->get()->getResultArray();

        // Merge all data into a single array
        $allData = array_merge($bukhariData, $muslimData, $tirmidziData, $nasaiData, $abuDawudData, $ibnuMajahData);

        return $allData;
    }
}
