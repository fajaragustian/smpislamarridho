@extends('layouts.admin.app')
@section('title', 'Dashboard Create Post Berita')
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
                <form action="{{route('admin.post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                <div class="row mb-3">
                    <label for="image" class="col-sm-3 col-form-label">Enter Your File Image</label>
                    <div class="col-sm-9">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}" id="image" value="{{old('image') ? old('image') : $post->image}}">
                    @error('image')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label"> Enter Your Title</label>
                    <div class="col-sm-9">
                        <input type="text"  name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title') ? old('title') : $post->title}}" >
                        @error('title')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="desc" class="col-sm-3 col-form-label">Enter Your Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control @error('desc') is-invalid @enderror" value="{{old('desc')}}" id="desc" name="desc" required>{{ $post->desc }}</textarea>
                        @error('desc')
                        <div class="invalid-feedback mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="slug" class="col-sm-3 col-form-label">Enter Your Slug</label>
                    <div class="col-sm-9">
                        <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug') ? old('slug') : $post->slug}}"></input>
                        @error('slug')
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
                        <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tag" class="col-sm-3 col-form-label">Choose Tag</label>
                    <div class="col-sm-9">
                        <select name="tags[]" id="tag" class="form-control select2 @error('tags') is-invalid @enderror" required multiple>
                            @foreach ($post->tags as $tag)
                            <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                            @foreach ($tags as $tags)
                            <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                            @endforeach
                        </select>
                        @error('tags')
                        <div class="invalid-feedback mt-1">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keywords" class="col-sm-3 col-form-label">Enter Your Keywords</label>
                    <div class="col-sm-9">
                        <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{old('keywords') ? old('keywords') : $post->keywords}}" required>
                    </div>
                    @error('keywords')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="meta_desc" class="col-sm-3 col-form-label">Enter Your Meta Description </label>
                    <div class="col-sm-9">
                        <input type="text" name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" value="{{old('meta_desc') ? old('meta_desc') : $post->meta_desc}}" required>
                    </div>
                    @error('meta_desc')
                    <div class="invalid-feedback mt-1">
                        {{ $message }}
                    </div>
                    @enderror
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



