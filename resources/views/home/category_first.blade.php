@extends('layouts.app')
@section('title')
    <title>{{ $cate->name }} | Tin tức</title>
@endsection

@section('content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- grid box -->
                        <div class="grid-box">
                            <div class="title-section">
                                <h1><span class="world">{{ $cate->name }}</span></h1>
                            </div>

                            <div class="row">
                                @foreach($posts as $item)
                                    <div class="col-sm-6 col-md-6">
                                        <div class="news-post standard-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('uploads/home/im_1_'. $item['picture']) }}" alt="{{ $item['title'] }}">
                                            </div>
                                            <div class="post-title">
                                                <h2><a href="{{ route('home.category.post', [$item['category']['slug'], $item['slug']]) }}">{{ $item['title'] }}</a></h2>
                                                <ul class="post-tags">
{{--                                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($item['created_at'])) }}</li>--}}
                                                    <li><i class="fa fa-user"></i>by <a href="#">{{ $item['author_name']['name'] }}</a></li>
                                                    <li><i class="fa fa-eye"></i>{{ $item['view_count'] }}</li>
                                                </ul>
                                            </div>
                                            <div class="post-content">
                                                <a href="{{ route('home.category.post', [$item['category']['slug'], $item['slug']]) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End grid box -->

                        <!-- pagination box -->
                        <div class="pagination-box">
                            <ul class="pagination-list">
{{--                                <li><a class="active" href="{{ route('home.category.index', [$cate->slug, 'page='. $current_page]) }}">{{ $current_page }}</a></li>--}}
{{--                                <li><a href="{{ route('home.category.index', [$cate->slug, 'page='. $next_page]) }}">Next</a></li>--}}
                                {!! $posts->links() !!}
                            </ul>
                        </div>
                        <!-- End Pagination box -->

                    </div>
                    <!-- End block content -->

                </div>
            </div>

        </div>
    </section>
@endsection
