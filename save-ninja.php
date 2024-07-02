<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Simpan data ke dalam file ninja-data.txt
    $file = 'ninja-data.txt';
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Ninja dengan ID $ninjaId berhasil dibeli dan informasi pembelian telah disimpan.<br>";
    } else {
        echo "Terjadi kesalahan saat menyimpan data.<br>";
    }
} else {
    echo "This script only handles POST requests.";
}
?>
