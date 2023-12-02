<?php

namespace App\Models;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe_sanguin extends Model
{
    use HasFactory;

    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }  
   
}
