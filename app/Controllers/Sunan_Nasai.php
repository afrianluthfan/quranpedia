<?php

namespace App\Controllers;

use App\Models\SunanNasaiModel;

class Sunan_Nasai extends BaseController
{
    public function view()
    {
        // Load the TirmidziModel using dependency injection
        $model = new SunanNasaiModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $nasa = $model->paginate(10, 'group4'); // 10 records per page, 'group4' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'nasa' => $nasa,
            'pager'  => $pager,
        ];
        // Load the view file directly without creating a new folder
        return view('page/sunan_nasai_view', $data);
    }
}
