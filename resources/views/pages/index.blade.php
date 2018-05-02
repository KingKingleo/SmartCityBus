@extends('layouts.master')

@section('display')
@foreach($details as $detail)
<a href="{{ action('pagesController@show',[$detail->id]) }}"><h3>{{ $detail->location }}</h3></a>
<p>{{ $detail->name }}</p>
@endforeach
@endsection

