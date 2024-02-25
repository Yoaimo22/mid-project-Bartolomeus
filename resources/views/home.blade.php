<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<p>Pencet button untuk menambah list </p>
<a href="/create_karyawan" type="" class="btn btn-dark">Create Button</a>
<div>
  <p>semua data di database </p>
  <table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Nama</th>
    <th scope="col">Umur</th>
    <th scope="col">Alamat</th>
    <th scope="col">Nomer telpon</th>

  </tr>
</thead>
<tbody>
  @forelse ($list_karyawan as $karyawan)
   <tr>
        
        <th scope="row">{{ $karyawan->id}}</th>
        <td>{{ $karyawan->nama}}</td>
        <td>{{ $karyawan->umur}}</td>
        <td>{{ $karyawan->alamat}}</td>
        <td>{{ $karyawan->no_telp}}</td>

        <th>  
          <form action ="/delete_karyawan/{{ $karyawan->id }}" method="post">
            @csrf
          <button type="submit" class="btn btn-danger" href="">Delete</button> 
        </form>
        </th>
        <th>  <a type="button" class="btn btn-warning" href="/update_karyawan_page/{{ $karyawan->id }}">Update</a> </th>
      </tr>
      @empty
      <p>Maaf data karyawan tidak ada</p>
   </tr>
   @endforelse
</tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>