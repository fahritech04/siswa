<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>

 {{-- CDN Bootstrap --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

 {{-- Navbar --}}
 <nav class="navbar navbar-expand navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="/siswa">Data Kelas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kelas">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nilai">Nilai</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 {{-- end nabar --}}

 {{-- table --}}
 <div class="container">
 <table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>XII RPL</td>
      <td>
       <a href="#" class="btn btn-warning">Edit</a>
       <a href="#" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
 {{-- end table --}}

</body>
</html>