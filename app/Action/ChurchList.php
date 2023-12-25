<?php

namespace App\Action;

use App\Models\Church;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ChurchList
{
   public function run(){
    
        $churches = Church::paginate(5);
        return view('churches', compact('churches'));

   }
}