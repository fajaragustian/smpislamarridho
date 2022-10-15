@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Create Users')
@prepend('css')
<link href="{{ asset('backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
@endprepend
@section('content')
@include('layouts.flash')
<div class="row">
        <div class="card-body">
            <div class="border p-4 rounded">
                <div class="card-title d-flex align-items-center">
                    <div><i class=" font-22 "></i>
                    </div>
                    <h5 class="mb-0">@yield('title')</h5>
                </div>
                <hr/>
                <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label"> Enter Your Name</label>
                    <div class="col-sm-9">
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" required  placeholder="Enter Your Name">
                        @error('name')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Enter Your Email</label>
                    <div class="col-sm-9">
                        <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required  placeholder="Enter Your Email" id="email" name="email"></input>
                        @error('email')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telp" class="col-sm-3 col-form-label">Enter Your Telp</label>
                    <div class="col-sm-9">
                        <input  class="form-control @error('telp') is-invalid @enderror" value="{{old('telp')}}" required  placeholder="Enter Your Telp" id="telp" name="telp" maxlength="13"></input>
                        @error('telp')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="umur" class="col-sm-3 col-form-label">Enter Your Umur</label>
                    <div class="col-sm-9">
                        <input class="form-control @error('umur') is-invalid @enderror" value="{{old('umur')}}" required  placeholder="Enter Your Age" id="umur" name="umur" maxlength="2" ></input>
                        @error('umur')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alasan" class="col-sm-3 col-form-label">Enter Your Alasan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control @error('alasan') is-invalid @enderror" required  placeholder="Enter Your Reason" id="alasan" name="alasan"  maxlength="150" >{{old('alasan')}}</textarea>
                        @error('alasan')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ekskul" class="col-sm-3 col-form-label">Ekskul</label>
                    <div class="col-sm-9">
                    <select name="ekskul" id="ekskul" class="form-control single-select @error('ekskul') is-invalid @enderror" required>
                        <option value="" disabled selected>Choose Ekskul</option>
                        @foreach ($ekskul as $dt)
                        <option value="{{ $dt->id }}">{{ $dt->name }} Pembina : {{ $dt->pembina }}</option>
                        @endforeach
                    </select>
                    @error('ekskul')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

</div>
@endsection
@prepend('scripts')
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>
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



