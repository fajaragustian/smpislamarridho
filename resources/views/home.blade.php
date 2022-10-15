@extends('layouts.app')
@section('title','Selamat Datang SMP Islam Ar Ridho')
@prepend('css')

@endprepend
@section('content')
        <section class="pos_banner_area">
            <div class="pos_slider owl-carousel">
                <div class="pos_banner_item" style="background: url({{asset('images/6.jpeg')}})"></div>
                <div class="pos_banner_item" style="background: url({{asset('images/7.jpeg')}})"></div>
                <div class="pos_banner_item" style="background: url({{asset('images/3.jpeg')}})"></div>
            </div>
            <div class="container">
                <div class="pos_banner_text text-center">
                    <h1 class="f_p f_700 f_size_18 w_color l_height50 mb_5">SELAMAT SMP ISLAM AR RIDHO KOTA DEPOK</h1>
                    <p class="f_400 w_color f_size_26 l_height10">Merupakan sekolah umum, tidak berlatar belakang agama, golongan,
                        ataupun etnis tertentu yang bersatu dalam keberagaman</p>
                       {{-- <span class="text-bold">SMP Islam AR Ridho Kota Depok</span>  <br> so that it will be the best opportunity --}}
                    <div class="action_btn d-flex align-items-center justify-content-center wow fadeInLeft"
                        data-wow-delay="0.6s">
                        <a href="#ekskul" class="software_banner_btn">Daftar Ekskul</a>
                        <a href="https://www.youtube.com/watch?v=CXuooBEz8f8" class="video_btn popup-youtube">
                            <div class="icon"><i class="fas fa-play"></i></div><span>Watch Video</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="partner_logo_area">
            <div class="container">
                <h4 class="f_size_18 f_400 f_p text-center l_height28 mb_70">Market leaders use app to nrich their brand
                    &amp; business.</h4>
                <div class="row partner_info">
                    <div class="logo_item">
                        <a href="#"><img src="{{ asset('assets/img/home3/logo_01.png') }}" alt=""></a>
                    </div>
                    <div class="logo_item">
                        <a href="#"><img src="{{ asset('assets/img/home3/logo_02.png') }}" alt=""></a>
                    </div>
                    <div class="logo_item">
                        <a href="#"><img src="{{ asset('assets/img/home3/logo_03.png') }}" alt=""></a>
                    </div>
                    <div class="logo_item">
                        <a href="#"><img src="{{ asset('assets/img/home3/logo_04.png') }}" alt=""></a>
                    </div>
                    <div class="logo_item">
                        <a href="#"><img src="{{ asset('assets/img/home3/logo_05.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="hosting_service_area sec_pad">
            <div data-parallax='{"x": 0, "y": 100}'>
                <div class="pattern_shap" style="background: url( ../assets/img/pos/pattern_02.png);"></div>
            </div>
            <div class="container">
                <div class="hosting_title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.3s">VISI<br>SMP ISLAM AR RIDHO</h2>
                </div>
                <div class="row pos_service_info">
                    <div class="col-lg-3 col-sm-6">
                        <div class="hosting_service_item text-center">
                            <img src="{{ asset('assets/img/pos/newspaper.png') }}" width="60px" height="66px" alt="">
                            <a href="#">
                                <h4 class="h_head text-center">Inovatif</h4>
                            </a>
                            <p class="text-center" >Tanggap pada perubahan</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="hosting_service_item text-center">
                            <img src="{{ asset('assets/img/pos/trophy.png') }}" width="66px" height="66px" alt="">
                            <a href="#">
                                <h4 class="h_head text-center">Natural</h4>
                            </a>
                            <p class="text-center">Penyusuaian tanpa melupakan aslinya</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="hosting_service_item text-center">
                            <img src="{{ asset('assets/img/pos/coding.png') }}" width="60px" height="66px" alt="">
                            <a href="#">
                                <h4 class="h_head text-center">Demokrasi</h4>
                            </a>
                            <p class="text-center" >Menerima hal yang lebih baik</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="hosting_service_item text-center">
                            <img src="{{ asset('assets/img/pos/virtual-class.png') }}" width="60px" height="66px" alt="">
                            <a href="#">
                                <h4 class="h_head text-center">Aspiratif</h4>
                            </a>
                            <p class="text-center" >Respon dan memberikan solusi sesuai kebutuhan dan <br> kebersamaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pos_about_area">
            <div class="container">
                <div class="hosting_title text-center">
                    <h2 class="wow fadeInUp w_color" data-wow-delay="0.3s"> MISI  <br>SMP ISLAM AR RIDHO</h2>
                </div>
                <ul class="list-unstyled pos_about_list text-uppercase text-center">
                    <li>perpaduan antara visi & misi</li>
                    <li>Pemberdayaan fasilitas dan sarana pendukung</li>
                    <li>kerjasama yang baik anatara komponen sekolah</li>
                    <li>penerapan manajemen yang profesional</li>


                </ul>

                <img class="pos_about_img" src="{{ asset('images/8.jpeg') }}" alt="" width="880" height="490">
            </div>
        </section>
        <section class="pos_developer_product_area sec_pad">
            <div class="container">
                <div class="hosting_title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.3s">GALERI DOKUMENTASI SEKOLAH
                        {{-- <br>sell, manage, report and grow</h2> --}}
                </div>
                <div class="row">
                    @foreach ($galeri as $dt)
                    <div class="col-lg-6">
                        <div class="tab_img_info">
                            <div class="tab_img active" id="tab_one">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.4s"
                                    src="{{ asset('storage/'.$dt->image) }}"  style="width:528px;height:374px;" alt="">
                                <div class="square"></div>
                                <div class="bg_circle"></div>
                                <div data-parallax='{"x": 0, "y": 100}' class="tab_round"></div>
                                <div data-parallax='{"x": 50, "y": 5}' class="tab_triangle"></div>
                                <div data-parallax='{"x": 0, "y": 100}'>
                                    <div class="pattern_shap" style="background: url(../assets/img/pos/tab_pattern.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="developer_product_content">
                            <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-tab="tab_one" id="ruby-tab" data-toggle="tab"
                                        href="#ruby" role="tab" aria-controls="ruby" aria-selected="true">{{ $dt->category->name }}</a>
                                </li>
                            </ul>
                            <div class="tab-content developer_tab_content">
                                <div class="tab-pane fade active show" id="ruby" role="tabpanel"
                                    aria-labelledby="ruby-tab">
                                    <h4>{{ $dt->title }}<br></h4>
                                    {{-- <p>I blower he nicked it you mug pukka only a quid barmy Harry young delinquent
                                        knees up amongst such a fibber, daft gosh cracking goal wind up pardon me up the
                                        duff nice one he lost his bottle are you taking the piss is David, the BBC horse
                                        play.!</p> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="pos_features_area sec_pad">
            <div class="container">
                <div class="row flex-row-reverse pos_item">
                    <div class="col-lg-6">
                        <div class="pos_features_img">
                            <div class="shape_img"></div>
                            <div class="shap_img">
                                <img src="{{ asset('images/7.jpeg') }}" alt="features" width="489" height="300">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pos_features_content">
                            <h2>Nilai Budaya Positif<br></h2>
                            <div class="media h_features_item">
                                <i class="icon_lightbulb_alt"></i>
                                <div class="media-body">
                                    <h3 class="h_head">Melaksanakan Tata Tertib Sekolah</h3>
                                    <p class="text-justify">Sekolah membuat tata tertib untuk disepakati dan dijalankan bersama. dengan melaksanakan dan
                                        menaati tata tertib maka situasi di sekolah akan berjalan dengan tertib dalam waktu yang lama.
                                        Kebiasaan positif ini harus terus berkembang hingga menjadi karakter.</p>
                                </div>
                            </div>
                            <div class="media h_features_item">
                                <i class="icon_bag_alt orange"></i>
                                <div class="media-body">
                                    <h3 class="h_head">Cinta Kebersihan dan Lingkungan</h3>
                                    <p class="text-justify">Penanaman rasa cinta kebersihan adalah budaya positif yang harus dimiliki setiap siswa. Di sini,
                                        cinta kebersihan artinya menjaga kebersihan terhadap diri sendiri dan juga terhadap lingkungan sekolah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pos_item">
                    <div class="col-lg-6">
                        <div class="pos_features_img img_left">
                            <div class="shape_img yellow"></div>
                            <div class="shap_img yellow">
                                <img src="{{ asset('images/6.jpeg') }}" alt="features" width="530" height="357">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pos_features_content">
                            {{-- <h2>Yeni nesil bulut<br> tabanli POS</h2> --}}
                            <div class="media h_features_item">
                                <i class="icon_pushpin_alt orange"></i>
                                <div class="media-body">
                                    <h3 class="h_head">Kejujuran</h3>
                                    <p class="text-justify">Karakter kejujuran juga sangat penting untuk ditanamkan di lingkungan sekolah, bukan hanya untuk siswa,
                                        tetapi guru juga sebagai tenaga pengajar.Kejujuran adalah investasi yang berharga terciptanya komunikasi
                                        dan hubungan yang sehat antar manusia.</p>
                                </div>
                            </div>
                            <div class="media h_features_item">
                                <i class="icon_compass alt priamry"></i>
                                <div class="media-body">
                                    <h3 class="h_head">Religius</h3>
                                    <p class="text-justify">Dengan menanamkan karakter religius sejak usia dini, maka akan jadi langkah awal menumbuhkan sikap dan
                                         perilaku keberagamaan pada siswa.Peran guru sangatlah penting di sini untuk jadi teladan, pengingat,
                                         dan sebagai contoh untuk melaksanakan kegiatan bersifat religius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="h_blog_area sec_pad">
            <div class="container">
                <div class="hosting_title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.3s">BERITA <br> SMP ISLAM AR RIDHO DEPOK</h2>
                </div>
                <div class="row">
                    @foreach ($posts as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="h_blog_item pos_blog_item">
                            <img src="{{ asset('storage/'.$item->image) }}" class="rounded"  height="250px" alt="">
                            <div class="h_blog_content">
                                <div>
                                    <a href="#" class="post_time text-capitalize">
                                        <i class="icon_clock_alt"></i>
                                        {{ Carbon\Carbon::parse($item->created_at)->isoformat('dddd, D MMMM Y') }}
                                        <a href="" class="post_time text-capitalize">
                                           {{-- Author By {{ $item->admin->name }}</a> --}}
                                        </a>
                                </div>
                                <a href="{{ route('show', $item->slug) }}">
                                    <h3>{{ $item->title }}</h3>
                                </a>
                                <div class="post-info-bottom">
                                    <a href="#" class="learn_btn_two">Read More <i class="arrow_right"></i></a>
                                    @foreach ($item->tags as $tags)
                                    <a class="post-info-comments" href="{{ route('tag', $tags->slug) }}">
                                        <span class="badge badge-secondary fs-6">{{ $tags->name }}</span>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    <section class="seo_call_to_action_area sec_pad" id="ekskul">
        <div class="container" >
            <div class="seo_call_action_text">
                <h2>Pendafataran Ekstrakulikuler<br> Bergabung bersama kami di SMP Islam Ar Ridho Kota Depok</h2>
                <a href="{{ route('ekskul.create') }}" class="about_btn">Daftar</a>
            </div>
        </div>
    </section>



@endsection
@prepend('scripts')

@endprepend


