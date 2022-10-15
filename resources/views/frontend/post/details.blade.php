@extends('layouts.app')
@section('title','Sekolah - Blog SMP Islam Ar Ridho')
@prepend('css')

@endprepend
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="{{ asset('assets/img/breadcrumb/banner_bg.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">| BERITA SEKOLAH SMP ISLAM AR RIDHO DEPOK</h1>
            {{-- <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse
                pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p> --}}
        </div>
    </div>
</section>
<section class="blog_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 blog_sidebar_left">
                <div class="blog_single mb_50">
                    <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" width="700px" height="400px"alt="">
                    <div class="blog_content">
                        <div class="post_date">
                            <h2>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('D'); }}<span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM'); }} </span></h2>
                        </div>
                        <div class="entry_post_info">
                            By: <a href="#">{{ $post->admin->name }} </a>
                            <a href="#">{{ $post->category->name }} </a>

                        </div>
                        <a href="#">
                            <h5 class="f_p f_size_20 f_500 t_color mb-30">{{ $post->title }}</h5>
                        </a>
                        <p class="f_400 mb-30">{!! $post->desc !!}
                            </p>


                        <div class="post_tag d-flex">
                            <div class="post-nam"> Tags: </div>
                            @foreach ($post->tags as $item)
                            <a href="{{ route('tag', $item->slug) }}">{{ $item->name }}</a>
                            @endforeach
                        </div>

                    </div>
                </div>




            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="widget sidebar_widget widget_search">
                        <form action="/search/" class="search-form input-group" method="GET">
                            <input type="text" name="search" class="form-control widget_input" placeholder="Search" value="{{ old('search') }}" >
                            <button type="submit" ><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <div class="widget sidebar_widget widget_recent_post mt_60">
                        <div class="widget_title">
                            <h3 class="f_p f_size_20 t_color3">Recent posts</h3>
                            <div class="border_bottom"></div>
                        </div>
                        @foreach ($recent as $item )
                        <div class="media post_item">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="" width="85px" height="75px">
                            <div class="media-body">
                                <a href="#">
                                    <h3 class="f_size_16 f_p f_400">{{ $item->title }}</h3>
                                </a>
                                <div class="entry_post_info">
                                    By: <a href="#">{{ $item->admin->name }}</a>
                                    <a href="#">{{ Carbon\Carbon::parse($item->created_at)->isoFormat(' MMMM D Y'); }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br>
                    <div class="widget sidebar_widget widget_tag_cloud mt_60">
                        <div class="widget_title">
                            <h3 class="f_p f_size_20 t_color3">Tags</h3>
                            <div class="border_bottom"></div>
                        </div>
                        <div class="post-tags">
                            @foreach ($tags as $item)
                            <a href="{{ route('tag', $item->slug) }}">{{ $item->name }}</a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@prepend('scripts')

@endprepend
