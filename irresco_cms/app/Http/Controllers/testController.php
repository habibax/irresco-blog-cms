<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class testController extends Controller
{
    public function test()
    {
        return view('test');
//        return SubCategory::find(7)->getPosts;
    }
}
