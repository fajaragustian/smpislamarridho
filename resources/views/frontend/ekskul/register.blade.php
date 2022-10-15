@extends('layouts.app')
@section('title','Register Ekskul - Sekolah SMP ISLAM AR RIDHO')
@prepend('css')

@endprepend
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center  text-uppercase">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Ekstrakulikuler</h1>
            <p class="f_400 w_color f_size_5 l_height26">Kembangkan Bakat mu untuk mencapai cita-cita mu
                SMP Islam AR Ridho Kota Depok <br> </p>
        </div>
    </div>
</section>
<section class="sign_in_area bg_color sec_pad">
    <div class="container">
        @if ($message = Session::get('errorr'))
        <div class="alert error">
            <div class="alert_body">
                <i class="icon-close"></i>
                <strong>{{ $message }}</strong>
            </div>
            <div class="alert_close"><i class="icon_close"></i></div>
        </div>
      @endif
      @if ($message = Session::get('success'))
      <div class="alert success">
          <div class="alert_body">
              <i class="icon-close"></i>
              <strong>{{ $message }}</strong>
          </div>
          <div class="alert_close"><i class="icon_close"></i></div>
      </div>
    @endif
        <div class="sign_info">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sign_info_content">
                        <h3 class="f_p f_600 f_size_13 t_color3 mb_40">Benefit Your Ekstrakulikuler</h3>
                        <ul class="list-unstyled mb-0" >
                            <li style="font-size: 14px"><i class="ti-check"></i> Melatih Tanggung Jawab dan Kemandirian </li>
                            <li style="font-size: 14px"><i class="ti-check"></i> Tempat Mengasah Bakat dan Minat Kamu</li>
                            <li style="font-size: 14px"><i class="ti-check"></i> Sarana untuk Belajar Berorganisasi dan Sosialisasi </li>
                            <li style="font-size: 14px"><i class="ti-check"></i> Melatih Kerja Sama </li>
                            <li style="font-size: 14px"><i class="ti-check"></i> Melatih Sikap Disiplin dan Komitmen </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="login_info">
                        <h2 class="f_p f_600 f_size_24 t_color3 mb_40">Register</h2>
                        <form action="{{ route('ekskul.store') }}" method="POST" class="login-form sign-in-form">
                            @csrf
                            <div class="form-group text_box">
                                <label class="f_p text_c f_400">Name</label>
                                <input type="text"  class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text_box">
                                <label class="f_p text_c f_400">Email </label>
                                <input type="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text_box">
                                <label class="f_p text_c f_400">Telephone </label>
                                <input type="text"  class="form-control @error('telp') is-invalid @enderror" placeholder="Enter Your Telephone" name="telp" value="{{ old('telp') }}" maxlength="13" required>
                                @error('telp')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text_box">
                                <label class="f_p text_c f_400">Umur </label>
                                <input type="text"  class="form-control @error('umur') is-invalid @enderror" placeholder="Enter Your Umur" name="umur" value="{{ old('umur') }}" maxlength="2" required>
                                @error('umur')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text_box">
                                <label for="ekskul" class="f_p text_c f_400">Ekstrakulikuler</label>
                                <select name="ekskul" id="ekskul" class="form-control single-select @error('ekskul') is-invalid @enderror" required>
                                    <option value="" disabled selected>Choose Ekstrakulikuler</option>
                                    @foreach ($ekskul as $dt)
                                    <option value="{{ $dt->id }}">{{ $dt->name }} Pembina : {{ $dt->pembina }}</option>
                                    @endforeach
                                </select>
                                @error('ekskuls')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group text_box">
                                <label class="f_p text_c f_400">Alasan mendaftar ekskul </label>
                                <textarea type="text"  class="form-control @error('alasan') is-invalid @enderror" placeholder="Enter Your Reason of Register Ekstrakulikuler" name="alasan" value="{{ old('alasan') }}" maxlangth="120" required></textarea>
                                @error('alasan')
                                <div class="invalid-feedback mt-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>




                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn_three">Daftar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    @prepend('scripts')
    <script src="assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
    @endprepend
