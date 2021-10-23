<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class testController extends Controller
{
    public function test()
    {
        return Category::find(7)->getSubCategories;
    }
}
