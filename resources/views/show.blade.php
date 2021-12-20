@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<div class="comics_card">
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
    <p>{{ $comic['series'] }}</p>
</div>
@endsection