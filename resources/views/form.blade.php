<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ardhiyana | form biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
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
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tugas Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontak">Biodata</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Form -->
    <div class="container">
      <form name="Form" method="post" onsubmit="return validateForm()" action="/kontak">
      @csrf
        <h4 class="text-center">Input Biodata</h4>
        <div class="box">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="masukkan nama anda" name="name" id="name" />
          <div class="error" id="nameErr"></div>
        </div>
        <div class="box">
          <label>NIM</label>
          <input type="text" placeholder="masukkan nim anda" name="nim" id="nim" />
          <div class="error" id="nimErr"></div>
        </div>
        <div class="box">
          <label for="gender">Jenis Kelamin</label>
          <div class="form-inline" id="gender">
            <label><input type="radio" name="gender" value="Laki-Laki" /> Laki-laki</label>
            <label><input type="radio" name="gender" value="Perempuan" /> Perempuan</label>
          </div>
          <div class="error" id="genderErr"></div>
        </div>
        <div class="box">
          <label>Alamat Email</label>
          <input type="text" placeholder="masukkan email anda" name="email" id="email" />
          <div class="error" id="emailErr"></div>
        </div>
        <div class="box">
          <label>Agama</label>
          <select name="agama" id="agama">
            <option>Pilih</option>
            <option>Hindu</option>
            <option>Islam</option>
            <option>Budha</option>
            <option>Katolik</option>
            <option>Protestan</option>
            <option>Konguchu</option>
          </select>
          <div class="error" id="agamaErr"></div>
        </div>
        <div class="box">
          <label>Program Studi</label>
          <select name="prodi" id="prodi">
            <option>Pilih</option>
            <option>Teknik Arsitektur</option>
            <option>Teknik Sipil</option>
            <option>Teknik Mesin</option>
            <option>Teknik Elektro</option>
            <option>Teknologi Informasi</option>
            <option>Teknik Industri</option>
            <option>Teknik Lingkungan</option>
          </select>
          <div class="error" id="prodiErr"></div>
        </div>
        <div class="box">
          <label>Hobi</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Olahraga" name="hobi[]" id="hobi" />
            <label class="form-check-label" for="flexCheckDefault">Olahraga</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Seni" name="hobi[]" id="hobi" />
            <label class="form-check-label" for="flexCheckChecked">Seni</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Bernyanyi" name="hobi[]" id="hobi" />
            <label class="form-check-label" for="flexCheckChecked">Bernyanyi</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Berkebun" name="hobi[]" id="hobi" />
            <label class="form-check-label" for="flexCheckChecked">Berkebun</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Belajar" name="hobi[]" id="hobi" />
            <label class="form-check-label" for="flexCheckChecked">Belajar</label>
          </div>
          <div class="error" id="hobiErr"></div>
        </div>
        <div class="box">
          <label>Alamat</label>
          <input type="text" placeholder="masukkan alamat anda" name="alamat" id="alamat" />
          <div class="error" id="alamatErr"></div>
        </div>

        <div class="box">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>


    <!-- Akhir form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
