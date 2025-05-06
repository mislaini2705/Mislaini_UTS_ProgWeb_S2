<?php
// Cek apakah parameter 'nama' dikirim melalui URL
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); // Menghindari XSS
    echo "Halo, $nama!";
} else {
    echo "Halo, siapa namamu?"; //url untuk melakukan pemanggilan http://localhost/Soal_Menampikan_Halo_Mislaini%20!.php?nama=Mislaini
}
?>