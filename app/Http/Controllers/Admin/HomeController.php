<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view("admin.home.index");
    }


}
