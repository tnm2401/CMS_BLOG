<?php

namespace App\Http\Controllers\BE_Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('BE.page.home');
    }
}
