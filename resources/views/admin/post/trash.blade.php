@extends('layouts.admin.app')
@section('title', 'Dashboard Trash Post Berita')
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
       <br>
    <div class="table-responsive">
      <table class="table align-middle mb-0 datatable">
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
        {{-- @forelse ($posts as $key => $dt)
        <tr>
         <td scope="row">{{ ++$key }}</td>
         <td>{{ $dt->title }}</td>
         <td>{{ $dt->category->name }}</td>
         <td>{{  Str::limit( strip_tags( $dt->desc ), 60 ) }}</td>
         <td>
            <form method="POST" action="{{route('admin.post.restore', $dt->id)}}" class="d-inline">
                @csrf
                    <input type="submit" value="Restore" class="btn btn-success btn-sm"/>
                </form>
                <form method="POST" action="{{route('admin.post.deletePermanent', $dt->id)}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
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
    @endforelse --}}
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
<script type="text/javascript">
    $(document).ready(function() {
        // init datatable.
        // var i = 1;
        var t = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            pageLength: 5,
            // scrollX: true,
            "columnDefs": [
            {
                searchable: false,
                orderable: false,
                targets: 0,
            },
        ],
        order: [[1, 'asc']],
            ajax: '{{ route('admin.get.post.trash') }}',
            columns: [
                {data: 'id',name:'id' },
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category.name'},
                {data: 'desc', name: 'desc'},
                {data: 'Actions', name: 'Actions',
                // orderable:false,
                // serachable:false,
                sClass:'text-center'},
            ]
        });
        $(document).on('click','.hapus', function () {
        let id = $(this).attr('id')
        if ( confirm( "Apakah anda yakin akan menghapus data ini ?" ) ){
        $.ajax({
            url : "{{route('admin.post.delete')}}",
            type : 'post',
            data: {
                id: id,
                "_token" : "{{csrf_token()}}"
            },
            success: function (params) {
                alert(params.text)
                $('.datatable').DataTable().ajax.reload()
            }
        })
    }
    });
    $('body').on('click', '.delete', function () {
        if(!confirm('Anda yakin mau menghapus item ini ?')){
      event.preventDefault();
        }
    });
    t.on('order.dt search.dt', function () {
        let i = 1;
        t.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data(i++);
        });
    }).draw();

    });
    </script>
@endprepend



