@extends('layouts.app')
@section('title','Manage Jadwal')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Jadwal</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Jadwal</a>
                                </li>
                                <li class="breadcrumb-item active">index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Pilih Jadwal</h4>
                          </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Tanggal</th>
                                          <th>Keterangan</th>
                                          <th style="width: 20%" class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jadwal as $row)
                                       <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>{{ \Carbon\Carbon::parse($row->tanggal)->translatedFormat('d F Y') }}</td>
                                          <td>{{ $row->keterangan}}</td>
                                         <td class="text-center">
                                             <div class="form-button-action">
                                                <button type="button" class="btn btn-link btn-primary btn-sm pilih-jawaban" data-id="{{ $row->id }}">
                                                  <i data-feather='check-square'></i>
                                               </button>
                                             </div>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                    <!--/ List DataTable -->
                </section>
                <!-- Dashboard Analytics end -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masukkan Kode</h5>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" class="v_jadwal_id">
                                {{ Form::text('kode', null, ['class' => 'form-control v_kode', 'placeholder' => 'Masukkan kode']) }}
                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                <button type="button" class="btn btn-primary" onclick="submitKode()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('scripts')
<script>
$(document).ready(function() {

   $('.pilih-jawaban').click(function(e) {
      var id = $(this).data('id'); 

      $('.v_jadwal_id').val(id);
      
      $('#exampleModal').modal('show');

   });

});

function submitKode() {
    let kode = $('.v_kode').val();
    let jadwal_id = $('.v_jadwal_id').val();

    $.ajax({
        url: '{{ route("jadwal.submit-kode") }}',
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            kode: kode,
            jadwal_id: jadwal_id
        },
        success: function(response) {
            if (response.status === 'success') {
                swal({
                    icon: 'success',
                    title: 'Berhasil',
                    text: response.message
                }).then(() => {
                    $('#exampleModal').modal('hide');
                    window.location.href = '/';
                });
            } else if (response.status === 'warning') {
                swal({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: response.message
                });
            } else if (response.status === 'info') {
                swal({
                    icon: 'info',
                    title: 'Info',
                    text: response.message
                });
            } else {
                swal({
                    icon: 'error',
                    title: 'Error',
                    text: response.message
                });
            }
        },
        error: function(xhr) {
            swal({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan. Silakan coba lagi.'
            });
        }
    });
}

</script>
@endpush