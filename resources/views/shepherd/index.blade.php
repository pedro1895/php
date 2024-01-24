@extends('layouts.app')
@section('content')
<H1>Listagem de pastores</H1>
<HR>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Nome do pastor
                </th>
                <th>
                    Data da criação
                </th>
                <th>
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shepherds as $shepherd)
            <tr>
                <td>
                    {{$shepherd->name}}
                </td>
                <td>
                    {{$shepherd->created_at->format('d/m/Y')}}
                </td>
                <td>
                    <a href="{{route('shepherd.edit', $shepherd->id)}}" class="btn btn-outline-dark">Editar</a>
                    <a href="{{route('shepherd.delete', $shepherd->id)}}" class="btn btn-outline-dark">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    <a href="{{route('shepherd.create')}}" class="btn btn-outline-dark">Criar</a>
    
@endsection