@extends('layouts/simple')

@section('content')
    @foreach($entries as $entry)
        <a href='#'> {{$entry->term}} </a>
    @endforeach
@endsection