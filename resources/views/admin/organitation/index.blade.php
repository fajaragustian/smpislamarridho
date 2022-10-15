@extends('layouts.admin.app')
@section('title', 'Dashboard Manajemen Organitation')
@prepend('css')

@endprepend
@section('content')

{{-- Table Start --}}
<div class="card radius-10">
    <div class="card-body">
       <div class="d-flex align-items-center">
           <div>
               <h6 class="mb-0">@yield('title')</h6>
               <a  role="button" class="btn btn-primary my-3" href="{{ route('admin.organitation.create') }}">Add Position Organitation</a>
           </div>

       </div>
    <div class="table-responsive">
      <table class="table align-middle mb-0 datatable">
       <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Name</th>
          <th>Position</th>
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
            ajax: '{{ route('admin.get.organitation') }}',
            columns: [
                {data: 'id' },
                {data: 'image', name: 'image'},
                {data: 'name', name: 'name'},
                {data: 'position', name: 'position'},
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
            url : "{{route('admin.organitation.delete')}}",
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



