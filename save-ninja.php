<?php
// Debug: Periksa metode permintaan
echo "<pre>";
echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "\n";
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Print received POST data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Ambil nilai dari form
    $ninjaId = $_POST['ninja-id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $negara = $_POST['negara'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $telepon = $_POST['telepon'];
    $metodePembayaran = $_POST['metode-pembayaran'];

    // Format data yang akan disimpan
    $data = "ID Ninja: $ninjaId\n";
    $data .= "Nama: $nama\n";
    $data .= "Jumlah yang dibeli: $jumlah\n";
    $data .= "Alamat: $alamat\n";
    $data .= "Negara: $negara\n";
    $data .= "Kabupaten/Kota: $kabupaten\n";
    $data .= "Provinsi: $provinsi\n";
    $data .= "Nomor Telepon: $telepon\n";
    $data .= "Metode Pembayaran: $metodePembayaran\n";
    $data .= "----------------------------------------\n";

    // Debug: Periksa apakah file dapat ditulis
    $file = 'ninja-data.txt';
    if (is_writable($file)) {
        if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
            echo "Ninja dengan ID $ninjaId berhasil dibeli dan informasi pembelian telah disimpan.<br>";
        } else {
            echo "Terjadi kesalahan saat menyimpan data.<br>";
        }
    } else {
        echo "File $file tidak dapat ditulis.<br>";
        echo "Periksa izin file.<br>";
    }
} else {
    echo "This script only handles POST requests.";
}
?>
