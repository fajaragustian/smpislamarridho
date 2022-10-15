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

<section class="blog_area_two sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5" style="margin-left:180px">
                <div class="blog-sidebar">
                    <div class="widget sidebar_widget search_widget_two">
                        <form action="{{route('search')}}" class="search-form input-group" method="GET">
                            <input type="text" name="search" class="form-control widget_input" placeholder="Search" value="{{ old('search') }}" >
                            <button type="submit" ><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 blog_grid_info">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="blog_list_item blog_list_item_two">
                            <a href="{{ asset('storage/'.$post->image) }}" class="post_date">
                                <h2>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('D'); }}<span>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM'); }} </span></h2>
                            </a>
                            <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" style="width: 340px;height:240px" alt="{{ asset('storage/images/blog/sekolah.jpg') }}"
                                    alt="">
                            <div class="blog_content">
                                <div class="text-secondary">
                                    <a href="#" class="post_time text-capitalize text-secondary">
                                        <i class="icon_clock_alt"></i>
                                        {{ Carbon\Carbon::parse($post->created_at)->isoformat('dddd, D MMMM Y') }}
                                </div>
                                <a href="{{ route('show', $post->slug) }}">
                                    <h5 class="blog_title">{{ $post->title }}</h5>
                                </a>
                                <div class="post-info-bottom">
                                    <a href="{{ route('show', $post->slug) }}" class="learn_btn_two">Read More <i
                                            class="arrow_right"></i></a>
                                            @foreach ($post->tags as $tags)
                                            <a class="post-info-comments" href="{{ route('tag', $tags->slug) }}">
                                                <span class="badge badge-secondary" style="font-size:14px;">{{ $tags->name }}</span>
                                            </a>
                                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <ul class="list-unstyled page-numbers shop_page_number text-left mt_30">
                    <br>
                    {{ $posts->links('vendor.pagination.custom') }}
                </ul>
            </div>


        </div>
    </div>
</section>

@endsection
@prepend('scripts')

@endprepend
