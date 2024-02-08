<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Menu;


class FrontController extends Controller
{
    public function index(Request $request)
    {  $menu=Menu::with('category')->get();
        $categories= Category::with('menu')->get();
        
 
        return view('front.index',compact('menu','categories'));
        
    }
    public function detailMenu($id)
    {
        $menu=Menu::find($id);
       
        return view('front.includes.detailMenu',compact('menu')); 
    }
    

}
