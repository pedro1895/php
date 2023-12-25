@extends('layouts.app')
@section('content')
<h1>Cadastrando</h1>
<form method="POST" action="{{route('church.save')}}">
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
<input type="text" name="name" value="" class="form-control" />
<br/>
<input type="submit" value="enviar" class="btn btn-outline-primary"/>
</form>
@endsection