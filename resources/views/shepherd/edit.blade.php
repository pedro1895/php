@extends('layouts.app')
@section('content')
<h1>Editando: {{$shepherd->name}}</h1>
<form method="POST" action="{{route('shepherd.update',$shepherd->id)}}">
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
<input type="text" name="name" value="{{$shepherd->name}}" class="form-control" />
<br/>
<select name="church" class="form-control">
    <option></option>
        @foreach($churches as $church) 
        <option value="{{ $church->id }}" {!! ($shepherd->church_id == $church->id ? "selected=\"selected\"" : "") !!}> {{ $church->name }}</option>
        @endforeach
    </select>
<input type="submit" value="enviar" class="btn btn-outline-primary"/>

<a href="{{route('shepherd.index')}}" class="btn btn-outline-primary"> Cancelar </a>
</form>
@endsection