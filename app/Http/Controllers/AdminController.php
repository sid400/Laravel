<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends MainController
{
    public function addNews()
    {
        self::CollectTmpl('admin/news/addNews');
    }
}
