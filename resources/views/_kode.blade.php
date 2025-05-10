@extends('layouts.app') 
@section('content') 
<style>
    .swal-text{
        text-align: center;
    }
</style>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Kode</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Kode</a>
                                </li>
                                <li class="breadcrumb-item active">index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="content-body">
            <div class="alert alert-warning p-2">
                <p><strong><i data-feather='alert-circle'></i> Pemberitahuan!</strong> Mohon masukkan kode terlebih dahulu.</p>
            </div>
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
              <div class="card">
                <div class="card-body">
                    {{ Form::text('kode', null, ['class' => 'form-control v_kode', 'placeholder' => 'Masukkan kode']) }}
                    <div class="mt-2" align="right">
                        <button class="btn btn-success" onclick="submitKode()">Submit</button>
                    </div>
                </div>
              </div>
            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div> 
@endsection

@push('scripts')
<script>
    function submitKode() {
    let kode = $('.v_kode').val();

    $.ajax({
        url: '{{ route("jadwal.submit-kode") }}', // Ganti dengan route yang sesuai
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            kode: kode
        },
        success: function(response) {

            console.log(response);
            // // Berhasil
            // alert('Kode berhasil disimpan.');
            // $('#exampleModal').modal('hide');
            // location.reload(); // Atau redirect jika perlu
        },
        error: function(xhr) {
            // Gagal
            alert('Terjadi kesalahan. Coba lagi.');
        }
    });
}


</script>
@endpush
