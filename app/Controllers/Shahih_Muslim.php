<?php

namespace App\Controllers;

use App\Models\ShahihMuslimModel;

class Shahih_Bukhari extends BaseController
{
    public function view()
    {
        // Load the ShahihBukhariModel using dependency injection
        $model = new ShahihMuslimModel();

        // Get the current page from the query string, default to 1 if not set
        $currentPage = $this->request->getVar('page') ?? 1;

        // Fetch records with pagination using the model's paginate() method
        $musl = $model->paginate(10, 'group2'); // 10 records per page, 'group1' is the pagination group

        // Get the pagination links
        $pager = $model->pager;

        $data = [
            'musl' => $musl,
            'pager'  => $pager,
        ];
        // Load the view file directly without creating a new folder
        return view('page/shahih_muslim_view', $data);
    }
}
