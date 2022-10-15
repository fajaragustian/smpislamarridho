@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Post Berita')
@prepend('css')

@endprepend
@section('content')

{{-- Table Start --}}
<div class="card radius-10">
    <div class="card-body">
       <div class="d-flex align-items-center">
           <div>
               <h6 class="mb-0">@yield('title')</h6>
               <a  role="button" class="btn btn-primary my-3" href="{{ route('admin.post.create') }}">Add Post</a>
           </div>

       </div>
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
            ajax: '{{ route('admin.get.post') }}',
            columns: [
                {data: 'id' },
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
        if ( confirm( "Apakah anda yakin akan menghapus data ini, Jika maka silahkan cek pada post trash apabila ingin restore data" ) ){
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
    t.on('order.dt search.dt', function () {
        let i = 1;
        t.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data(i++);
        });
    }).draw();

    });
    </script>
@endprepend



