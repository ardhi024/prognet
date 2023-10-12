<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css" />
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
              <a class="nav-link active" aria-current="page" href="form.html">Tugas Javascript</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="biodata.txt">File txt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->  

<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $name = $_POST["name"];
        $nim = $_POST["nim"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $agama = $_POST["agama"];
        $prodi = $_POST["prodi"];     
        $alamat = $_POST["alamat"];

        // Display the submitted data
        
        
        $biodata = [
            "Nama : $name",
            "NIM: $nim",
            "Jenis Kelamin: $gender",
            "Email: $email",
            "Agama: $agama",
            "Program Studi: $prodi",
        ];
        if (isset($_POST['hobi'])) {
            $biodata[] = "Hobi : ";
            $selectedValues = $_POST['hobi'];
            
            foreach ($selectedValues as $value) {
                $biodata[] = "- $value";
            }
        
        } else {
            echo "Hobi : -";
        }
        $biodata[] = "Alamat: $alamat";
    // Create a string with form data
    $biodataString = implode("\n", $biodata);

    // Write form data to a text file
    $fileName = "biodata.txt";
    $biodataString .= "\n======================================\n";
    // file_put_contents($fileName, $formDataString);
    file_put_contents($fileName, $biodataString, FILE_APPEND);
 
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>

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
                    </tr>
                </thead>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $nim; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $agama; ?></td>
                    <td><?php echo $prodi; ?></td>
                    <td><?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['hobi'])) {
                                $selectedValues = $_POST['hobi'];
                                
                                foreach ($selectedValues as $value) {
                                    echo "$value" ."<br>";
                                }
                            
                            } else {
                                echo "-";
                            }
                        }
                    ?></td>
                    <td><?php echo $alamat; ?></td>
              </tr>
              
          </table>
        </div>
      </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>