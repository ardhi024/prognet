<?php
    include "koneksi.php";
    $id = $_GET['id_data'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM form WHERE id_data='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/TUGAS/proses_form.php'>";
?>