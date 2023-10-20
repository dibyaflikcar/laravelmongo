<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $post= Post::get();
        return view('post.index',compact('post'));
    }

    public function create()
    {
        $user=User::get();
        return view('post.create',compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $post= New Post;
        $post=Post::create(array(
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'body'=>$request->body,
        ));

        // $post->title=$request->title;
        // $post->slug=Str::slug($request->title);
        // $post->body=$request->body;
        // $post->save();
        

        return redirect('post')->withSuccess('Added Successfully');
    }
    
    public function show($slug)
   {
       return view('post', [
           'post' => Post::where('slug', '=', $slug)->first()
       ]);
   }

   public function edit($id)
   {
       return view('post.update', [
           'post' => Post::find($id)
       ]);
   }

   public function update(Request $request,$id)
    {
        // dd($request->all());
        $post= Post::find($id);
        $post->title=$request->title;
        $post->slug=Str::slug($request->title);
        $post->body=$request->body;
        $post->save();

        return redirect('post')->withSuccess('Updated Successfully');
    }

   public function delete($id)
   {
      Post::destroy($id);
      return redirect()->back()->withSuccess('Deleted Successfully');
   }
}
