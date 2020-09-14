<header class="clearfix">
    <!-- Bootstrap navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <!-- Logo & advertisement -->
        <div class="logo-advertisement">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ asset('assets/client/images/logo.png') }}" alt=""></a>
                </div>
            </div>
        </div>
        <!-- End Logo & advertisement -->

        <!-- navbar list container -->
        <div class="nav-list-container">
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a class="home" href="{{ route('home.index') }}">Trang chủ</a></li>
                        @foreach($categories as $item)
                            @if(count($item->categories) > 0)
                                <li class="drop"><a class="home" href="{{ route('home.category.index', [$item->slug]) }}">{{ $item->name }}</a>
                                    <ul class="dropdown">
                                        @foreach($item->categories as $sub_item)
                                            <li><a href="{{ route('home.category.index', [$sub_item->slug]) }}">{{ $sub_item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a class="home" href="{{ route('home.category.index', [$item->slug]) }}">{{ $item->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <input type="text" id="search" name="search" placeholder="Search here">
                        <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- End navbar list container -->

    </nav>
    <!-- End Bootstrap navbar -->

</header>
