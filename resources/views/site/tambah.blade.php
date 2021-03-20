<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Home</title>
</head>
<body>


  <h1>Tambah Data</h1>

  <form>
    <div class="form-group">
      <label for="exampleInputNama">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputTempatLahir">Tempat Lahir</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="exampleInputTempatLahir">Tanggal Lahir</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="exampleInputTempatLahir">Alamat Tinggal</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>