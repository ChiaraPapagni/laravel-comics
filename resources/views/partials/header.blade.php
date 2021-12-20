<header id="site_header">
    <div class="top_header">
        <div class="container">
            <p>Dc power visa &reg;</p>
            <p>Additional Dc sites</p>
        </div>
    </div>
    <!-- /.top_header -->

    <nav class="navbar container">
        <a href="/">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC Comics" class="logo" />
        </a>

        <ul>
            @foreach(config('db.menu') as $item)
            <li>
                @if ($loop->last)
                <a href="{{ route($item['href']) }}"
                    class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">
                    {{ $item['text']}}
                    <img src="{{asset('img/down-menu.png')}}">
                </a>
                @else
                <a href="{{ route($item['href']) }}"
                    class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">
                    {{ $item['text']}}
                </a>
                @endif
            </li>
            @endforeach
        </ul>

        <div class="search">
            <p>Search</p>
            <img src="{{asset('img/search.png')}}">
        </div>
    </nav>
    <!-- /.navbar -->

</header>
<!-- /#site_header -->

@include('partials.jumbotron')
<!-- /jumbotron -->