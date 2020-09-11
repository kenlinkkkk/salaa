@extends('layouts.app')
@section('title')
    <title>Trang chủ | SNews</title>
@endsection
@section('heading-news')
    <section class="heading-news">

        <div class="iso-call heading-news-box">

            <div class="news-post image-post default-size">
                <img src="{{ asset($heading_news[0]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[0]->category->slug]) }}">{{ $heading_news[0]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[0]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[0]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[0]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="image-slider snd-size">
                <span class="top-stories">TIN NỔI BẬT</span>
                <ul class="bxslider">
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset($heading_news[1]->picture) }}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category', [$heading_news[1]->category->slug]) }}">{{ $heading_news[1]->category->name }}</a>
                                    <h2><a href="#">{{ $heading_news[1]->title }}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[1]->created_at)) }}</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[1]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[1]->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset($heading_news[2]->picture) }}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category', [$heading_news[2]->category->slug]) }}">{{ $heading_news[2]->category->name }}</a>
                                    <h2><a href="#">{{ $heading_news[2]->title }}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[2]->created_at)) }}</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $heading_news[2]->author_name->name }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{ $heading_news[2]->view_count }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-post image-post">
                            <img src="{{ asset($heading_news[3]->picture) }}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category', [$heading_news[3]->category->slug]) }}">{{ $heading_news[3]->category->name }}</a>
                                    <h2><a href="#">{{ $heading_news[3]->title }}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[3]->created_at)) }}</li>
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
                            <img src="{{ asset($heading_news[4]->picture) }}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ route('home.category', [$heading_news[4]->category->slug]) }}">{{ $heading_news[4]->category->name }}</a>
                                    <h2><a href="#">{{ $heading_news[4]->title }}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($heading_news[4]->created_at)) }}</li>
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
                <img src="{{ asset($heading_news[5]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[5]->category->slug]) }}">{{ $heading_news[5]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[5]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[5]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[5]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[6]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[6]->category->slug]) }}">{{ $heading_news[6]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[6]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[6]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[6]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[7]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[7]->category->slug]) }}">{{ $heading_news[7]->category->name }}</a>
                        <h2><a href="#"{{ $heading_news[7]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[7]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[7]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[8]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[8]->category->slug]) }}">{{ $heading_news[8]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[8]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[8]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[8]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[9]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[9]->category->slug]) }}">{{ $heading_news[9]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[9]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[9]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[9]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[10]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[10]->category->slug]) }}">{{ $heading_news[10]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[10]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[10]->created_at)) }}</span></li>
                        </ul>
                        <p>{{ $heading_news[10]->description }}</p>
                    </div>
                </div>
            </div>

            <div class="news-post image-post">
                <img src="{{ asset($heading_news[11]->picture) }}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post world" href="{{ route('home.category', [$heading_news[11]->category->slug]) }}">{{ $heading_news[11]->category->name }}</a>
                        <h2><a href="#">{{ $heading_news[11]->title }}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ date('d M Y', time($heading_news[11]->created_at)) }}</span></li>
                        </ul>
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
                                <img src="{{ asset($item->picture) }}" alt="">
                                <a class="category-post world" href="{{ route('home.category', [$item->category->slug]) }}">{{ $item->category->name }}</a>
                            </div>
                            <div class="post-content">
                                <h2><a href="#">{{ $item->title }}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($item->created_at)) }}</li>
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
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">
                        @foreach($categories as $category)
                        <!-- carousel box -->
                        @if($loop->index == 0)
                        <div class="carousel-box owl-wrapper">

                            <div class="title-section">
                                <h1><span class="world">{{ $category->name }}</span></h1>
                            </div>

                            <div class="owl-carousel" data-num="2">

                                <div class="item">
                                    @foreach($category['posts'] as $item)
                                        @if ($loop->index == 0)
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="{{ asset($item['picture']) }}" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="#">{{ $item['title'] }}</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($item['created_at'])) }}</li>
                                                                <li><i class="fa fa-user"></i>by <a href="#">{{ $item['author'] }}</a></li>
                                                                <li><i class="fa fa-eye"></i>{{ $item['view_count'] }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <ul class="list-posts">
                                        <li>
                                            <img src="upload/news-posts/list1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="item">
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="upload/news-posts/im2.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                        <li><i class="fa fa-eye"></i>872</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-posts">
                                        <li>
                                            <img src="upload/news-posts/list4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list6.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="item">
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="upload/news-posts/im3.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                        <li><i class="fa fa-eye"></i>872</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-posts">
                                        <li>
                                            <img src="upload/news-posts/list7.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list8.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="upload/news-posts/list9.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <!-- End carousel box -->
                        @endif
                        <!-- grid box -->
                        <div class="grid-box">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="title-section">
                                        <h1><span class="fashion">Fashion</span></h1>
                                    </div>
                                    <div class="image-post-slider">
                                        <ul class="bxslider">
                                            <li>
                                                <div class="news-post image-post2">
                                                    <div class="post-gallery">
                                                        <img src="upload/news-posts/im1.jpg" alt="">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                                    <li><i class="fa fa-eye"></i>872</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="news-post image-post2">
                                                    <div class="post-gallery">
                                                        <img src="upload/news-posts/im2.jpg" alt="">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                                    <li><i class="fa fa-eye"></i>872</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="news-post image-post2">
                                                    <div class="post-gallery">
                                                        <img src="upload/news-posts/im3.jpg" alt="">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                                    <li><i class="fa fa-eye"></i>872</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="news-post image-post2">
                                                    <div class="post-gallery">
                                                        <img src="upload/news-posts/im4.jpg" alt="">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                                    <li><i class="fa fa-eye"></i>872</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="title-section">
                                        <h1><span class="world">Lifestyle</span></h1>
                                    </div>

                                    <div class="owl-wrapper">
                                        <div class="owl-carousel" data-num="1">

                                            <div class="item">
                                                <ul class="list-posts">
                                                    <li>
                                                        <img src="upload/news-posts/list7.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <img src="upload/news-posts/list8.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <img src="upload/news-posts/list9.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="item">
                                                <ul class="list-posts">
                                                    <li>
                                                        <img src="upload/news-posts/list2.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <img src="upload/news-posts/list6.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <img src="upload/news-posts/list1.jpg" alt="">
                                                        <div class="post-content">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- End grid box -->
                        @endforeach
                    </div>
                    <!-- End block content -->

                </div>

                <div class="col-sm-4">

                    <!-- sidebar -->
                    <div class="sidebar">

                        <div class="widget social-widget">
                            <div class="title-section">
                                <h1><span>Stay Connected</span></h1>
                            </div>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                    <span class="number">9,455</span>
                                    <span>Subscribers</span>
                                </li>
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <span class="number">56,743</span>
                                    <span>Fans</span>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <span class="number">43,501</span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    <span class="number">35,003</span>
                                    <span>Followers</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget subscribe-widget">
                            <form class="subscribe-form">
                                <h1>Subscribe to RSS Feeds</h1>
                                <input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
                                <button id="submit-subscribe">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>
                                <p>Get all latest content delivered to your email a few times a month.</p>
                            </form>
                        </div>
                    </div>
                    <!-- End sidebar -->

                </div>

            </div>

        </div>
    </section>
@endsection
