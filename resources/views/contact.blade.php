@extends('layouts.app')
@section('content')
    <h1>contact Page here</h1>
    @if(count($people))
    <ul>
        @foreach ($people as $person )
        <li>{{$person}}</li>
        @endforeach
    @endif
@stop