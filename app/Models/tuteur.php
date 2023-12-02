<?php

namespace App\Models;
use App\Models\Etudiant;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuteur extends Model
{
    use HasFactory;
    
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }  
   
}
