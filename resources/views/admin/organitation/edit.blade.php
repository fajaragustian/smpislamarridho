@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Edit Organitation')
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
                <form action="{{route('admin.organitation.update', $organitation->id )}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Enter Your File Image</label>
                    <div class="col-sm-9">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  id="image" value="{{old('image') ? old('image') : $organitation->image}}"></input>
                    @error('image')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label"> Enter Your Name</label>
                    <div class="col-sm-9">
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name') ? old('name') : $organitation->name}}" id="name" required  ></input>
                        @error('name')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 d-none">
                    <label for="slug" class="col-sm-3 col-form-label"> Enter Your Slug</label>
                    <div class="col-sm-9">
                        <input type="text"  name="slug" class="form-control @error('name') is-invalid @enderror" value="{{old('slug') ? old('slug') : $organitation->slug}}" id="slug"></input>
                        @error('slug')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="position" class="col-sm-3 col-form-label">Enter Your Position</label>
                    <div class="col-sm-9">
                        <input class="form-control @error('position') is-invalid @enderror"  required  id="position" name="position" value="{{old('position') ? old('position') : $organitation->position}}"></input>
                        @error('position')
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



