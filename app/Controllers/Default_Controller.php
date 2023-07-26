<?php

namespace App\Controllers;

class Default_Controller extends BaseController
{
    public function index()
    {
        return view('page/index');
    }
}
