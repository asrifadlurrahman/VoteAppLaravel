<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahUserController extends Controller
{
    public function index(){
        return view('adminTambahUser');
    }
}
