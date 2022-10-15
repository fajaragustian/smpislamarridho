<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>SMP ISLAM AR RIDHO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="SMP ISLAM AR RIDHO" />
    <meta name="keywords" content="SMP ISLAM AR RIDHO" />
    <meta content="Themesdesign" name="SMP ISLAM AR RIDHO" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" />
    <!-- css -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- icon -->
    <link href="{{ asset('frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pe-icon-7-stroke.css') }}" />

    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="65">
    <!-- STRAT NAVBAR -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="{{ route('home') }}">
                    SMP ISLAM AR RIDHO
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center" id="navbar-navlist">
                                <li class="nav-item">
                                    <a data-scroll href="#home" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#profile" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#tujuan" class="nav-link">Visi & Motto</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#struktur" class="nav-link">Struktur</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#kutipan" class="nav-link">Kutipan</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#blog" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll href="#contact" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            {{-- <div class="nav-button ms-auto">
                                    <a  href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-warning">Register</a>
                            </div> --}}
                </div>
            </div>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="{{ asset('frontend/images/bg-home.jpg') }}">
        <div class="bg-overlay"></div>
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-white text-center">

                            <h1 class="home-title" id="smpislamarridho"></h1>
                            <p class="pt-3 home-desc">Religius, Terpadu, Berprestasi.</p>
                            <p class="play-shadow mt-4" data-bs-toggle="modal" data-bs-target="#watchvideomodal"><a
                                    href="javascript: void(0);" class="play-btn video-play-icon"><i
                                        class="mdi mdi-play text-center"></i></a></p>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content home-modal">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <video id="VisaChipCardVideo" class="video-box" controls>
                                            <source src="https://www.youtube.com/watch?v=qVrM-Hg6aGU&ab_channel=CikguWiwid" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-effect wave-anim">
            <div class="waves-shape shape-one">
                <div class="wave wave-one" style="background-image: url('{{ asset('frontend/images/wave-shape/wave1.png') }}')"></div>
            </div>
            <div class="waves-shape shape-two">
                <div class="wave wave-two" style="background-image: url('{{ asset('frontend/images/wave-shape/wave2.png')}}')"></div>
            </div>
            <div class="waves-shape shape-three">
                <div class="wave wave-three" style="background-image: url('{{ asset('frontend/images/wave-shape/wave3.png') }}')"></div>
            </div>
        </div>
    </section>
    <!--END HOME-->

   <!--START SERVICES-->
   <section class="section pt-5" id="tujuan">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">EKSTRAKULIKULER</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center pt-4 font-secondary">Berprestasi dalam Ekstrakulikuler
                    untuk menjadi siswa siswa yang berkembang. Pengembangan potensi peserta didik, dapat memberikan dampak positif dalam penguatan pendidikan karakter.</p>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row mt-2">
            <div class="col-lg-4 mt-3">
                <div class="services-box text-center hover-effect">
                    <i class="pe-7s-diamond text-primary"></i>
                    <h4 class="pt-3">Rekreatif</h4>
                    <p class="pt-3 text-muted">Sebagai suasana gembira dan menyenangkan, sehingga suasana ini menunjang proses perkembangan potensi/kemampuan personal peserta didik.</p>
                </div>
            </div>
            <!-- end  -->
            <div class="col-lg-4 mt-3">
                <div class="services-box text-center hover-effect">
                    <i class="pe-7s-display2 text-primary"></i>
                    <h4 class="pt-3">Berkembangan</h4>
                    <p class="pt-3 text-muted">Sebagai tempat berkembangnya minat dan bakat peserta didik.</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4 mt-3">
                <div class="services-box text-center hover-effect">
                    <i class="pe-7s-display1 text-primary"></i>
                    <h4 class="pt-3">Persiapan Karir</h4>
                    <p class="pt-3 text-muted">Sebagai fasilitas persiapan peserta didik melalui pengembangan bakat dan minat dalam bidang ekstrakurikuler yang diminati.</p>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</section>
<!--START SERVICES-->

<!-- START BLOG -->
<section class="section bg-light pt-5" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <h1 class="section-title text-center">Blog</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center font-secondary pt-4">Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean class at a euismod
                    mus ipsum vel ex finibus semper luctus quam.</p>
            </div>
        </div>

        <div class="row mt-4">

            <div class="col-lg-4">
                <div class="blog-box mt-4 hover-effect">
                    <img src="{{ asset('frontend/images/blog/img-1.jpg')}}" class="img-fluid" alt="">
                    <div>
                        <h5 class="mt-4 text-muted"><span class="badge text-bg-primary">Primary</span></h5>
                        <h4 class="mt-3"><a href="" class="blog-title"> Doing a cross country road trip </a></h4>
                        <p class="text-muted">She packed her seven versalia, put her initial into the belt and made
                            herself on the way..</p>
                        <div class="mt-3">
                            <a type="button" class="btn btn-primary">
                                Read More <span class="badge text-bg-secondary"><i class="mdi mdi-arrow-right"></i></span>
                              </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="blog-box mt-4 hover-effect">
                    <img src="{{ asset('frontend/images/blog/img-2.jpg')}}" class="img-fluid" alt="">
                    <div>
                        <h5 class="mt-4 text-muted">Digital Marketing</h5>
                        <h4 class="mt-3"><a href="" class="blog-title">New exhibition at our Museum</a></h4>
                        <p class="text-muted">Pityful a rethoric question ran over her cheek, then she continued her
                            way.</p>
                        <div class="mt-3">
                            <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="blog-box mt-4 hover-effect">
                    <img src="{{ asset('frontend/images/blog/img-3.jpg')}}" class="img-fluid" alt="">
                    <div>
                        <h5 class="mt-4 text-muted">Travelling</h5>
                        <h4 class="mt-3"><a href="" class="blog-title">Why are so many people..</a></h4>
                        <p class="text-muted">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.</p>
                        <div class="mt-3">
                            <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</section>
<!-- END BLOG -->

<!--START WEBSITE-DESCRIPTION-->
<section class="section section-lg bg-web-desc">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white">Tumbuh Bersama SMP Islam Ar Ridho Depok</h2>
                <p class="pt-3 home-desc text-bold ml-lg-0" style="letter-spacing: 2px" >DAFTARKAN DIRIMU DIBERBAGAI KEGIATAN EKSTRAKULIKULER</p>
                <a href="#" class="btn btn-white mt-4 waves-effect waves-light mb-5">Daftar Ekstrakulikuler</a>
            </div>
        </div>
    </div>
    <div class="bg-pattern-effect">
        <img src="{{ asset('frontend/images/bg-pattern.png')}}" alt="">
    </div>
</section>

<!--END WEBSITE-DESCRIPTION-->

<!--Start WEBSITE-features-->
<section class="section bg-light" id="profile">
    <div class="container">
        <div class="row vertical-content">
            <div class="col-lg-5">
                <div class="features-box">
                    <h3>A digital web design studio creating modern & engaging online experiences</h3>
                    <p class="text-muted web-desc">Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean. A small river named Duden flows by their place and
                        supplies it with the necessary regelialia.</p>
                    <!-- <ul class="text-muted list-unstyled mt-4 features-item-list">
                        <li class="">We put a lot of effort in design.</li>
                        <li class="">The most important ingredient of successful website.</li>
                        <li class="">Sed ut perspiciatis unde omnis iste natus error sit.</li>
                        <li class="">Submit Your Organization.</li>
                    </ul> -->
                    <a href="#" class="btn btn-primary mt-4 waves-effect waves-light">Learn More <i
                            class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="features-img features-right text-end">
                    <img src="{{ asset('frontend/images/online-world.svg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--END WEBSITE-features-->

<!--START TEAM-->
<section class="section pt-4" id="struktur">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">STRUKTUR SMP ISLAM AR RIDHO</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center font-secondary pt-4">Struktur Organisasi ditetapkan pada tahun ajaran 2021-2022 untuk menyusuaikan kondisi dari setiap masing masing pegawai dalam memiliki peran-peran penting, struktur organisasi yang telah telah ditetapkan oleh pihak sekolah itu sendiri.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                @foreach ($organitations as $dt)
                <div class="team-box text-center hover-effect">
                    <div class="team-wrapper">
                        <div class="team-member">
                            <img alt="" src="{{ asset('storage/'.$dt->image) }}" class="img-fluid rounded" width="230">
                        </div>
                    </div>
                    <h4 class="team-name">{{ $dt->name }}</h4>
                    <p class="text-uppercase team-designation">{{ $dt->position }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- end row -->
    </div>
</section>
<!--END TEAM-->

<!--START Galeri -->
<section class="section pt-4" id="galeri">

    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">STRUKTUR SMP ISLAM AR RIDHO</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center font-secondary pt-4">Struktur Organisasi ditetapkan pada tahun ajaran 2021-2022 untuk menyusuaikan kondisi dari setiap masing masing pegawai dalam memiliki peran-peran penting, struktur organisasi yang telah telah ditetapkan oleh pihak sekolah itu sendiri.</p>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-lg-8 offset-lg-2">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('frontend/images/ekskul/1.jpeg') }}" class="d-block w-100" style="width:320px;height:355px;" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('frontend/images/ekskul/2.jpeg') }}" class="d-block w-100" style="width:320px;height:355px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{ asset('frontend/images/ekskul/3.jpeg') }}" class="d-block w-100" style="width:320px;height:355px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
        </div>
    </div>
    <div class="bg-pattern-effect">
        <img src="{{ asset('frontend/images/bg-pattern.png')}}" alt="">
    </div>
</section>


<!--START TESTIMONIAL-->
<section class="section" id="kutipan">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">Kutipan Tokoh Pendidikan</h1>
                <div class="section-title-border mt-3"></div>
                {{-- <p class="section-subtitle text-muted text-center font-secondary pt-4">The Big Oxmox advised her not
                    to do so, because there were thousands of bad Commas, wild Question Marks and devious pulvinar
                    metus molestie sed Semikoli.
                </p> --}}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="testimonial-box hover-effect mt-4">
                    <img src="{{ asset('frontend/images/testimonials/user-2.jpg')}}" alt=""
                        class="img-fluid d-block img-thumbnail rounded-circle">
                    <div class="testimonial-decs">
                        <p class="text-muted text-center mb-0">“Ing ngarsa sung tulada, ing madya mangun karsa, tut wuri handayani. Di Depan, Seorang Pendidik harus memberi Teladan atau Contoh Tindakan Yang Baik, Di tengah atau di antara Murid, Guru harus menciptakan prakarsa dan ide, Dari belakang Seorang Guru harus Memberikan dorongan dan Arahan.”
                        </p>
                    </div>
                    <h5 class="text-center text-uppercase pt-3">Ki Hajar Dewantara
                            {{-- <span class="text-muted text-capitalize">Charleston</span> --}}
                    </h5>
                    </div>
                </div>

            <div class="col-lg-4">
                <div class="testimonial-box hover-effect mt-4">
                    <img src="{{ asset('frontend/images/testimonials/user-1.jpg')}}" alt=""
                        class="img-fluid d-block img-thumbnail rounded-circle">
                    <div class="testimonial-decs">
                        <p class="text-muted text-center mb-0">“Hanya pendidikan yang bisa menyelamatkan masa depan, tanpa pendidikan Indonesia tak mungkin bertahan.” </p>
                    </div>
                    <h5 class="text-center text-uppercase pt-3">Najwa Shihab
                        {{-- <span class="text-muted text-capitalize">Charleston</span> --}}
                </h5>
                    </div>
                </div>

            <div class="col-lg-4">
                <div class="testimonial-box hover-effect mt-4">
                    <img src="{{ asset('frontend/images/testimonials/user-3.jpg')}}" alt=""
                        class="img-fluid d-block img-thumbnail rounded-circle">
                    <div class="testimonial-decs">
                        <p class="text-muted text-center mb-0">“Buku apa pun yang membantu anak membentuk kebiasaan membaca, membuat membaca salah satu dari kebutuhannya yang mendalam dan berkelanjutan, adalah baik baginya..”
                        </p>
                    </div>
                    <h5 class="text-center text-uppercase pt-3">Maya Angelou
                        {{-- <span class="text-muted text-capitalize">Charleston</span> --}}
                </h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!--END TESTIMONIAL-->

<!--START GET STARTED-->
{{-- <section class="section section-lg bg-get-start">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="get-started-title text-white">Let's Get Started</h1>
                <div class="section-title-border mt-4 bg-white"></div>
                <p class="section-subtitle font-secondary text-white text-center pt-4">Far far away, behind the word
                    mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <a href="#" class="btn btn-white waves-effect mt-3 mb-4">Get Started <i
                        class="mdi mdi-arrow-right"></i> </a>
            </div>
        </div>
    </div>
    <div class="bg-pattern-effect">
        <img src="{{ asset('frontend/images/bg-pattern-light.png')}}" alt="">
    </div>
</section> --}}
<!--END GET STARTED-->



<!-- CONTACT FORM START-->
<section class="section " id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">Get In Touch</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                    innovative ideas but also understand that a smart concept should be supported with faucibus
                    sapien odio measurable
                    results.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-4 pt-4">
                    <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                            class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                    <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                            class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                            70171</span></p>
                    <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                            class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="custom-form mt-4 pt-4">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <p id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your name*">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email*">
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Your Subject.." />
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12 text-end">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                    value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</section>
<!-- CONTACT FORM END-->

<!--START SOCIAL-->
<section class="contact-social bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="list-inline social mt-4">
                    <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="" class="social-icon"><i
                                class="mdi mdi-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-microsoft-xbox"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mt-4">
                <p class="contact-title"><i class="pe-7s-call"></i> &nbsp;+91 123 4556 789</p>
            </div>
            <!-- end col -->
            <div class="col-lg-3 mt-4 text-end">
                <p class="contact-title"><i class="pe-7s-mail-open"></i>&nbsp; Support@info.com</p>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</section>
<!--END SOCIAL-->

<!--START FOOTER-->
<footer class="footer">
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-3 ">
                <h4>DORSIN</h4>
                <div class="text-muted mt-4">
                    <ul class="list-unstyled footer-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <h4>Information</h4>
                <div class="text-muted mt-4">
                    <ul class="list-unstyled footer-list">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Bookmarks</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <h4>Support</h4>
                <div class="text-muted mt-4">
                    <ul class="list-unstyled footer-list">
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Disscusion</a></li>
                    </ul>
                </div>
            </div>

                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="float-start pull-none ">
                            <p class="copy-rights text-muted" style="color: #000;" >
                                ©  <script>
                                    document.write(new Date().getFullYear())
                                </script>Design by Pengabdian Masyarakat D'Ants. All Right Reserved.
                            </p>
                        </div>


                    </div>
                </div>

        </div>

    </div>
</footer>
<!--END FOOTER-->

    <!-- javascript -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('frontend/js/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script>
        var app = document.getElementById('smpislamarridho');

        var customNodeCreator = function(character) {
        return document.createTextNode(character);
        }

        var typewriter = new Typewriter(app, {
        loop: true,
        delay: 100,
        onCreateTextNode: customNodeCreator,
        });

        typewriter
        .typeString('SELAMAT DATANG DI SMP ISLAM AR RIDHO')
        .pauseFor(40000)
        .start();


    </script>
</body>

</html>
