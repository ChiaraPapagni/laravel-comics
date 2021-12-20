@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<div class="comic_detail">
    <div class="poster_wrapper">
        <div class="container">
            <div class="poster_image">
                <img src="{{$comic['thumb']}}">
                <div class="poster_info">
                    <p class="comic_type">{{$comic['type']}}</p>
                    <p class="comic_view">View gallery</p>
                </div>
            </div>
            <!-- /.poster_image -->
        </div>
    </div>

    <div class="info container">
        <div class="comic_info">
            <h1>{{$comic['title']}}</h1>
            <div class="table">
                <div class="comic_price">
                    <p><span class="light_green">U.S. Price: </span>{{$comic['price']}}</p>
                    <p class="light_green">AVAILABLE</p>
                </div>
                <div class="comic_availability">
                    Check Availability
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>

        <div class="adv">
            <p>Advertisement</p>
            <img src="{{asset('img/adv.jpg')}}">
        </div>
        <!-- /.adv -->
    </div>
    <!-- /.comic_info -->

    <div class="more_details">
        <div class="container">
            <div class="col">
                <h3>Talent</h3>
                <div class="artists">
                    <p>Art by:</p>
                    <div class="artist">
                        @foreach($comic['artists'] as $artist)
                        @if($loop->last)
                        <span>{{$artist}}</span>
                        @else
                        <span>{{$artist}}</span>,
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="writers">
                    <p>Written by:</p>
                    <div class="writer">
                        @foreach($comic['writers'] as $writer)
                        @if($loop->last)
                        <span>{{$writer}}</span>
                        @else
                        <span>{{$writer}}</span>,
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Specs</h3>
                <div class="series">
                    <p>Series:</p>
                    <span>{{$comic['series']}}</span>
                </div>
                <div class="us_price">
                    <p>U.S. Price:</p>
                    <span>{{$comic['price']}}</span>
                </div>
                <div class="on_sale">
                    <p>On Sale Date:</p>
                    <span>{{$comic['sale_date']}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.details -->
</div>
<!-- /.comic -->

@include('partials.buy')

@endsection