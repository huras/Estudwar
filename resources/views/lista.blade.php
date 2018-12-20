@extends('layouts/simple')

@section('content')
    <h1> Lista </h1>
    @foreach($entries as $entry)
        <a href='#'> {{$entry->term}} </a><br>
    @endforeach
@endsection