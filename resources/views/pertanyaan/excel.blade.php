<table>
    <thead>
        <tr>
           <th style="background-color: #0D9488; color: white;">No</th>
           <th style="background-color: #0D9488; color: white;">Pertanyaan</th>
           <th style="background-color: #0D9488; color: white;">Jenis</th>
        </tr>
     </thead>
     <tbody>
         @foreach($pertanyaan as $row)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $row->pertanyaan}}</td>
           <td>{{ $row->jenis}}</td>
        </tr>
        @endforeach
     </tbody>
</table>