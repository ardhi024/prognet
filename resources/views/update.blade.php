<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ardhiyana | Update</title>
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
      <form name="Form" method="post" onsubmit="return validateForm()" action="/kontak/{{$kontak->id}}">
      @csrf
      @method('PUT')
        <h4 class="text-center">Input Biodata</h4>
        <div class="box">
          <label>Nama Lengkap</label>
          <input type="text" value="{{$kontak->nama}}" name="nama" id="nama" />
          <div class="error" id="nameErr"></div>
        </div>
        <div class="box">
          <label>NIM</label>
          <input type="text" value="{{$kontak->nim}}" name="nim" id="nim" />
          <div class="error" id="nimErr"></div>
        </div>
        <div class="box">
          <label>Jenis Kelamin</label>
          <div class="form-inline" id="gender">
            <label><input type="radio" name="gender" value="Laki-Laki" @if ($kontak->gender == 'Laki-Laki'){{"checked"}} @endif>Laki-Laki</label>
            <label><input type="radio" name="gender" value="Perempuan" @if ($kontak->gender == 'Perempuan'){{"checked"}} @endif> Perempuan</label>
          </div>
          <div class="error" id="genderErr"></div>
        </div>
        <div class="box">
          <label>Alamat Email</label>
          <input type="text" value="{{$kontak->email}}" name="email" id="email" />
          <div class="error" id="emailErr"></div>
        </div>
        <div class="box">
          <label>Agama</label>
          <select name="agama" id="agama">
            <option>Pilih</option>
            <option value="Hindu" @if ($kontak->agama == 'Hindu'){{"selected"}} @endif>Hindu</option>
            <option value="Islam" @if ($kontak->agama == 'Islam'){{"selected"}} @endif>Islam</option>
            <option value="Budha" @if ($kontak->agama == 'Budha'){{"selected"}} @endif>Budha</option>
            <option value="Katolik" @if ($kontak->agama == 'Katolik'){{"selected"}} @endif>Katolik</option>
            <option value="Protestan" @if ($kontak->agama == 'Protestan'){{"selected"}} @endif>Protestan</option>
            <option value="Konguchu" @if ($kontak->agama == 'Konguchu'){{"selected"}} @endif>Konguchu</option>
          </select>
          <div class="error" id="agamaErr"></div>
        </div>
        <div class="box">
          <label>Program Studi</label>
          <select name="prodi" id="prodi">
            <option>Pilih</option>
            <option value="Teknik Arsitektur" @if ($kontak->prodi == 'Teknik Arsitektur'){{"selected"}} @endif>Teknik Arsitektur</option>
            <option value="Teknik Sipil" @if ($kontak->prodi == 'Teknik Sipil'){{"selected"}} @endif>Teknik Sipil</option>
            <option value="Teknik Mesin" @if ($kontak->prodi == 'Teknik Mesin'){{"selected"}} @endif>Teknik Mesin</option>
            <option value="Teknik Elektro" @if ($kontak->prodi == 'Teknik Elektro'){{"selected"}} @endif>Teknik Elektro</option>
            <option value="Teknologi Informasi" @if ($kontak->prodi == 'Teknologi Informasi'){{"selected"}} @endif>Teknologi Informasi</option>
            <option value="Teknik Industri" @if ($kontak->prodi == 'Teknik Industri'){{"selected"}} @endif>Teknik Industri</option>
            <option value="Teknik Lingkungan" @if ($kontak->prodi == 'Teknik Lingkungan'){{"selected"}} @endif>Teknik Lingkungan</option>
          </select>
          <div class="error" id="prodiErr"></div>
        </div>
        <div class="box">
          <label>Hobi</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox"  name="hobi[]" id="hobi" value="Olahraga" @if (strpos($kontak->hobi, 'Olahraga') !== false) {{ "checked"}} @endif />
            <label class="form-check-label" for="flexCheckDefault">Olahraga</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Seni" @if (strpos($kontak->hobi, 'Seni') !== false) {{ "checked"}} @endif/>
            <label class="form-check-label" for="flexCheckChecked">Seni</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Bernyanyi" @if (strpos($kontak->hobi, 'Bernyanyi') !== false) {{ "checked"}} @endif/>
            <label class="form-check-label" for="flexCheckChecked">Bernyanyi</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Berkebun" @if (strpos($kontak->hobi, 'Berkebun') !== false) {{ "checked"}} @endif/>
            <label class="form-check-label" for="flexCheckChecked">Berkebun</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi" value="Belajar" @if (strpos($kontak->hobi, 'Belajar') !== false) {{ "checked"}} @endif/>
            <label class="form-check-label" for="flexCheckChecked">Belajar</label>
          </div>
          <div class="error" id="hobiErr"></div>
        </div>
        <div class="box">
          <label>Alamat</label>
          <input type="text" value="{{$kontak->alamat}}" name="alamat" id="alamat" />
          <div class="error" id="alamatErr"></div>
        </div>

        <div class="box">
          <input type="submit" name="simpan" value="Simpan" />
        </div>
      </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>


    <!-- Akhir form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>