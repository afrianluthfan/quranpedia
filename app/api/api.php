<?php
// Koneksi ke database
$host = 'nama_host_database';
$username = 'nama_pengguna_database';
$password = 'kata_sandi_database';
$database = 'nama_database';

$connection = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($connection->connect_error) {
    die('Koneksi gagal: ' . $connection->connect_error);
}

// Query untuk mengambil data dari tabel shahih_muslim
$query = "SELECT id, arab FROM shahih_muslim";
$result = $connection->query($query);

// Ubah data menjadi format JSON
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Tampilkan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);

// Tutup koneksi
$connection->close();
?>
