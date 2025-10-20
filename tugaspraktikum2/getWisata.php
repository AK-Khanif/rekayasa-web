<?php
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "tugaspraktikum2");

// Cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil semua data dari tabel wisata
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);

// Ubah hasil query menjadi array
$json_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}

// Tampilkan hasil dalam format JSON
echo json_encode($json_array, JSON_PRETTY_PRINT);
?>
