@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Edit Categories')
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
                <form action="{{route('admin.categories.update', $categories->id )}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Enter Your Name</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('name') is-invalid @enderror"  required  id="name" name="name" value="{{old('name') ? old('name') : $categories->name}}"></input>
                            @error('name')
                            <div class="invalid-feedback mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keywords" class="col-sm-3 col-form-label">Enter Your Keywords</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('keywords') is-invalid @enderror"  required  id="keywords" name="keywords" value="{{old('keywords') ? old('keywords') : $categories->keywords}}"></input>
                            @error('keywords')
                            <div class="invalid-feedback mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="meta_desc" class="col-sm-3 col-form-label">Enter Your Meta Desc</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('meta_desc') is-invalid @enderror"  required  id="meta_desc" name="meta_desc" value="{{old('keywords') ? old('keywords') : $categories->meta_desc}}"></input>
                            @error('meta_desc')
                            <div class="invalid-feedback mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                <div class="row mb-3 d-none">
                    <label for="slug" class="col-sm-3 col-form-label"> Enter Your Slug</label>
                    <div class="col-sm-9">
                        <input type="text"  name="slug" class="form-control @error('name') is-invalid @enderror" value="{{old('slug') ? old('slug') : $categories->slug}}" id="slug"></input>
                        @error('slug')
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



