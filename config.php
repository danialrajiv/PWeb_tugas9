<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_pendaftaran_siswa";

// Menggunakan mysqli untuk koneksi
$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    // Jika koneksi gagal, hentikan program dan tampilkan pesan error
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>