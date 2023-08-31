<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class indexController extends Controller
{
    function alldata(){

       $data = test::all();

        return response()->json($data);

    }//end

    function index(){

        return view('index');
    }
}
