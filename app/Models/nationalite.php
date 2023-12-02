<?php

namespace App\Models;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nationalite extends Model
{
    use HasFactory;

    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }  
   
}
