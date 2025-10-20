<?php
// ==============================
// Tugas Praktikum 1 - Rekayasa Web
// ==============================

// 1. Buat variabel array lalu encode ke format JSON
echo "<h2>1. json_encode dari Array PHP</h2>";

$mahasiswa = array(
    "nama"    => "Awwalul Khoirul Khanif",
    "nim"     => "G231230029",
    "jurusan" => "Teknik Informatika",
    "umur"    => 21
);

echo "<b>Array PHP:</b><br><pre>";
print_r($mahasiswa);
echo "</pre>";

$jsonMahasiswa = json_encode($mahasiswa, JSON_PRETTY_PRINT);
echo "<b>Hasil JSON:</b><br><pre>$jsonMahasiswa</pre>";
echo "<hr>";


// 2. Buat variabel JSON lalu decode ke PHP Object & Array
echo "<h2>2. json_decode dari JSON String</h2>";

$jsondata = '{
    "nama":"Awwalul Khoirul Khanif",
    "nim":"G231230029",
    "jurusan":"Teknik Informatika",
    "umur":21
}';

echo "<b>JSON String:</b><br><pre>$jsondata</pre><br>";


// Decode ke Object
$obj = json_decode($jsondata);
echo "<b>Hasil decode ke Object:</b><br>";
echo "Nama    : " . $obj->nama . "<br>";
echo "NIM     : " . $obj->nim . "<br>";
echo "Jurusan : " . $obj->jurusan . "<br>";
echo "Umur    : " . $obj->umur . "<br><br>";


// Decode ke Array
$arr = json_decode($jsondata, true);
echo "<b>Hasil decode ke Array:</b><br>";
echo "Nama    : " . $arr["nama"] . "<br>";
echo "NIM     : " . $arr["nim"] . "<br>";
echo "Jurusan : " . $arr["jurusan"] . "<br>";
echo "Umur    : " . $arr["umur"] . "<br>";
?>
