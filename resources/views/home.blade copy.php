@extends('layouts.app')

@section('content')

<img src="{{asset('img/jumbotron.jpg')}}" class="jumbotron" />
<section class="container">
    <h2>Current Series</h2>
    <div class="comics_cards row">

        @foreach($comics as $comic)

        <div class="comics_card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
            <p>{{ $comic['title'] }}</p>
        </div>
        <!-- /.comics_card -->

        @endforeach
    </div>
    <!-- /.comics_cards -->

    <p class="load_more">Load more</p>
</section>
<!-- /.container -->

<div class="row_cards">
    <ul>
        <li>
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital comics" />
            <p>Digital comics</p>
        </li>
        <li>
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="DC merchandise" />
            <p>DC merchandaise</p>
        </li>
        <li>
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Subscription" />
            <p>Subscription</p>
        </li>
        <li>
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Comic shop locator" />
            <p>Comic shop locator</p>
        </li>
        <li>
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="DC power visa" />
            <p>DC power visa</p>
        </li>
    </ul>
</div>
<!-- /.row_cards -->

@endsection