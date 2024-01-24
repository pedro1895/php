@extends('layouts.app')
@section('content')
<h1>Cadastrando</h1>
<form method="POST" action="{{route('shepherd.save')}}">
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
Igreja:
<br/>

<select name="church" class="form-control">
<option></option>
    @foreach($churches as $church) 
    <option value="{{ $church->id }}" > {{ $church->name }} </option> 
    @endforeach
</select>

<br/>
<input type="submit" value="enviar" class="btn btn-outline-primary"/>

<a href="{{route('shepherd.index')}}" class="btn btn-outline-primary"> Cancelar </a>
</form>
@endsection