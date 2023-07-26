<?php

namespace App\Controllers;

use App\Models\AllKitabModel;

class All_Kitab extends BaseController
{
    public function view()
    {
        // Load the models using dependency injection
        $model = new AllKitabModel();

         // Get the current page from the query string, default to 1 if not set
         $currentPage = $this->request->getVar('page') ?? 1;

         // Fetch records with pagination using the model's paginate() method
         $alld = $model->paginate(10, 'group7'); // 10 records per page, 'group7' is the pagination group
 
         // Get the pagination links
         $pager = $model->pager;
 
         $data = [
             'alld' => $alld,
             'pager'  => $pager,
         ];
         // Load the view file directly without creating a new folder
         return view('page/all_kitab_view', $data);
    }
}
