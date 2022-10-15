@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Edit Galeri')
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
                <form action="{{route('admin.galeri.update', $galeries->id )}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="row mb-3">
                        <label for="image" class="col-sm-3 col-form-label">Enter Your File Image</label>
                        <div class="col-sm-9">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  id="image" value="{{old('image') ? old('image') : $galeries->image}}"></input>
                        @error('image')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label"> Enter Your Name</label>
                    <div class="col-sm-9">
                        <input type="text"  name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title') ? old('title') : $galeries->title}}" id="title" required  ></input>
                        @error('title')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="category" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                    <select name="category" id="category" class="form-control single-select @error('category') is-invalid @enderror" required>
                        <option value="" disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                        <option {{ $category->id == $galeries->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
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



