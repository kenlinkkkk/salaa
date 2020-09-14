@extends('layouts.app')
@section('title')
    <title>{{ $cate->name }} | SNews</title>
@endsection

@section('content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- single-post box -->
                        <div class="single-post-box">

                            <div class="title-post">
                                <h1>{{ $post->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d M Y', time($post->created_at)) }}</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">{{ $post->author_name->name }}</a></li>
                                    <li><i class="fa fa-eye"></i>{{ $post->view_count }}</li>
                                </ul>
                            </div>

{{--                            <div class="share-post-box">--}}
{{--                                <ul class="share-box">--}}
{{--                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>--}}
{{--                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>--}}
{{--                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>--}}
{{--                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>--}}
{{--                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                            <div class="post-gallery">
                                <img src="{{ asset($post->picture) }}" alt="">
                            </div>

                            <div class="post-content">
                                {!! $post->content !!}
                            </div>

{{--                            <div class="post-tags-box">--}}
{{--                                <ul class="tags-box">--}}
{{--                                    <li><i class="fa fa-tags"></i><span>Tags:</span></li>--}}
{{--                                    <li><a href="#">News</a></li>--}}
{{--                                    <li><a href="#">Fashion</a></li>--}}
{{--                                    <li><a href="#">Politics</a></li>--}}
{{--                                    <li><a href="#">Sport</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

{{--                            <div class="share-post-box">--}}
{{--                                <ul class="share-box">--}}
{{--                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>--}}
{{--                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>--}}
{{--                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>--}}
{{--                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>--}}
{{--                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                            <!-- contact form box -->
{{--                            <div class="contact-form-box">--}}
{{--                                <div class="title-section">--}}
{{--                                    <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>--}}
{{--                                </div>--}}
{{--                                <form id="comment-form">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <label for="name">Name*</label>--}}
{{--                                            <input id="name" name="name" type="text">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <label for="mail">E-mail*</label>--}}
{{--                                            <input id="mail" name="mail" type="text">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <label for="website">Website</label>--}}
{{--                                            <input id="website" name="website" type="text">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <label for="comment">Comment*</label>--}}
{{--                                    <textarea id="comment" name="comment"></textarea>--}}
{{--                                    <button type="submit" id="submit-contact">--}}
{{--                                        <i class="fa fa-comment"></i> Post Comment--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
                            <!-- End contact form box -->

                        </div>
                        <!-- End single-post box -->

                    </div>
                    <!-- End block content -->

                </div>

            </div>

        </div>
    </section>
@endsection
