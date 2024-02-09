<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Log;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        
        return view('admin.user.index',compact('user'));
    }
    public function show($id)
    {
        $user=User::find($id);
        return view('admin.User.show')->with('user',$user);
    }
    public function create()
    {
        $user=User::all();
        return view('admin.User.create' , compact('user'));
    }
    public function store(Request $request)
    {
        try{
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'phone' => 'required|string',
            'adresse' => 'required|string|max:255',
            'role' => 'required|string|in:user,admin,livreur|max:255',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); 
        $user->phone = $request->input('phone');
        $user->adresse = $request->input('adresse');
        $user->role = $request->input('role');
        $user->save();
    
        return redirect()->route('admin.User.create')->withSuccess('success', 'Utilisateur ajouté avec succès');
    }catch(\Exception $e){
        
        return redirect()->route('admin.User.create')->with('error', 'Une erreur est survenue');
    }
    }
    public function edit($id)
    {
      $user=User::where('id',$id)->first();  
      return view('admin.User.edit',['user'=>$user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'phone' => 'required|string',
            'adresse' => 'required|string|max:255',
            'role' => 'required|string|in:user,admin,livreur|max:255',
        ]);
        $user=User::where('id',$id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');
        $user->adresse = $request->input('adresse');
        $user->role = $request->input('role');
        $user->save();
        return redirect()->route('admin.User.edit',$user->id)->withSuccess('success', 'Utilisateur modifié avec succès');
    }
    public function destroy($id)
    {
        $user=User::where('id',$id)->first();
        $user->delete();
        return  back()->withSuccess('Utilisateur supprimer  avec succe');
    }

    
}
