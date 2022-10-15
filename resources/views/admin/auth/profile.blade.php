@extends('layouts.admin.app')
@section('title', 'Dashboard Profile Admin')
@prepend('css')
@endprepend
@section('content')
@include('layouts.flash')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-center">
                    <div><i class=" font-22 "></i>
                    </div>
                    <h5 class="mb-0">@yield('title')</h5>
                </div>
                <hr/>
                    <div class="d-flex flex-column align-items-center text-center">
                        @if ($admin->image === null )
                       <img src="https://avatar.oxro.io/avatar.svg?name={{ $admin->name }}&caps=3&bold=true"  alt="{{ $admin->name }}"class="rounded-circle p-1 bg-primary" width="110" height="110">
                          {{-- <img src="{{ asset('images/default.jpg') }}" class="rounded-circle p-1 bg-primary" width="110" height="110"> --}}
                        @else
                        <img src="{{ Storage::url($admin->image) }}" alt="" class="rounded-circle p-1 bg-primary" width="110" height="110">
                        @endif
                        <div class="mt-3">
                            <h3>{{ $admin->name }}</h3>
                            {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                            <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-outline-primary">Message</button> --}}
                        </div>
                    </div>
                    {{-- <hr class="my-4" />
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                            <span class="text-secondary">https://codervent.com</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                            <span class="text-secondary">codervent</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary">@codervent</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary">codervent</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary">codervent</span>
                        </li>
                    </ul> --}}
            </div>
        </div>
    </div>
    {{-- End --}}
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body mt-2">
                <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="name" class="col-form-label">Enter Your Full Name</label>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" id="name" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name', $admin->name) }}" autocomplete="name" autofocus />
                        @error('name')
                        <div class="invalid-feedback mt-1" role="alert" >
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="email" class="col-form-label">Enter Your Email </label>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="email" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email', $admin->email) }}" autocomplete="email" autofocus />
                        @error('email')
                        <div class="invalid-feedback mt-1" role="alert" >
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Enter Your File Image</label>
                    <div class="col-sm-9">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  id="image" value="{{old('image') ? old('image') : $admin->image}}"></input>
                    @error('image')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                    </div>
                </div>
                </form>
                </div>

        </div>
        <div class="card">
            <div class="card-body mt-2">
                <form action="{{route('admin.changepassword.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">Current Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password">
                            @error('current_password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">Password Confirmation</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation">
                            @error('password_confirmation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
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
        {{-- End Grid Form Edit Profile  --}}
    </div>
</div>
{{-- End Card Body  Edit Profile --}}
@endsection
@prepend('script')

@endprepend


