<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style4.css" />
  </head>
  <body>
   <!--navigasi-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Ardhiyana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Biodata</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->  



<section id="action">
    <div class="container text-light pt-5">
        <div class="row text-center mb-3">
            <div class="col pt-5">
                <h2>Biodata</h2>
            </div>
            <table class="table text-light table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Hobi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action Edit</th>
                        <th scope="col">Action Delete</th>
                    </tr>

                    @foreach ($data as $kontak)
                      <tr>
                        <td>{{$kontak->nama}}</td>
                        <td>{{$kontak->nim}}</td>
                        <td>{{$kontak->gender}}</td>
                        <td>{{$kontak->email}}</td>
                        <td>{{$kontak->agama}}</td>
                        <td>{{$kontak->prodi}}</td>
                        <td>{{$kontak->hobi}}</td>
                        <td>{{$kontak->alamat}}</td>
                        <td>
                          <form action="/kontak/{{$kontak->id}}/edit" method="get">
                            <button type="submit" class="btn btn-warning">Edit</button>
                          </form>
                        </td>
                        <td>
                        <form action="/kontak/{{$kontak->id}}" method="post">
                          @csrf
                          @method('Delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                </thead>

              
          </table>
          <form action="/kontak/create" method="get">
          <button type="submit" class="btn btn-success">Input Baru</button>
          </form>
        </div>
      </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>