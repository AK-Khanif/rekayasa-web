<?php
// Fungsi untuk mengambil data JSON dari URL menggunakan cURL
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);

    if(curl_errno($ch)){
        echo "Error: " . curl_error($ch);
    }

    curl_close($ch);
    return $output;
}

// Ambil data dari getWisata.php
$send = curl("http://localhost/rekayasaweb/tugaspraktikum2/getWisata.php");

// Ubah hasil JSON menjadi array PHP
$data = json_decode($send, true);

// --- Tampilkan data wisata (versi teks biasa) ---
echo "<h2>Data Wisata (Format Teks)</h2>";
if (!empty($data)) {
    foreach($data as $row){
        echo "<b>ID Wisata:</b> " . htmlspecialchars($row["id_wisata"]) . "<br/>";
        echo "<b>Kota:</b> " . htmlspecialchars($row["kota"]) . "<br/>";
        echo "<b>Landmark:</b> " . htmlspecialchars($row["landmark"]) . "<br/>";
        echo "<b>Tarif:</b> " . htmlspecialchars($row["tarif"]) . "<br/><hr/>";
    }
} else {
    echo "Tidak ada data ditemukan atau file JSON tidak bisa diakses.";
}

// --- Tampilkan data dalam bentuk tabel HTML ---
echo "<h2>Data Wisata (Tabel HTML)</h2>";

if (!empty($data)) {
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<tr style='background-color: #f2f2f2; font-weight: bold;'>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
          </tr>";

    foreach($data as $row){
        echo "<tr>
                <td>".htmlspecialchars($row["kota"])."</td>
                <td>".htmlspecialchars($row["landmark"])."</td>
                <td>".htmlspecialchars($row["tarif"])."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada data untuk ditampilkan dalam tabel.</p>";
}
?>
