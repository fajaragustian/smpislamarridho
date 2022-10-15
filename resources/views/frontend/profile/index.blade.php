@extends('layouts.app')
@section('title','Sekolah - Profile SMP Islam Ar Ridho')
@prepend('css')
@endprepend
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="{{ asset('assets/img/breadcrumb/banner_bg.png') }}" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">SEKILAS PANDANG SEKOLAH SMP ISLAM <br>AR RIDHO DEPOK </h1>
            <p class="f_400 w_color f_size_16 l_height26">Sekolah SMP ISLAM AR RIDHO Depok mempunyai sejarah yang panjang sejak berdirinya tahun 1998.<br></p>
        </div>
    </div>
</section>
<section class="case_study_details_area sec_pad">
    <div class="container">
        <div class="study_details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="details_img">
                        <img src="{{ asset('images/8.jpeg') }}" alt="" width="1162px">
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="details_info">
                        <h2>Info</h2>
                        <ul class="list-unstyled">
                            <li><span>Date :</span> 20 March, 2020</li>
                            <li><span>Category :</span> Development, Saas, App</li>
                            <li><span>Client :</span> Hanson Deck</li>
                        </ul>
                        <div class="btn_info d-flex">
                            <a href="#" class="btn_hover agency_banner_btn">Launch Website</a>
                            <a href="#" class="tag"><i class="ti-heart"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="study_details_content">
                <h2>SMP ISLAM AR RIDHO</h2>
                <p class="text-justify">SMP Islam Ar Ridho merupakan salah satu satuan pendidikan dengan jenjang Sekolah
                    Menengah Pertama berlokasi di Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat dalam
                    menjalankan kegiatannya, SMP Islam Ar Ridho berada di bawah naungan Kementerian Pendidikan
                    dan Kebudayaan, SMP Islam Ar Ridho berdiri pada tanggal 26 Mei 1998  kemudian mendapatkan
                    izin operasional pada tanggal 30 Oktober  2011, dan selaku kepala sekolah tersebut adalah
                    H. Muis Ali, S.Pd.I, MM. SMP Islam Ar Ridho berlokasi di Jl. Aliyah Arridho No. 45, Jatimulya,
                    Kec. Cilodong, Kota Depok, Jawa Barat, dengan kode pos 16413.</p>
            </div>
            <br>
            <div class="row mt-md-5">
                <div class="container">
                    <div class="sec_title text-center mb_70">
                        <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20 text-uppercase">Struktur Organisasi</h2>
                        {{-- <p class="f_400 f_size_16">Why I say old chap that is spiffing barney, nancy boy bleeder chimney<br> pot
                            richard cheers the little rotter.!</p> --}}
                    </div>
                    <div class="row ">
                        @foreach ($organisasi as $dt )
                        <div class="col-lg-3 col-sm-6">
                            <div class="ex_team_item">
                                <img src="{{ asset('storage/'.$dt->image) }}" alt="">
                                <div class="team_content">
                                    <a >
                                        <h3 class="f_p f_size_16 f_600 t_color3">{{ $dt->name }}</h3>
                                    </a>
                                    <h5>{{ $dt->position }}</h5>
                                </div>
                                <div class="hover_content">
                                    <div class="n_hover_content">
                                        {{-- <ul class="list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul> --}}
                                        <div class="br"></div>
                                        <a href="">
                                            <h3 class="f_p f_size_16 f_600 w_color">{{ $dt->name }}</h3>
                                        </a>
                                        <h5>{{ $dt->position }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
    @prepend('scripts')
    @endprepend
