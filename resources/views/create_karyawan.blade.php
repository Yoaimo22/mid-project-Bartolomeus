<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Karyawan</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <form method="POST" action="/post-create_karyawan">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama </label>
          <input type="text" name="karyawan_nama_input"class="form-control"  aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
          @error('karyawan_nama_input')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur </label>
            <input type="number" name="karyawan_umur_input" class="form-control"  aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
            @error('karyawan_umur_input')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat </label>
            <input type="text" name="karyawan_alamat_input"class="form-control"  aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
            @error('karyawan_alamat_input')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No.Telpon</label>
            <input type="number" name="karyawan_no_telp"class="form-control" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
            @error('karyawan_no_telp')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</html>