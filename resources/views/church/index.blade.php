@extends('layouts.app')
@section('content')
<H1>Listagem de igrejas</H1>
<HR>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Nome da igreja
                </th>
                <th>
                    Apelido da igreja
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
            @foreach ($churches as $church)
            <tr>
                <td>
                    {{$church->name}}
                </td>
                <td>
                    {{$church->nickname}}
                </td>
                <td>
                    {{$church->created_at->format('d/m/Y')}}
                </td>
                <td>
                    <a href="{{route('church.edit', $church->id)}}" class="btn btn-outline-dark">Editar</a>
                    <a href="{{route('church.delete', $church->id)}}" class="btn btn-outline-dark">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    <a href="{{route('church.create')}}" class="btn btn-outline-dark">Criar</a>
    
@endsection