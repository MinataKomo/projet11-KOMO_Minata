<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function liste_tag()
    {
      
        $tags = Tag::all();
        return view('tag.liste', compact('tags'));
    }
    public function ajout_tag()
    {
        $posts = Post::all();
        return view('tag.ajout', compact('posts'));
    }
    public function ajout_tag_traitement(Request $request)
    {
       $request->validate([
        'name'=> 'required',
        'post'=> 'required',
        
       ]);
       $tag = new Tag();
       $tag->name = $request -> name;
       
       
       $tag->save();


       return redirect('/ajout')->with('status', 'Le tag a bien ete ajoute avec succes.');
    }
}
