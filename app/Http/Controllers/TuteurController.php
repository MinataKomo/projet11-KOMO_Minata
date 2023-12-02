<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tuteur;
use App\Models\Etudiant;

class TuteurController extends Controller
{
    //
    public function liste_tuteur()
    {
        $tuteurs = Tuteur::all();
        return view('tuteur.liste', compact('tuteurs'));
    }
    public function add_tuteur()
    {
        return view('tuteur.add');
    }
    public function add_tuteur_traitement(Request $request)
    {
       $request->validate([
        'name'=> 'required',
        'last'=> 'required',
        'profession'=> 'required',
        'contact'=> 'required',
       ]);
       $tuteur = new Tuteur();
       $tuteur->name = $request -> name;
       $tuteur->last = $request -> last;
       $tuteur->profession = $request -> profession;
       $tuteur->contact = $request -> contact;
       $tuteur->save();


       return redirect('/add')->with('status', 'L\'tuteur a bien ete ajoute avec succes.');
    }
    public function editer_tuteur($id)
    {
        $tuteurs = Tuteur::find($id);
        return view('tuteur.editer', compact('tuteurs'));
    }
    
    public function editer_tuteur_traitement(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'last'=> 'required',
            'profession'=> 'required',
            'contact'=> 'required',
            // 'image_name'=> 'required',
           ]);
           $tuteur = Tuteur::find($request->id);
       $tuteur->name = $request -> name;
       $tuteur->last = $request -> last;
       $tuteur->profession = $request -> profession;
       $tuteur->contact = $request -> contact;
       $tuteur->update();

       return redirect('/tuteur')->with('status', "L\'tuteur a bien ete modifier avec succes.");

    }
    public function delete_tuteur($id)
    {
        
        $tuteur = tuteur::find($id);
       
        $tuteur->delete();
       
        return redirect('/tuteur')->with('status', "L\'tuteur a bien ete supprimé avec succes.");
    }
}
