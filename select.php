<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ardhiyana | Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css" />
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Ardhiyana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form.html">Tugas Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="proses_form.php">Biodata</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    

    <section id="action">
      <div class="container text-light ">
        <div class="row text-center mb-3 pt-5">
          <div class="col pt-5">
            <h2>Tabel Biodata</h2>
          </div>
          <table class="table text-light table-bordered">
            <?php 
            include 'koneksi.php'; 
            $id = $_GET['id_data'];
            $ambilData = mysqli_query($koneksi, "SELECT * FROM form WHERE id_data='$id'");
            while($d = mysqli_fetch_array($ambilData)){
              ?>
              <tr>
                <th scope="col">Nama</th><td><?php echo $d['nama']; ?></td>
              </tr>
              <tr>
                <th scope="col">NIM</th><td><?php echo $d['nim']; ?></td>
              </tr>
              <tr>
                <th scope="col">Jenis Kelamin</th><td><?php echo $d['jenis_kelamin']; ?></td>
              </tr>
              <tr>
                <th scope="col">Email</th><td><?php echo $d['alamat_email']; ?></td>
              </tr>
              <tr>
                <th scope="col">Agama</th><td><?php echo $d['agama']; ?></td>
              </tr>
              <tr>
                <th scope="col">Program Studi</th><td><?php echo $d['program_studi']; ?></td>
              </tr>
              <tr>
                <th scope="col">Hobi</th><td><?php echo $d['hobi']; ?></td>
              </tr>
              <tr>
                <th scope="col">Alamat</th><td><?php echo $d['alamat']; ?></td>
              </tr>
              <?php 
            }
            ?>
          </table>
        </div>
      </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>  

 