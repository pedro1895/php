<?php

namespace App\Http\Controllers;

use App\Models\Church;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends Controller
{
   public function index(){
    
      return view('home.index');


        // Church::destroy(2);

        /*
        $church = Church::find(1);
        $church->name='Fabio';
        $church->save();
        */

        /*
        $church = new Church();
        $church->name='Adriano';
        $church->save();
        */
        

        //$churches = Church::where('name', '<>', 'Fabio')->paginate(5);
        //$churches = Church::paginate(5);
        //return view('churches', compact('churches'));
        //return Church::all();
   }
}