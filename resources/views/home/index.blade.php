@extends('layouts.app')
@section('content')
<H1>Home Page</H1>
<a href="{{route('church.index')}}" class="btn btn-outline-primary"> Listagem de igrejas </a>
<a href="{{route('shepherd.index')}}" class="btn btn-outline-primary"> Listagem de pastores </a>
@endsection