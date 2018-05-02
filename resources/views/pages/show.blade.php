@extends('layouts.master')

@section('content')
<h2>{{ $id->location }}</h2>
<p>{{ $id->name }}</p>
<p>{{ $id->phone }}</p>
<p>{{ $id->organization }}</p>
<p>{{ $id->email }}</p>
<a href="{{ action('pagesController@index',[$id->location]) }}"><h3>Back home</h3></a>
@endsection