<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user= User::get();
        return view('user.index',compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user= New User;

        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        

        return redirect('user')->withSuccess('Added Successfully');
    }
    
    public function show($slug)
   {
       return view('user', [
           'user' => User::where('slug', '=', $slug)->first()
       ]);
   }

   public function edit($id)
   {
       return view('user.update', [
           'user' => User::find($id)
       ]);
   }

   public function update(Request $request,$id)
    {
        // dd($request->all());
        $user= User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();

        return redirect('user')->withSuccess('Updated Successfully');
    }

   public function delete($id)
   {
      User::destroy($id);
      return redirect()->back()->withSuccess('Deleted Successfully');
   }
}
