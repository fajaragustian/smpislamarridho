@extends('layouts.admin.app')
@section('title', 'Dashboard Change Password')
@prepend('css')

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

</div>
@endsection
@prepend('scripts')

@endprepend



