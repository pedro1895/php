<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Shepherd;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ShepherdController extends Controller
{
    function index(): View 
    {
        $shepherds = Shepherd::all();
        return view('shepherd.index', compact('shepherds'));
    }

    function edit($id): View 
    {
        $shepherd = Shepherd::find($id);
        $churches = Church::all();
        return view('shepherd.edit', compact('shepherd', 'churches'));
    }

    function update($id)
    {
        request()->validate(
            [
                'name'=>'required|min:3|max:255'
            ],
            [
                'name.required'=>'O campo nome é obrigatório',
                'name.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'name.max'=>'O tamanho máximo do campo é 255 caracteres'
            ]
        );

        $shepherd = Shepherd::find($id);
        $shepherd->name = request()->name;
        $shepherd->church_id = request()->church;
        $shepherd->save();

        session()->flash('success','Pastor alterado com sucesso');

        return redirect(route('shepherd.index'));
    }

    function save()
    {
        request()->validate(
            [
               'name'=>'required|min:3|max:255'
            ],
            [
                'name.required'=>'O campo nome é obrigatório',
                'name.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'name.max'=>'O tamanho máximo do campo é 255 caracteres'
            ]
        );

        $shepherd = new Shepherd();
        $shepherd->name = request()->name;
        $shepherd->church_id = request()->church;
        $shepherd->save();

        session()->flash('success','Pastor cadastrado com sucesso');

        return redirect(route('shepherd.index'));
    }

    
    function delete($id)
    {

        $shepherd = shepherd::find($id);
        $shepherd->delete();

        session()->flash('success','Pastor removido com sucesso');

        return redirect(route('shepherd.index'));
    }

    function create(): View 
    {
        $churches = Church::all();
        return view('shepherd.create', compact('churches'));
    }
}
