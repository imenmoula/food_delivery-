<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $menu=Menu::with('category')->get();
       $categories= Category::with('menu')->get();
       
       return view('admin.plats.index',compact('menu','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




     public function store(Request $request)
     {
         $request->validate([
             'nom_plat' => 'required|string|max:255',
             'description' => 'nullable|string',
             'prix' => 'required|numeric',
             'qty' => 'required|integer',
             'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:10000',
             'disponible' => 'boolean',
             'category_ids' => 'required|array',
             'category_ids.*' => 'exists:categories,id',
         ]);
     
         try {
             $img = time() . '.' . $request->image->extension();
             $request->image->move(public_path('plats'), $img);
     
             $menu = new Menu();
             $menu->nom_plat = $request->nom_plat;
             $menu->description = $request->description;
             $menu->prix = $request->prix;
             $menu->qty = $request->qty;
             $menu->image = $img;
             $menu->disponible = $request->disponible ?? true;
             $menu->save();
     
             // Attach the menu item to the selected categories
             $menu->categories()->attach($request->category_ids);
     
             // Retrieve the names of the associated categories
             $categoryNames = $menu->categories->pluck('name')->implode(', ');
     
             // Use validator() function instead of $request->validator
             if (Validator::fails()) {
                 return back()->withErrors(Validator::errors())->withInput();
             } else {
                 // Fix the success message to include category names
                 return back()->withSuccess("Plat ajouté avec succès. Catégories associées : $categoryNames");
             }
     
         } catch (\Exception $e) {
             dd($e->getMessage());
         }
     }
     


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}