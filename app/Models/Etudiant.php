<?php

namespace App\Models;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\Groupe_sanguin;
use App\Models\Etudiant;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'prenom',
        'class',
        'image',
        // 'image_name'
    ];
    public function image()
    {
       return $this->hasOne(Image::class);
    }
    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class);
    }
    public function groupe_sanguin()
    {
        return $this->belongsTo(groupe_sanguin::class);
    }
}
