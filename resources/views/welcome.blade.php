@extends('layouts.app') @section('content') <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Question</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Question</a>
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
                @if($cek_jawaban > 0)
                <div class="col-md-12">
                    <div class="alert alert-success p-2">
                        Terima kasih atas jawaban yang telah Anda kirimkan.
                    </div>
                </div>
                @endif
                {{ Form::open(['url'=>route('assessment.store'),'class'=>'form-horizontal','files'=>true])}}
                 <div class="col-md-12">
                    @foreach($questions as $question)
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">SOAL NO {{ $loop->iteration }}</h4>
                                        <span class="badge bg-primary" style="margin-top: -20px;">{{ $question->jenis }}</span>
                                    </div>
                                    <p>{{ $question->pertanyaan }}</p>

                                    <div class="">
                                        @php
                                            $jawaban = $question->jawaban; // Ambil relasi jawaban
                                            $isDisabled = $jawaban && $jawaban->jawaban ? 'disabled' : ''; // Periksa apakah jawaban ada
                                        @endphp
                                    
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="radio" name="jawaban_id_{{ $question->id }}" id="inlineRadio{{ $question->id }}_1" value="1" {{ ($jawaban && $jawaban->jawaban == 1) ? 'checked' : '' }} {{ $isDisabled }}>
                                            <label class="form-check-label" for="inlineRadio{{ $question->id }}_1">Tidak Pernah</label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="radio" name="jawaban_id_{{ $question->id }}" id="inlineRadio{{ $question->id }}_2" value="2" {{ ($jawaban && $jawaban->jawaban == 2) ? 'checked' : '' }} {{ $isDisabled }}>
                                            <label class="form-check-label" for="inlineRadio{{ $question->id }}_2">Jarang</label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="radio" name="jawaban_id_{{ $question->id }}" id="inlineRadio{{ $question->id }}_3" value="3" {{ ($jawaban && $jawaban->jawaban == 3) ? 'checked' : '' }} {{ $isDisabled }}>
                                            <label class="form-check-label" for="inlineRadio{{ $question->id }}_3">Kadang-kadang</label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="radio" name="jawaban_id_{{ $question->id }}" id="inlineRadio{{ $question->id }}_4" value="4" {{ ($jawaban && $jawaban->jawaban == 4) ? 'checked' : '' }} {{ $isDisabled }}>
                                            <label class="form-check-label" for="inlineRadio{{ $question->id }}_4">Sering</label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="radio" name="jawaban_id_{{ $question->id }}" id="inlineRadio{{ $question->id }}_5" value="5" {{ ($jawaban && $jawaban->jawaban == 5) ? 'checked' : '' }} {{ $isDisabled }}>
                                            <label class="form-check-label" for="inlineRadio{{ $question->id }}_5">Sangat Sering</label>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if($cek_jawaban == 0)
                    <div class="form-group">
                        <button class="btn btn-primary">Kirim</button>
                    </div>
                    @endif
                 </div>
                 {{ Form::close() }}

              </div>

                <!--/ List DataTable -->
            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div> @endsection