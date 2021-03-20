<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Home</title>
</head>
<body>

  <a href="{{ url('/tambah') }}">Tambah Data</a>
<table class="table" style="border: 1px solid black;">
  <thead>
    <tr style="border: 1px solid black;">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Foto</th>
      <th scope="col">Alamat Tinggal</th>
      <th scope="col">ID Kecamatan</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_artis as $artis)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $artis->nama }}</td>
      <td>{{ $artis->tempat_lahir }}</td>
      <td>{{ $artis->tanggal_lahir }}</td>
      <td>{{ $artis->foto }}</td>
      <td>{{ $artis->alamat_tinggal }}</td>
      <td>{{ $artis->id_kecamatan }}</td>
    </tr>
  </tbody>
  @endforeach
</table>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>