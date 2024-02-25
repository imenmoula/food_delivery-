<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\contact;
use App\Models\Menu;
use App\Models\User;

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
  public function view($id)
  {
    $categories= Category::with('menu')->get();
     $menu=Menu::with('category')->get();


    return view('front.includes.menu',compact('menu','categories'));
  }
    public function Apropos()
    {
      return view ('front.includes.Apropos');
    }
    public function contactUs()
    {


      return view('front.includes.contactUs');
    }
    public function store(Request $request)
    {
      
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required',

            ]);
            $c= new contact();
           
            $c->name = $request->input('name');
            $c->email = $request->input('message');
            $c->sujet = $request->input('sujet');
          

            $c->save();
    
            return redirect()->route('admin.category.create')->with('success', 'Catégorie ajoutée avec succès');
        } catch (\Exception $e) {
            
            Log::error('Error saving category: ' . $e->getMessage());
            return redirect()->back()->withErrors([
                'error' => 'Une erreur s\'est produite lors de l\'enregistrement de la catégorie.'
            ]);
    }
    }

}
