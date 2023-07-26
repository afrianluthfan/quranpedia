<?php

namespace App\Controllers;

use App\Models\SunanIbnuMajahModel;

class Sunan_Ibnu_Majah extends BaseController
{
    public function index()
    {
        $model = new SunanIbnuMajahModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $maja = $model->paginate(10, 'group6'); // 10 records per page, 'group6' is the pagination group

        // Get the pagination links
        $pager = $model->pager;
    
        $data = [
            'maja' => $maja,
            'pager' => $pager,
        ];

        return view('page/sunan_ibnu_majah_view', $data);
    }
}
