<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
}
