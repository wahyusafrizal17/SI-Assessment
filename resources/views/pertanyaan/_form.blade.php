<div class="card-body">

    <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Pertanyaan</label>
      <div class="col-sm-10">
         {{ Form::text('pertanyaan',null,['class'=>'form-control','placeholder'=>'Pertanyaan'])}}
         @if ($errors->has('pertanyaan')) <span class="help-block" style="color:red">{{ $errors->first('pertanyaan') }}</span> @endif
      </div>
  </div>
  
  <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis</label>
      <div class="col-sm-10">
         {{ Form::text('jenis',null,['class'=>'form-control','placeholder'=>'Jenis'])}}
         @if ($errors->has('jenis')) <span class="help-block" style="color:red">{{ $errors->first('jenis') }}</span> @endif
      </div>
  </div>


  <div class="form-group row mt-2">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Bagian</label>
      <div class="col-sm-10">
         {{ Form::text('bagian',null,['class'=>'form-control','placeholder'=>'Bagian'])}}
         @if ($errors->has('bagian')) <span class="help-block" style="color:red">{{ $errors->first('bagian') }}</span> @endif
      </div>
  </div>
  
  
  </div>
  
  <div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('pertanyaan.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>