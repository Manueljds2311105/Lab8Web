# Praktikum 8: PHP dan MySQL (CRUD)

Praktikum 8 membahas cara membuat aplikasi web sederhana menggunakan PHP
dan MySQL dengan fitur CRUD (Create, Read, Update, Delete). Berikut
adalah rangkuman langkah-langkah dan penjelasan yang dilakukan dalam
praktikum ini.

------------------------------------------------------------------------

## 1. Membuat Database dan Tabel

Pada tahap ini dibuat database bernama **latihan1** dan tabel
**data_barang** yang berfungsi menyimpan informasi produk seperti: -
Nama barang\
- Kategori\
- Harga beli\
- Harga jual\
- Stok\
- Gambar produk

Struktur tabel menggunakan tipe data seperti `VARCHAR`, `INT`, dan
`DECIMAL`.

------------------------------------------------------------------------

## 2. Membuat Koneksi ke Database (koneksi.php)

File ini bertugas menghubungkan aplikasi PHP dengan database MySQL
menggunakan fungsi `mysqli_connect()`. Jika koneksi gagal, aplikasi akan
menampilkan pesan error.

------------------------------------------------------------------------

## 3. Menampilkan Data (index.php)

File ini berfungsi untuk: - Mengambil seluruh data barang dari database\
- Menampilkan dalam bentuk tabel HTML\
- Menyediakan tombol: **Tambah**, **Ubah**, dan **Hapus**\
- Menampilkan gambar produk jika tersedia

------------------------------------------------------------------------

## 4. Menambah Data (tambah.php)

Formulir digunakan untuk memasukkan data barang baru. Fitur yang
dilakukan: - Input nama barang, kategori, harga, stok\
- Upload file gambar\
- Menyimpan data ke database menggunakan query `INSERT`

------------------------------------------------------------------------

## 5. Mengubah Data (ubah.php)

Halaman ini berfungsi untuk mengedit data: - Mengambil data berdasarkan
`id`\
- Menampilkan dalam form untuk diperbarui\
- Jika gambar baru diunggah, gambar lama dapat diganti\
- Menyimpan perubahan menggunakan query `UPDATE`

------------------------------------------------------------------------

## 6. Menghapus Data (hapus.php)

File ini berfungsi untuk: - Menghapus data berdasarkan ID\
- Menjalankan perintah `DELETE FROM data_barang WHERE id_barang = ...`\
- Mengarahkan kembali ke halaman utama

------------------------------------------------------------------------

## 7. Membuat Tampilan (style.css)

File CSS digunakan untuk mempercantik tampilan halaman, seperti: -
Mengatur layout container\
- Styling tabel dan tombol\
- Menampilkan gambar dengan ukuran proporsional

------------------------------------------------------------------------

## 8. Struktur Folder Proyek

    lab8_php_database/
    │
    ├── index.php
    ├── tambah.php
    ├── ubah.php
    ├── hapus.php
    ├── koneksi.php
    ├── style.css
    ├── README.md
    └── gambar/

------------------------------------------------------------------------

## 9. Cara Menjalankan Proyek

1.  Jalankan Apache & MySQL melalui XAMPP.

2.  Import database dan tabel melalui phpMyAdmin.

3.  Simpan seluruh file ke folder `htdocs/lab8_php_database/`.

4.  Akses proyek melalui browser:

        http://localhost/lab8_php_database/

------------------------------------------------------------------------

## 10. Kesimpulan

Praktikum ini mengajarkan dasar-dasar pembuatan aplikasi berbasis web
menggunakan PHP dan MySQL, meliputi: - Pengelolaan database\
- Pembuatan halaman CRUD\
- Upload gambar\
- Dasar styling menggunakan CSS

Praktikum ini merupakan fondasi penting untuk membangun aplikasi web
dinamis yang lebih kompleks.

------------------------------------------------------------------------
