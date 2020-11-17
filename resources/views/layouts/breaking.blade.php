<section class="ticker-news">

    <div class="container">
        <div class="ticker-news-box">
            <span class="breaking-news">Tin hot</span>
            <span class="new-news">Mới</span>
            <ul id="js-news">
                @foreach($breaking_news as $item)
                    <li class="news-item">
{{--                        <span class="time-news">{{ date('H:i', time($item->created_at)) }}</span>--}}
                        <a href="{{ route('home.category.post', [$item->category->slug, $item->slug]) }}">{{ $item->title }}</a> {{ $item->description }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</section>
