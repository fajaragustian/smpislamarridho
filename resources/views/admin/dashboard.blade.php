@extends('layouts.admin.app')
@section('title', 'Dashboard Admin')
@prepend('css')
@endprepend
@section('content')
  <!--start page wrapper -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
           <div class="col">
             <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Post</p>
                            <h4 class="my-1 text-info">{{ $post->count() }}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-blanket'></i>
                        </div>
                    </div>
                </div>
             </div>
           </div>
           <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Users</p>
                           <h4 class="my-1 text-danger">{{ $user->count() }}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-user'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-success">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Galeri</p>
                           <h4 class="my-1 text-success">{{ $galeri->count() }}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bx-devices' ></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
               <div class="card-body">
                   <div class="d-flex align-items-center">
                       <div>
                           <p class="mb-0 text-secondary">Total Ekskul</p>
                           <h4 class="my-1 text-warning">{{ $ekskul->count() }}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                       </div>
                   </div>
               </div>
            </div>
          </div>
        </div>
        <!--end row-->
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
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telp</th>
                  <th>Umur</th>
                  <th>Alasan</th>
                  <th>Ekskul</th>
                  <th>Action</th>

                  {{-- <th>Pembina</th> --}}
                  {{-- <th>Action</th> --}}
                </tr>
                </thead>
                <tbody>

               </tbody>
             </table>
             </div>
            </div>
        </div>
        {{-- Table End --}}
<!--end page wrapper -->

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
            ajax: '{{ route('admin.get.user') }}',
            columns: [
                {data: 'id' },
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'telp', name: 'telp'},
                {data: 'umur', name: 'umur'},
                {data: 'alasan', name: 'alasan'},
                {data: 'ekskul', name: 'ekskul.name'},
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
            url : "{{route('admin.user.delete')}}",
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


