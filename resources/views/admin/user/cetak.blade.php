@extends('layouts.admin.app')
@section('title', 'CETAK USER')
@prepend('css')

@endprepend
@section('content')

{{-- Table Start --}}
<div class="card radius-12">
    <div class="card-body">
       <div class="d-flex align-items-center mb-2">
           <div>
               <h6 class="mb-0">@yield('title')</h6>

           </div>

       </div>
    <div class="table-responsive">
      <table class="table align-middle mb-0 datatable">
       <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Umur</th>
          <th>Alasan</th>
          <th>Ekskul</th>
          {{-- <th>Pembina</th> --}}
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
            dom: 'Bfrtip',
        "buttons": [
            'excel', 'pdf', 'print'
        ],
            // scrollX: true,
        order: [[0, 'asc']],
            ajax: '{{ route('admin.get.cetak') }}',
            columns: [
                {data: 'id' },
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'telp', name: 'telp'},
                {data: 'umur', name: 'umur'},
                {data: 'alasan', name: 'alasan'},
                {data: 'ekskul', name: 'ekskul.name'},
            ]
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



