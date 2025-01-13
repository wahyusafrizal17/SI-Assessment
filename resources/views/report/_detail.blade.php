<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
    <a href="{{ route('report.excel', ['user_id' => $user_id]) }}" class="btn btn-primary btn-sm">Export</a>
</div>
<div class="modal-body">
    <div class="table-responsive">
        <table id="basic-datatables" class="display table table-striped table-hover">
           <thead>
              <tr>
                 <th style="width: 5%">No</th>
                 <th>Pertanyaan</th>
                 <th width="200">Jawaban</th>
                 <th>Poin</th>
              </tr>
           </thead>
           <tbody>
               @foreach($pertanyaan as $row)
              <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $row->pertanyaan}}</td>
                 <?php
                     $label_jawaban = 'Tidak pernah';
                     if($row->jawaban == 2){
                         $label_jawaban = 'Jarang';
                     }elseif($row->jawaban == 3){
                         $label_jawaban = 'Kadang-kadang';
                     }elseif($row->jawaban == 4){
                         $label_jawaban = 'Sering';
                     }else{
                         $label_jawaban = 'Sangat sering';
                     }
                 ?>
                 <td>{{ $label_jawaban}}</td>
                 <td class="text-center">{{ $row->jawaban ?? '-'}}</td>
              </tr>
              @endforeach
           </tbody>
        </table>
     </div>
</div>