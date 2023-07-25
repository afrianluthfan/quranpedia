<?php

namespace App\Controllers;

use App\Models\ShahihMuslimModel;

class ShahihMuslimController extends BaseController
{
    public function index()
    {
        $model = new ShahihMuslimModel();
        $shahih = $model->getShahihMuslimData();

        $data = [
            'shahih' => $shahih,
        ];

        return view('page/index', $data);
    }
}
