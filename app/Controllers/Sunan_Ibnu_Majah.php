<?php

namespace App\Controllers;

use App\Models\SunanIbnuMajahModel;

class SunanIbnuMajahController extends BaseController
{
    public function index()
    {
        $model = new SunanIbnuMajahModel();
        $maja = $model->getShahihMuslimData();

        $data = [
            'maja' => $maja,
        ];

        return view('page/ibnu_majah_view', $data);
    }
}
