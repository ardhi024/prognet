<?php
    include 'koneksi.php';
    $id = $_GET['id_data'];
    $adata = mysqli_query($koneksi, "SELECT * FROM form WHERE id_data=$id");
    $data = mysqli_fetch_array($adata);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ardhiyana | Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" />
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
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tugas Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="proses_form.php">Biodata</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Form -->
    <div class="container">
      <form name="Form" method="post" onsubmit="return validateForm()" action="">
        <h4 class="text-center">Input Biodata</h4>
        <input type="hidden" name="id_data" value="<?php echo $data['id_data'] ?>">
        <div class="box">
          <label>Nama Lengkap</label>
          <input type="text" value="<?php echo $data['nama'] ?>" name="nama" id="nama" />
          <div class="error" id="nameErr"></div>
        </div>
        <div class="box">
          <label>NIM</label>
          <input type="text" value="<?php echo $data['nim'] ?>" name="nim" id="nim" />
          <div class="error" id="nimErr"></div>
        </div>
        <div class="box">
          <label>Jenis Kelamin</label>
          <div class="form-inline" id="gender">
            <label><input type="radio" name="gender" value="Laki-Laki" <?php if($data['jenis_kelamin']=='Laki-Laki') echo 'checked'?>> Laki-Laki</label>
            <label><input type="radio" name="gender" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan') echo 'checked'?>> Perempuan</label>
          </div>
          <div class="error" id="genderErr"></div>
        </div>
        <div class="box">
          <label>Alamat Email</label>
          <input type="text" value="<?php echo $data['alamat_email'] ?>" name="email" id="email" />
          <div class="error" id="emailErr"></div>
        </div>
        <div class="box">
          <label>Agama</label>
          <select name="agama" id="agama">
            <option>Pilih</option>
            <option value="Hindu" <?php if ($data["agama"] === "Hindu") echo "selected"; ?>>Hindu</option>
            <option value="Islam" <?php if ($data["agama"] === "Islam") echo "selected"; ?>>Islam</option>
            <option value="Budha" <?php if ($data["agama"] === "Budha") echo "selected"; ?>>Budha</option>
            <option value="Katolik" <?php if ($data["agama"] === "Katolik") echo "selected"; ?>>Katolik</option>
            <option value="Protestan" <?php if ($data["agama"] === "Protestan") echo "selected"; ?>>Protestan</option>
            <option value="Konguchu" <?php if ($data["agama"] === "Konguchu") echo "selected"; ?>>Konguchu</option>
          </select>
          <div class="error" id="agamaErr"></div>
        </div>
        <div class="box">
          <label>Program Studi</label>
          <select name="prodi" id="prodi">
            <option>Pilih</option>
            <option value="Teknik Arsitektur" <?php if ($data["program_studi"] === "Teknik Arsitektur") echo "selected"; ?>>Teknik Arsitektur</option>
            <option value="Teknik Sipil" <?php if ($data["program_studi"] === "Teknik Sipil") echo "selected"; ?>>Teknik Sipil</option>
            <option value="Teknik Mesin" <?php if ($data["program_studi"] === "Teknik Mesin") echo "selected"; ?>>Teknik Mesin</option>
            <option value="Teknik Elektro" <?php if ($data["program_studi"] === "Teknik Elektro") echo "selected"; ?>>Teknik Elektro</option>
            <option value="Teknologi Informasi" <?php if ($data["program_studi"] === "Teknologi Informasi") echo "selected"; ?>>Teknologi Informasi</option>
            <option value="Teknik Industri" <?php if ($data["program_studi"] === "Teknik Industri") echo "selected"; ?>>Teknik Industri</option>
            <option value="Teknik Lingkungan" <?php if ($data["program_studi"] === "Teknik Lingkungan") echo "selected"; ?>>Teknik Lingkungan</option>
          </select>
          <div class="error" id="prodiErr"></div>
        </div>
        <div class="box">
          <label>Hobi</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox"  name="hobi[]" id="hobi" value="Olahraga" <?php if (strpos($data["hobi"], "Olahraga") !== false) echo "checked"; ?> />
            <label class="form-check-label" for="flexCheckDefault">Olahraga</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Seni" <?php if (strpos($data["hobi"], "Seni") !== false) echo "checked"; ?>/>
            <label class="form-check-label" for="flexCheckChecked">Seni</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Bernyanyi" <?php if (strpos($data["hobi"], "Bernyanyi") !== false) echo "checked"; ?>/>
            <label class="form-check-label" for="flexCheckChecked">Bernyanyi</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Berkebun" <?php if (strpos($data["hobi"], "Berkebun") !== false) echo "checked"; ?>/>
            <label class="form-check-label" for="flexCheckChecked">Berkebun</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Belajar" <?php if (strpos($data["hobi"], "Belajar") !== false) echo "checked"; ?>/>
            <label class="form-check-label" for="flexCheckChecked">Belajar</label>
          </div>
          <div class="error" id="hobiErr"></div>
        </div>
        <div class="box">
          <label>Alamat</label>
          <input type="text" value="<?php echo $data['alamat'] ?>" name="alamat" id="alamat" />
          <div class="error" id="alamatErr"></div>
        </div>

        <div class="box">
          <input type="submit" name="simpan" value="Simpan" />
        </div>
      </form>
    </div>
    <script src="script.js"></script>

    <!-- Akhir form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<?php
        include 'koneksi.php';
        if(isset($_POST['simpan'])){
            $id_data = $_POST['id_data'];
            $Nama = $_POST['nama'];
            $Nim = $_POST['nim'];
            $Gender = $_POST['gender'];
            $Email = $_POST['email'];
            $Agama = $_POST['agama'];
            $Prodi = $_POST['prodi'];
            $Hobi = isset($_POST["hobi"]) ? implode(',',$_POST["hobi"]):"";
            $Alamat = $_POST['alamat'];
            mysqli_query($koneksi, "UPDATE form 
            SET nama='$Nama', nim='$Nim', jenis_kelamin='$Gender', alamat_email='$Email', agama='$Agama' , 
            program_studi='$Prodi', hobi='$Hobi', alamat='$Alamat'
            WHERE id_data='$id_data'") or die(mysqli_error($koneksi));
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/TUGAS/proses_form.php'>";
        }
?>