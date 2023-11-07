function printError(Id, Msg) {
  document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {
  var name = document.Form.name.value;
  var nim = document.Form.nim.value;
  var email = document.Form.email.value;
  var agama = document.Form.agama.value;
  var prodi = document.Form.prodi.value;
  var alamat = document.Form.alamat.value;
  var gender = document.Form.gender.value;

  var nameErr = (nimErr = emailErr = agamaErr = prodiErr = alamatErr = genderErr = true);

  if (name == '') {
    printError('nameErr', 'Tolong masukkan nama anda');
    var elem = document.getElementById('name');
    elem.classList.add('input-2');
    elem.classList.remove('input-1');
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) {
      printError('nameErr', 'Tolong masukkan nama yang valid');
      var elem = document.getElementById('name');
      elem.classList.add('input-2');
      elem.classList.remove('input-1');
    } else {
      printError('nameErr', '');
      nameErr = false;
      var elem = document.getElementById('name');
      elem.classList.add('input-1');
      elem.classList.remove('input-2');
    }
  }

  if (nim == '') {
    printError('nimErr', 'Tolong masukkan nim anda');
    var elem = document.getElementById('nim');
    elem.classList.add('input-2');
    elem.classList.remove('input-1');
  } else {
    var regex = /^\d{10,}$/;
    if (regex.test(nim) === false) {
      printError('nimErr', 'Tolong masukkan nim yang valid');
      var elem = document.getElementById('nim');
      elem.classList.add('input-2');
      elem.classList.remove('input-1');
    } else {
      printError('nim', '');
      nimErr = false;
      var elem = document.getElementById('nim');
      elem.classList.add('input-1');
      elem.classList.remove('input-2');
    }
  }

  if (email == '') {
    printError('emailErr', 'Tolong masukkan email anda');
    var elem = document.getElementById('email');
    elem.classList.add('input-2');
    elem.classList.remove('input-1');
  } else {
    var regex = /^\S+@\S+\.\S+$/;
    if (regex.test(email) === false) {
      printError('emailErr', 'Tolong masukkan email yang valid');
      var elem = document.getElementById('email');
      elem.classList.add('input-2');
      elem.classList.remove('input-1');
    } else {
      printError('emailErr', '');
      emailErr = false;
      var elem = document.getElementById('email');
      elem.classList.add('input-1');
      elem.classList.remove('input-2');
    }
  }

  if (agama == 'Pilih') {
    printError('agamaErr', 'Tolong pilih agama anda');
    var elem = document.getElementById('agama');
    elem.classList.add('input-4');
    elem.classList.remove('input-3');
  } else {
    printError('agamaErr', '');
    agamaErr = false;
    var elem = document.getElementById('agama');
    elem.classList.add('input-3');
    elem.classList.remove('input-4');
  }
  if (prodi == 'Pilih') {
    printError('prodiErr', 'Silakan pilih program studi anda');
    var elem = document.getElementById('prodi');
    elem.classList.add('input-4');
    elem.classList.remove('input-3');
  } else {
    printError('prodiErr', '');
    prodiErr = false;
    var elem = document.getElementById('prodi');
    elem.classList.add('input-3');
    elem.classList.remove('input-4');
  }
  if (alamat == '') {
    printError('alamatErr', 'Tolong tulis alamat anda');
    var elem = document.getElementById('alamat');
    elem.classList.add('input-2');
    elem.classList.remove('input-1');
  } else {
    printError('alamatErr', '');
    alamatErr = false;
    var elem = document.getElementById('alamat');
    elem.classList.add('input-1');
    elem.classList.remove('input-2');
  }
  if (gender == '') {
    printError('genderErr', 'Tolong pilih salah satu');
    var elem = document.getElementById('gender');
    elem.classList.add('input-4');
    elem.classList.remove('input-3');
  } else {
    printError('genderErr', '');
    genderErr = false;
    var elem = document.getElementById('gender');
    elem.classList.add('input-3');
    elem.classList.remove('input-4');
  }

  if ((nameErr || nimErr || emailErr || agamaErr || prodiErr || alamatErr || genderErr) == true) {
    return false;
  }
}
