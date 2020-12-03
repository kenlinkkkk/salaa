@extends('layouts.app')
@section('title')
    <title>Trang chủ | SNews</title>
@endsection
@section('heading-news')
    <section class="heading-news">

        <div class="iso-call heading-news-box">

            <div class="news-post image-post default-size">
                <img src="{{ asset('/uploads/home/h1_1_'. $heading_news[0]->picture) }}" alt="{{ $heading_news[0]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[0]->category->slug]) }}">{{ $heading_news[0]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[0]->category->slug, $heading_news[0]->slug]) }}">{{ $heading_news[0]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[0]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[0]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="image-slider snd-size">
                <span class="top-stories">TIN NỔI BẬT</span>
                <ul class="bxslider">
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset('uploads/home/h2_1_'. $heading_news[1]->picture) }}" alt="{{ $heading_news[1]->title }}">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category.index', [$heading_news[1]->category->slug]) }}">{{ $heading_news[1]->category->name }}</a>
                                    <h2><a href="{{ route('home.category.post', [$heading_news[1]->category->slug, $heading_news[1]->slug]) }}">{{ $heading_news[1]->title }}</a></h2>
                                    <ul class="post-tags">
{{--                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[1]->created_at)) }}</li>--}}
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[1]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[1]->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset('uploads/home/h2_1_'. $heading_news[2]->picture) }}" alt="{{ $heading_news[2]->title }}">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category.index', [$heading_news[2]->category->slug]) }}">{{ $heading_news[2]->category->name }}</a>
                                    <h2><a href="{{ route('home.category.post', [$heading_news[2]->category->slug, $heading_news[2]->slug]) }}">{{ $heading_news[2]->title }}</a></h2>
                                    <ul class="post-tags">
{{--                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[2]->created_at)) }}</li>--}}
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[2]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[2]->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset('uploads/home/h2_1_'. $heading_news[3]->picture) }}" alt="{{ $heading_news[3]->title }}">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category.index', [$heading_news[3]->category->slug]) }}">{{ $heading_news[3]->category->name }}</a>
                                    <h2><a href="{{ route('home.category.post', [$heading_news[3]->category->slug, $heading_news[3]->slug]) }}">{{ $heading_news[3]->title }}</a></h2>
                                    <ul class="post-tags">
{{--                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[3]->created_at)) }}</li>--}}
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[3]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[3]->view_count }}</li>
                                    </ul>
                                    <p>{{ $heading_news[3]->description }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset('uploads/home/h2_1_'. $heading_news[4]->picture) }}" alt="{{ $heading_news[4]->title }}">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category.index', [$heading_news[4]->category->slug]) }}">{{ $heading_news[4]->category->name }}</a>
                                    <h2><a href="{{ route('home.category.post', [$heading_news[4]->category->slug, $heading_news[4]->slug]) }}">{{ $heading_news[4]->title }}</a></h2>
                                    <ul class="post-tags">
{{--                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[4]->created_at)) }}</li>--}}
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[4]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[4]->view_count }}</li>
                                    </ul>
                                    <p>{{ $heading_news[4]->description }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[5]->picture) }}" alt="{{ $heading_news[5]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[5]->category->slug]) }}">{{ $heading_news[5]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[5]->category->slug, $heading_news[5]->slug]) }}">{{ $heading_news[5]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[5]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[5]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[6]->picture) }}" alt="{{ $heading_news[6]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[6]->category->slug]) }}">{{ $heading_news[6]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[6]->category->slug, $heading_news[6]->slug]) }}">{{ $heading_news[6]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[6]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[6]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[7]->picture) }}" alt="{{ $heading_news[7]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[7]->category->slug]) }}">{{ $heading_news[7]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[7]->category->slug, $heading_news[7]->slug]) }}"{{ $heading_news[7]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[7]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[7]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[8]->picture) }}" alt="{{ $heading_news[8]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[8]->category->slug]) }}">{{ $heading_news[8]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[8]->category->slug, $heading_news[8]->slug]) }}">{{ $heading_news[8]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[8]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[8]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[9]->picture) }}" alt="{{ $heading_news[9]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[9]->category->slug]) }}">{{ $heading_news[9]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[9]->category->slug, $heading_news[9]->slug]) }}">{{ $heading_news[9]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[9]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[9]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[10]->picture) }}" alt="{{ $heading_news[10]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[10]->category->slug]) }}">{{ $heading_news[10]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[10]->category->slug, $heading_news[10]->slug]) }}">{{ $heading_news[10]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[10]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[10]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset('uploads/home/h1_1_'. $heading_news[11]->picture) }}" alt="{{ $heading_news[11]->title }}">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category.index', [$heading_news[11]->category->slug]) }}">{{ $heading_news[11]->category->name }}</a>
                        <h2><a href="{{ route('home.category.post', [$heading_news[11]->category->slug, $heading_news[11]->slug]) }}">{{ $heading_news[11]->title }}</a></h2>
{{--                        <ul class="post-tags">--}}
{{--                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[11]->created_at)) }}</span></li>--}}
{{--                        </ul>--}}
                        <p>{{ $heading_news[11]->description }}</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@section('content')
    <section class="features-today">
        <div class="container">

            <div class="title-section">
                <h1><span>Tin tức trong ngày</span></h1>
            </div>

            <div class="features-today-box owl-wrapper">
                <div class="owl-carousel" data-num="4">
                    @foreach($breaking_news as $item)
                        <div class="item news-post standard-post">
                            <div class="post-gallery">
                                <img src="{{ asset('uploads/home/st_1_'. $item->picture) }}" alt="{{ $item->title }}">
                                <a class="category-post world" href="{{ route('home.category.index', [$item->category->slug]) }}">{{ $item->category->name }}</a>
                            </div>
                            <div class="post-content">
                                <h2><a href="{{ route('home.category.post',[$item->category->slug, $item->slug]) }}">{{ $item->title }}</a></h2>
                                <ul class="post-tags">
{{--                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($item->created_at)) }}</li>--}}
                                    <li><i class="fa fa-user"></i>by <a href="#">{{ $item->author_name->name }}</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- block content -->
                    <div class="block-content">
                    @foreach($categories as $category)
                        <!-- carousel box -->
                        <div class="carousel-box owl-wrapper">
                            @if ($loop->index == 0)
                                <div class="title-section">
                                    <h1><span class="world">{{ $category->name }}</span></h1>
                                </div>

                                <div class="owl-carousel" data-num="2">
                                    @for($i = 0; $i < sizeof($category['posts']) - 5 ; $i = $i + 4)
                                        <div class="item">
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="{{ asset('uploads/home/im_1_'. $category['posts'][$i]['picture']) }}" alt="{{$category['posts'][$i]['title'] }}">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="{{ route('home.category.post',[$category['posts'][$i]['category']['slug'], $category['posts'][$i]['slug']]) }}">{{$category['posts'][$i]['title'] }}</a></h2>
                                                            <ul class="post-tags">
{{--                                                                <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i]['created_at'])) }}</li>--}}
                                                                <li><i class="fa fa-user"></i>by <a href="#">{{$category['posts'][$i]['author_name']['name'] }}</a></li>
                                                                <li><i class="fa fa-eye"></i>{{ $category['posts'][$i]['view_count'] }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-posts">
                                                <li>
                                                    <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+1]['picture']) }}" alt="{{$category['posts'][$i+1]['title'] }}">
                                                    <div class="post-content">
                                                        <h2><a href="{{ route('home.category.post',[$category['posts'][$i+1]['category']['slug'], $category['posts'][$i+1]['slug']]) }}">{{$category['posts'][$i+1]['title'] }}</a></h2>
{{--                                                        <ul class="post-tags">--}}
{{--                                                            <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+1]['created_at'])) }}</li>--}}
{{--                                                        </ul>--}}
                                                    </div>
                                                </li>

                                                <li>
                                                    <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+2]['picture']) }}" alt="{{$category['posts'][$i+2]['title'] }}">
                                                    <div class="post-content">
                                                        <h2><a href="{{ route('home.category.post',[$category['posts'][$i+2]['category']['slug'], $category['posts'][$i+2]['slug']]) }}">{{$category['posts'][$i+2]['title'] }}</a></h2>
{{--                                                        <ul class="post-tags">--}}
{{--                                                            <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+2]['created_at'])) }}</li>--}}
{{--                                                        </ul>--}}
                                                    </div>
                                                </li>

                                                <li>
                                                    <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+3]['picture']) }}" alt="{{$category['posts'][$i+3]['title'] }} ">
                                                    <div class="post-content">
                                                        <h2><a href="{{ route('home.category.post',[$category['posts'][$i+3]['category']['slug'], $category['posts'][$i+3]['slug']]) }}">{{$category['posts'][$i+3]['title'] }}</a></h2>
{{--                                                        <ul class="post-tags">--}}
{{--                                                            <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+3]['created_at'])) }}</li>--}}
{{--                                                        </ul>--}}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endfor
                                </div>
                            @else
                        </div>
                        <!-- End carousel box -->

                        <!-- grid box -->
                        <div class="grid-box">
                            @if($loop->index == 1)
                                <div class="col-md-6">
                                    <div class="title-section">
                                        <h1><span class="fashion">{{ $category->name }}</span></h1>
                                    </div>
                                    <div class="image-post-slider">
                                        <ul class="bxslider">
                                            @foreach($category['posts'] as $item)
                                                @if($loop->index <= 4)
                                                    <li>
                                                        <div class="news-post image-post2">
                                                            <div class="post-gallery">
                                                                <img src="{{ asset('uploads/home/im_1_'. $item['picture']) }}" alt="{{ $item['title'] }}">
                                                                <div class="hover-box">
                                                                    <div class="inner-hover">
                                                                        <h2><a href="{{ route('home.category.post', [$item['category']['slug'], $item['slug']]) }}">{{ $item['title'] }}</a></h2>
                                                                        <ul class="post-tags">
{{--                                                                            <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($item['created_at'])) }}</li>--}}
                                                                            <li><i class="fa fa-user"></i>by <a href="#">{{ $item['author_name']['name'] }}</a></li>
                                                                            <li><i class="fa fa-eye"></i>{{ $item['view_count'] }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @elseif($loop->index == 2)
                                <div class="col-md-6">
                                    <div class="title-section">
                                        <h1><span class="world">{{ $category->name }}</span></h1>
                                    </div>

                                    <div class="owl-wrapper">
                                        <div class="owl-carousel" data-num="1">
                                            @for($i = 0; $i < sizeof($category['posts']); $i = $i + 4)
                                                <div class="item">
                                                    <ul class="list-posts">
                                                        <li>
                                                            <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i]['picture']) }}" alt="{{ $category['posts'][$i]['title'] }}">
                                                            <div class="post-content">
                                                                <h2><a href="{{ route('home.category.post', [$category['posts'][$i]['category']['slug'], $category['posts'][$i]['slug']]) }}">{{ $category['posts'][$i]['title'] }}</a></h2>
{{--                                                                <ul class="post-tags">--}}
{{--                                                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i]['created_at'])) }}</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+1]['picture']) }}" alt="{{ $category['posts'][$i+1]['title'] }}">
                                                            <div class="post-content">
                                                                <h2><a href="{{ route('home.category.post', [$category['posts'][$i+1]['category']['slug'], $category['posts'][$i+1]['slug']]) }}">{{ $category['posts'][$i+1]['title'] }}</a></h2>
{{--                                                                <ul class="post-tags">--}}
{{--                                                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+1]['created_at'])) }}</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+2]['picture']) }}" alt="{{ $category['posts'][$i+2]['title'] }}">
                                                            <div class="post-content">
                                                                <h2><a href="{{ route('home.category.post', [$category['posts'][$i+2]['category']['slug'], $category['posts'][$i+2]['slug']]) }}">{{ $category['posts'][$i+2]['title'] }}</a></h2>
{{--                                                                <ul class="post-tags">--}}
{{--                                                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+2]['created_at'])) }}</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <img src="{{ asset('uploads/home/list_1_'. $category['posts'][$i+3]['picture']) }}" alt="{{ $category['posts'][$i+3]['title'] }}">
                                                            <div class="post-content">
                                                                <h2><a href="{{ route('home.category.post', [$category['posts'][$i+3]['category']['slug'], $category['posts'][$i+3]['slug']]) }}">{{ $category['posts'][$i+3]['title'] }}</a></h2>
{{--                                                                <ul class="post-tags">--}}
{{--                                                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($category['posts'][$i+3]['created_at'])) }}</li>--}}
{{--                                                                </ul>--}}
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>

                                </div>
                            @endif
                        </div>
                        @endif
                        <!-- End grid box -->
                        @endforeach
                    </div>
                    <!-- End block content -->

                </div>
            </div>

        </div>
    </section>
@endsection
