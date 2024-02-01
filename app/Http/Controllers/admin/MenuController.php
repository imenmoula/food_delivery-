<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
    //    $resl['data']=Menu::all();
    //    return view('admin.plats.index',$resl);


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id='')
    {
        $categories=Category::all();
        $menu=Menu::all();
        return view('admin.plats.create',compact('categories','menu'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(Request $request)
     {
        try{
            $validatedData = $request->validate([
                'nom_plat' => 'required|string',
                'description' => 'required|string',
                'prix' => 'required|numeric',
                'qty' => 'required|integer',
                'disponible' => 'boolean',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        $menu=new Menu($validatedData);
        $menu->nom_plat=$request->nom_plat;
        $menu->description=$request->description;
        $menu->prix=$request->prix;
        $menu->qty=$request->qty;
        $menu->disponible=$request->disponible==true ? 1 : 0;
        $menu->category_id=$request->category_id;
        $image=$request->image;
        $imgname=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/uploads/menus/',$imgname);
        $menu->image=$imgname;
        $menu->save();

     return redirect()->route('admin.plats.create')->withSuccess('Plat ajoute avec succes');
        }catch (\Illuminate\Validation\ValidationException $validationException) {
            return redirect()->route('admin.plats.create')->withError($validationException->getMessage());
        } catch (\Exception $e) {
            return redirect()->route('admin.plats.create')->withError($e->getMessage());
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
        $menu=Menu::find($id);
       
        return view('admin.plats.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=menu::find($id);
        $categories=Category::all();

        return  view('admin.plats.edit',compact('menu','categories'));
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
        try{
        $menu=Menu::find($id);
        $menu->nom_plat=$request->nom_plat;
        $menu->description=$request->description;
        $menu->prix=$request->prix;
        $menu->qty=$request->qty;
        $menu->disponible=$request->disponible==true ? 1 : 0;
        $menu->category_id=$request->category_id;
        $image = $request->image;
        if($image)
        {
        $imgname=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('assets/uploads/menus/',$imgname);
           $menu->image = $imgname;
        }
        
        $menu->save();
        return redirect()->route('admin.plats.edit',$menu->id)->withSuccess('plats modifier  avec succe');
    }catch (\Illuminate\Validation\ValidationException $validationException) {
        return redirect()->route('admin.plats.edit')->withError($validationException->getMessage());
    } catch (\Exception $e) {
        return redirect()->route('admin.plats.edit')->withError($e->getMessage());
    }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        return  redirect()->back()->withSuccess('plats supprimer  avec succe');
    }

}