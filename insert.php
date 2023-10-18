<?php
include 'koneksi.php';
$Nama = $_POST['name'];
$Nim = $_POST['nim'];
$Gender = $_POST['gender'];
$Email = $_POST['email'];
$Agama = $_POST['agama'];
$Prodi = $_POST['prodi'];
$Hobi = isset($_POST["hobi"]) ? implode(',',$_POST["hobi"]):"";
$Alamat = $_POST['alamat'];

$query = "INSERT INTO form (nama, nim, jenis_kelamin, alamat_email, agama, program_studi, hobi, alamat) VALUES('$Nama', '$Nim', '$Gender', '$Email', '$Agama', '$Prodi', '$Hobi', '$Alamat')";
$result=mysqli_query($koneksi, $query);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    <strong> Sukses..!</strong> Data Berhasil Tersimpan.
    </div>';
    // echo '<meta http-equiv="refresh" content="3;url=formulir.html">';
}else{
    echo "silakan input ulang";
}
mysqli_close($koneksi)
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Success</title>
    </head>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>      
        </svg>   
        <section class="success">
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="" height="" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            </div>
            <h3 class="text-center">Successfully</h3>
            <div class="text-center">
            <button type="submit" class="btn btn-warning mb-3" >
                <a href="proses_form.php" id="contBtn" class="text-center text-decoration-none text-dark">Kembali ke beranda</a>
            </button>
            </div>
        
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>