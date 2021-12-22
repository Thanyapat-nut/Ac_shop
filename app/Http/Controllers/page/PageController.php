<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('admin.page.index');
    }
    public function about(){
        return view('admin.page.pageabout');
    }
    public function contact(){
        return view('admin.page.pagecontact');
    }
    public function  product1(){
        return view('admin.page.pageproduct1');
    }
    public function product2(){
        return view('admin.page.pageproduct2');
    }
   
    //
}
