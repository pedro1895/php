@extends('layouts.app')
@section('content')
<h1>Editando: {{$church->name}}</h1>
<form method="POST" action="{{route('church.update',$church->id)}}">
    @csrf
   

    @if(!$errors->isEmpty())

        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>

    @endif

Nome:
<br/>
<input type="text" name="name" value="{{$church->name}}" class="form-control" />
<br/>
Apelido:
<br/>
<input type="text" name="nickname" value="{{$church->nickname}}" class="form-control" />
<br/>
<input type="submit" value="enviar" class="btn btn-outline-primary"/>

<a href="{{route('church.index')}}" class="btn btn-outline-primary"> Cancelar </a>
</form>
@endsection