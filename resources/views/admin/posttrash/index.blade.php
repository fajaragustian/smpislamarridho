@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Post Trash asda Berita')
@prepend('css')

@endprepend
@section('content')
@include('layouts.flash')
{{-- Table Start --}}
<div class="card radius-10">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div>
                <h6 class="mb-0">@yield('title')</h6>
            </div>

        </div>
    <div class="table-responsive">
      <table class="table align-middle mb-0">
       <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Category</th>
          <th>Desc</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($posts as $key => $dt)
        <tr>
         <td scope="row">{{ ++$key }}</td>
         <td>{{ $dt->title }}</td>
         <td>{{ $dt->category->name }}</td>
         <td>{{  Str::limit( strip_tags( $dt->desc ), 60 ) }}</td>
         <td>
            <form method="POST" action="{{route('admin.post.restore', $dt->id)}}" class="d-inline" onsubmit="return confirm('Can post to restore ?')">
                @csrf
                    <input type="submit" value="Restore" class="btn btn-success btn-sm"/>
            </form>
            <form method="POST" action="{{route('admin.post.deletePermanent', $dt->id)}}" class="d-inline" onsubmit="return confirm('Move post to trash ?')">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
         </td>
        </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center">
            <h4>Tidak ada data</h4>
        </td>
    </tr>
    @endforelse
       </tbody>
     </table>
     </div>
    </div>
</div>
{{-- Table End --}}
</div>
</div>
@endsection
@prepend('script')
@endprepend



