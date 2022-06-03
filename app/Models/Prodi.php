<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    public function fakultas(){
        // one to one relationship 
        // 1 prodi memiliki 1 fakultas
        return $this->belongsTo('App\Models\Fakultas');
    }
}
