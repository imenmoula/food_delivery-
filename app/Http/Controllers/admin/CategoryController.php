<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'admin'=>category::get()
        ]);    
    }
    public function create()
    {
        return view('admin.create');
    }
    ///insert///******* */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'

        ]);
    $imageName=time().'.'.$request->image->extension();
    $request->image->move(public_path('admin'),$imageName);
      $categorie=new category();
      $categorie->image=$imageName;
      $categorie->name=$request->name;
      $categorie->description=$request->description;
      $categorie->save();
      return  back()->withSuccess( 'Categorie ajouter avec succe');

    }
    /*********update ****************** */
    public function edit ($id)
    {
        $categorie=category::where('id',$id)->first();
        return view('admin.edit',['categories'=>$categorie]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000'

        ]);
        $categorie=category::where('id',$id)->first();
        if(isset($request->image)){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('admin'),$imageName);
            $categorie->image=$imageName;
        }
      $categorie->name=$request->name;
      $categorie->description=$request->description;
      $categorie->save();
      return  back()->withSuccess( 'Categorie modifier  avec succe');

    }
    /****************suppression****************** */
    public function destory($id)
    {
        $categorie=category::where('id',$id)->first();
        $categorie->delete();
        return  back()->withSuccess( 'Categorie supprimer  avec succe');
    }
    ////////////////////////////////////////*/
//    public function show($id)
//    {
//     $categorie=category::where('id',$id)->first();
//     return view('admin.show',['categorie'=>$categorie]);

//    }
public function show($id)
{
    $category = category::find($id);

    if (!$category) {
        abort(404); // or handle the case when the category is not found
    }

    return view('admin.show', ['category' => $category]);
}

}
