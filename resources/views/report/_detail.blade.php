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
                 <th>Jawaban</th>
              </tr>
           </thead>
           <tbody>
               @foreach($pertanyaan as $row)
              <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $row->pertanyaan}}</td>
                 <td class="text-center">{{ $row->jawaban ?? '-'}}</td>
              </tr>
              @endforeach
           </tbody>
        </table>
     </div>
</div>