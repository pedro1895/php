<?php

namespace App\Http\Controllers;

use App\Models\Church;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChurchController extends Controller
{
    function index(): View 
    {
        $churches = Church::all();
        return view('church.index', compact('churches'));
    }

    function edit($id): View 
    {
        $church = Church::find($id);
        return view('church.edit', compact('church'));
    }

    function update($id)
    {
        request()->validate(
            [
                'name'=>'required|min:3|max:255',
                'nickname'=>'required|min:3|max:50'
            ],
            [
                'name.required'=>'O campo nome é obrigatório',
                'name.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'name.max'=>'O tamanho máximo do campo é 255 caracteres',
                'nickname.required'=>'O campo apelido é obrigatório',
                'nickname.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'nickname.max'=>'O tamanho máximo do campo é 50 caracteres'
            ]
        );

        $church = Church::find($id);
        $church->name = request()->name;
        $church->nickname = request()->nickname;
        $church->save();

        session()->flash('success','Igreja alterada com sucesso');

        return redirect(route('church.index'));
    }

    function save()
    {
        request()->validate(
            [
               'name'=>'required|min:3|max:255',
               'nickname'=>'required|min:3|max:50'
            ],
            [
                'name.required'=>'O campo nome é obrigatório',
                'name.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'name.max'=>'O tamanho máximo do campo é 255 caracteres',
                'nickname.required'=>'O campo apelido é obrigatório',
                'nickname.min'=>'O tamanho mínimo do campo é 3 caracteres',
                'nickname.max'=>'O tamanho máximo do campo é 50 caracteres'

            ]
        );

        $church = new Church();
        $church->name = request()->name;
        $church->nickname = request()->nickname;
        $church->save();

        session()->flash('success','Igreja cadastrada com sucesso');

        return redirect(route('church.index'));
    }

    
    function delete($id)
    {

        $church = Church::find($id);
        $church->delete();

        session()->flash('success','Igreja removida com sucesso');

        return redirect(route('church.index'));
    }

    function create(): View 
    {
        return view('church.create');
    }
}
