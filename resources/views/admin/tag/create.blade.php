@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Create Tags')
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
                <form action="{{route('admin.tag.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label"> Enter Your Name</label>
                    <div class="col-sm-9">
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" required placeholder="Enter Your name"></input>
                        @error('name')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keywords" class="col-sm-3 col-form-label"> Enter Your Keywords</label>
                    <div class="col-sm-9">
                        <input type="text"  name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{old('keywords')}}" id="keywords" required placeholder="Enter Your Keywords"></input>
                        @error('keywords')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="meta_desc" class="col-sm-3 col-form-label"> Enter Your Meta_Desc</label>
                    <div class="col-sm-9">
                        <input type="text"  name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" value="{{old('meta_desc')}}" id="meta_desc" required placeholder="Enter Your Meta Desc"></input>
                        @error('meta_desc')
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
@prepend('script')
@endprepend



