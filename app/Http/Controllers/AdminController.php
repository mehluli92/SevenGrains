<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* this controller shall be used to manage the admin pages display*/
    public function index()
    {
        return view('admin/adminDashboard');
    }
}
