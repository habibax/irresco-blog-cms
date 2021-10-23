<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class testController extends Controller
{
    public function test()
    {
        $testcat=new category;
        $testcat->name='asghar';
        $testcat->description='asghar is a bitch';
        $testcat->save();
        echo 'data saved successfully';
    }
}
