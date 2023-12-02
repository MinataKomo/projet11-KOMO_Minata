<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function liste_post()
    {
        $posts = Post::all();
        return view('post.liste', compact('posts'));
    }
    public function aj_post()
    {
        $tags = Tag::all();
        return view('post.aj', compact('tags'));
    }
    public function aj_post_traitement(Request $request)
    {
       $request->validate([
        'name'=> 'required',
        'content'=> 'required',
       
        
       ]);
       $post = new Post();
       $post->name = $request -> name;
       $post->content = $request -> content;
      
       
       
       $post->save();

        $tags = $request->tag;

        $post ->tags()->attach($tags);


       return redirect('/aj')->with('status', 'Le post a bien ete ajoute avec succes.');
    }

    public function edit_post($id)
    {

        $tags = Tag::all();
        
        
       
        $posts = Post::find($id);
        return view('post.edit', compact('posts', 'tags'));
    }
    public function edit_post_traitement(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'content'=> 'required',
           
        'tag'=> 'required',
            // 'image_name'=> 'required',
           ]);
           $post = Post::find($request->id);
       $post->name = $request -> name;
       $post->content = $request -> content;
       
       
     
      
       $post->update();

       return redirect('/post')->with('status', "Le post a bien ete modifier avec succes.");

    }

    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post')->with('status', "L\'etudiant a bien ete supprimé avec succes.");
    }
}

