<?php

namespace App\Controllers;

use App\Models\SunanTirmidziModel;

class Sunan_Tirmidzi extends BaseController
{
    public function view()
    {
        // Load the TirmidziModel using dependency injection
        $model = new SunanTirmidziModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $tirm = $model->paginate(10, 'group3'); // 10 records per page, 'group4' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'tirm' => $tirm,
            'pager'  => $pager,
        ];
        // Load the view file directly without creating a new folder
        return view('page/sunan_tirmidzi_view', $data);
    }
}
