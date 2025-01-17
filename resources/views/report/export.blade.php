<table>
    <thead>
        <tr>
           <th style="background-color: #0D9488; color: white;">No</th>
           <th style="background-color: #0D9488; color: white;">Nama</th>
           <th style="background-color: #0D9488; color: white;">Pertanyaan</th>
           <th style="background-color: #0D9488; color: white;">Jenis</th>
           <th style="background-color: #0D9488; color: white;">Bagian</th>
           <th style="background-color: #0D9488; color: white;">Jawaban</th>
           <th style="background-color: #0D9488; color: white;">Poin</th>
        </tr>
     </thead>
     <tbody>
         @foreach($pertanyaan as $row)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $row->name}}</td>
           <td>{{ $row->pertanyaan}}</td>
           <td>{{ $row->jenis}}</td>
           <td>Bagian {{ $row->bagian}}</td>
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
           <td>{{ $label_jawaban }}</td>
           <td>{{ $row->jawaban ?? '-'}}</td>
        </tr>
        @endforeach
     </tbody>
</table>