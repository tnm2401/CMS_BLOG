<?php

namespace App\Http\Controllers\BE_Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('BE.page.home');
    }
}
