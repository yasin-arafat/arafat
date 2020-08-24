<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
    	return view('admin.catagory.list');
    }

    public function create()
    {
    	return view('admin.catagory.create');
    }

    public function edit()
    {
    	return view('admin.catagory.edit');
    }
}
