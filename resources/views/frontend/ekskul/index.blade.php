@extends('layouts.app')
@section('title','Sekolah - Ekskul Islam Ar Ridho')
@prepend('css')
@endprepend
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="{{ asset('assets/img/breadcrumb/banner_bg.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">| GALERI DOKUMENTASI SEKOLAH</h1>
            {{-- <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse
                pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p> --}}
        </div>
    </div>
</section>
<section class="portfolio_area sec_pad bg_color">
    <div class="container">
        <div id="portfolio_filter" class="portfolio_filter mb_50">
            <div data-filter="*" class="work_portfolio_item active">See All</div>
        </div>
        <div class="row portfolio_gallery mb-50" id="work-portfolio">
            @foreach ($ekskul as $dt )
            <div class="col-lg-4 col-sm-6 portfolio_item ux web mb_50">
                <div class="portfolio_img">
                    <a href="{{ asset('storage/'.$dt->image) }}" class="img_popup"><img class="img_rounded"
                            src="{{ asset('storage/'.$dt->image) }}" style="width: 320px;height:240px;" alt=""></a>
                    <div class="portfolio-description">
                        <a href="" class="portfolio-title">
                            <h3 class="f_500 f_size_20 f_p mt_30">{{ $dt->pembina }}</h3>
                        </a>
                        <div class="links"><a href="">{{ $dt->name }}</a></div>
                    </div>
                </div>

            </div>

            @endforeach






        </div>
        <ul class="list-unstyled page-numbers shop_page_number text-left mt_30">
            {{-- perhatikan script di bawah ini untuk membuat paginasi dan yang berkaitan dengan paginasi
            Current Page: {{ $galeri->currentPage() }}<br>
            Jumlah Data: {{ $galeri->total() }}<br>
            Data perhalaman: {{ $galeri->perPage() }}<br> --}}
            <br>
            {{ $ekskul->links('vendor.pagination.custom') }}
        </ul>
    </div>
</section>

@endsection
@prepend('scripts')

@endprepend
