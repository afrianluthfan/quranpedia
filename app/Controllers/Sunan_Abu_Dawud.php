<?php

namespace App\Controllers;

use App\Models\SunanAbuDawud;
use App\Models\SunanAbuDawudModel;

class Sunan_Abu_Dawud extends BaseController
{
    public function view()
    {
        // Load the TirmidziModel using dependency injection
        $model = new SunanAbuDawudModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $abud = $model->paginate(10, 'group5'); // 10 records per page, 'group5' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'abud' => $abud,
            'pager'  => $pager,
        ];
        // Load the view file directly without creating a new folder
        return view('page/sunan_abu_dawud_view', $data);
    }
}
