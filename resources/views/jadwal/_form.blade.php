<div class="card-body">

    <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
      <div class="col-sm-10">
         {{ Form::text('kode',null,['class'=>'form-control','placeholder'=>'Kode'])}}
         @if ($errors->has('kode')) <span class="help-block" style="color:red">{{ $errors->first('kode') }}</span> @endif
      </div>
  </div>
  
  <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
         {{ Form::date('tanggal',null,['class'=>'form-control'])}}
         @if ($errors->has('tanggal')) <span class="help-block" style="color:red">{{ $errors->first('tanggal') }}</span> @endif
      </div>
  </div>


  <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
      <div class="col-sm-10">
         {{ Form::text('keterangan',null,['class'=>'form-control','placeholder'=>'Keterangan'])}}
         @if ($errors->has('keterangan')) <span class="help-block" style="color:red">{{ $errors->first('keterangan') }}</span> @endif
      </div>
  </div>
  
  
  </div>
  
  <div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('jadwal.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>