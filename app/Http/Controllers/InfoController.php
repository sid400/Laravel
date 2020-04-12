<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        return view('Info');
    }
    public function test(Request $request, User $user)
    {
        dd($user);
        return view('Info');
    }
}
