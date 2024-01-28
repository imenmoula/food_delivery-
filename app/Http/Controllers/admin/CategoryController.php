<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=category::all();
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    ///insert///******* */
    public function store(Request $request)
    {
      
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
            ]);
    
           
    
            $categorie = new Category();
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('assets/uploads/categories/',$filename);
                $categorie->image = $filename;
            }
           
            $categorie->name = $request->input('name');
            $categorie->description = $request->input('description');
            $categorie->save();
    
            return redirect()->route('admin.category.create')->with('success', 'Catégorie ajoutée avec succès');
        } catch (\Exception $e) {
            
            Log::error('Error saving category: ' . $e->getMessage());
            return redirect()->back()->withErrors([
                'error' => 'Une erreur s\'est produite lors de l\'enregistrement de la catégorie.'
            ]);
    }
    }

    


    
    /*********update ****************** */
    public function edit ($id)
    {
        $categorie=category::where('id',$id)->first();
        return view('admin.category.edit',['categories'=>$categorie]);
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
      return  redirect()->route('admin.category.index')->withSuccess( 'Categorie modifier  avec succe');

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
public function show($id){
    return view('admin.category.show', compact('category'));
}

}
