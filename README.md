# **Formulir Pendaftaran Siswa Baru - PHP & MySQL**

### 📌 Deskripsi Tugas
Ini adalah aplikasi web CRUD (Create, Read, Update, Delete) sederhana yang dibuat menggunakan **PHP** dan database **MySQL**. Aplikasi ini dirancang untuk mengelola data pendaftaran siswa baru secara online, di mana semua data disimpan secara permanen di dalam database.

Proyek ini dijalankan secara lokal menggunakan **XAMPP** dan diakses melalui browser dengan alamat `localhost`.

---

### 💻 Tumpukan Teknologi (Tech Stack)
- **HTML + CSS**: Untuk struktur dan desain antarmuka (frontend).
- **PHP**: Sebagai bahasa pemrograman untuk memproses logika di sisi server (backend).
- **MySQL**: Sebagai sistem manajemen database untuk menyimpan data pendaftar.
- **XAMPP**: Sebagai server lokal yang menjalankan Apache (Web Server) dan MySQL.

---

### ✅ Fitur Aplikasi
- **Create**: Menambahkan data siswa baru melalui formulir pendaftaran.
- **Read**: Menampilkan seluruh data siswa yang sudah mendaftar dalam bentuk tabel yang rapi.
- **Update**: Mengubah atau memperbarui data siswa yang sudah ada melalui formulir edit.
- **Delete**: Menghapus data siswa dari daftar dan database.
- **Penyimpanan Permanen**: Semua data tersimpan di dalam database MySQL.
- **Desain Menarik**: Antarmuka yang modern dan responsif menggunakan CSS dengan efek visual yang halus.
- **Validasi Sederhana**: Form input menggunakan atribut `required` untuk memastikan data diisi.

---

### 📂 Struktur Proyek
```
/pendaftaran-db/
├── config.php
├── index.php
├── form-daftar.php
├── proses-pendaftaran.php
├── list-siswa.php
├── form-edit.php
├── proses-edit.php
├── hapus.php
└── style.css
```

---

### 🚀 Cara Menjalankan Aplikasi
1.  **Clone Repositori**: Unduh atau clone repositori ini ke komputer Anda.
2.  **Pindahkan Folder**: Letakkan folder proyek ke dalam direktori `htdocs` di dalam folder instalasi XAMPP Anda (biasanya `C:\xampp\htdocs\`).
3.  **Jalankan XAMPP**: Buka XAMPP Control Panel dan jalankan service **Apache** dan **MySQL**.
4.  **Buat Database & Tabel**:
    * Buka browser dan akses `http://localhost/phpmyadmin`.
    * Buat database baru dengan nama `db_pendaftaran_siswa`.
    * Masuk ke tab **SQL** dan jalankan query berikut untuk membuat tabel `calon_siswa`:
    ```sql
    CREATE TABLE `calon_siswa` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nama` varchar(64) NOT NULL,
      `alamat` text NOT NULL,
      `jenis_kelamin` varchar(16) NOT NULL,
      `agama` varchar(16) NOT NULL,
      `asal_sekolah` varchar(64) NOT NULL,
      `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ```
5.  **Akses Aplikasi**: Buka kembali browser Anda dan akses alamat `http://localhost/nama-folder-proyek-anda/` (misal: `http://localhost/pendaftaran-db/`).

---

### 🖼️ Tampilan Web (Screenshot)

*(Di sini Anda letakkan screenshot dari aplikasi Anda saat berjalan)*

**Halaman Utama**
![Halaman Utama](URL_GAMBAR_ANDA_DI_SINI.png)

**Halaman Daftar Siswa**
![Halaman Daftar Siswa](URL_GAMBAR_ANDA_DI_SINI.png)

**Halaman Formulir Pendaftaran**
![Formulir Pendaftaran](URL_GAMBAR_ANDA_DI_SINI.png)

**Halaman Formulir Edit**
![Formulir Edit](URL_GAMBAR_ANDA_DI_SINI.png)
https://github.com/danialrajiv/PWeb_tugas9/blob/main/database_mysql.png
