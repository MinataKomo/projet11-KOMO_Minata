<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\Tuteur;
use App\Models\Groupe_sanguin;
use App\Models\Nationalite;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupe_sanguins = Groupe_sanguin::all();
        
        return view('etudiant.ajouter', compact('tuteurs', 'villes', 'nationalites', 'groupe_sanguins'));
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
       $request->validate([
        'nom'=> 'required',
        'prenom'=> 'required',
        'classe'=> 'required',
        'image'=> 'required',
        'tuteur'=> 'required',
        'ville'=> 'required',
        'nationalite'=> 'required',
        'groupe_sanguin'=> 'required',
        
       ]);
       $etudiant = new Etudiant();
       $etudiant->nom = $request -> nom;
       $etudiant->prenom = $request -> prenom;
       $etudiant->classe = $request -> classe;
       $etudiant->image = $request -> image;
       $etudiant->tuteur_id = $request -> tuteur;
       $etudiant->ville_id = $request -> ville;
       $etudiant->nationalite_id = $request -> nationalite;
       $etudiant->groupe_sanguin_id = $request -> groupe_sanguin;
      
       $etudiant->save();


       return redirect('/ajouter')->with('status', 'L\'etudiant a bien ete ajoute avec succes.');
    }
    public function update_etudiant($id)
    {

        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalites = Nationalite::all();
        $groupe_sanguins = Groupe_sanguin::all();
        
       
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants', 'tuteurs', 'villes', 'nationalites', 'groupe_sanguins'));
    }
    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'classe'=> 'required',
            'image'=> 'required',
            'tuteur'=> 'required',
        'ville'=> 'required',
        'nationalite'=> 'required',
        'groupe_sanguin'=> 'required',
            // 'image_name'=> 'required',
           ]);
           $etudiant = Etudiant::find($request->id);
       $etudiant->nom = $request -> nom;
       $etudiant->prenom = $request -> prenom;
       $etudiant->classe = $request -> classe;
       $etudiant->image = $request -> image;
       $etudiant->tuteur_id = $request -> tuteur;
       $etudiant->ville_id = $request -> ville;
       $etudiant->nationalite_id = $request -> nationalite;
       $etudiant->groupe_sanguin_id = $request -> groupe_sanguin;
      
       $etudiant->update();

       return redirect('/etudiant')->with('status', "L\'etudiant a bien ete modifier avec succes.");

    }

    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', "L\'etudiant a bien ete supprimé avec succes.");
    }
}
