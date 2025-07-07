<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // Buat query untuk memasukkan data ke database
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if( $query ) {
        // Kalau berhasil alihkan ke halaman list-siswa.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman list-siswa.php dengan status=gagal
        header('Location: list-siswa.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>