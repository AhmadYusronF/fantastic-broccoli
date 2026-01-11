<p align="center">
  <img src="images/logo.jpg" width="200" title="Project Logo">
</p>

# The Four Project - Website Layanan Freelance

**The Four Project** adalah sebuah platform berbasis web yang menghubungkan klien dengan penyedia jasa freelance profesional. Website ini dibangun untuk memenuhi tugas kelompok (**Kelompok 4**) dan mencakup berbagai fitur pemesanan jasa digital.

---

## 📋 Fitur Utama

### 👤 Pengguna (User)
* **Autentikasi**: Registrasi akun baru dan login.
* **Katalog Jasa**: Detail layanan (Desain Grafis, Website, Digital Marketing, Penulisan) dan perbandingan harga.
* **Pemesanan**: Formulir pemesanan jasa yang terintegrasi secara langsung.
* **Manajemen Pesanan**: Memantau status pesanan (*Pending*, *Proses*, *Selesai*) dan menghapus pesanan yang masih *pending*.
* **Informasi**: Halaman portofolio, "Tentang Kami", dan FAQ.

### 🔑 Administrator (Admin)
* **Dashboard Admin**: Melihat seluruh riwayat pesanan dari semua pengguna.
* **Update Status**: Mengubah status pengerjaan pesanan secara *real-time*.

---

## 🛠️ Teknologi yang Digunakan

* **Bahasa Pemrograman**: PHP (Native)
* **Frontend**: HTML5, CSS3 (Responsive Design)
* **Database**: MySQL / MariaDB
* **Server**: Apache (via XAMPP/WAMP)

---

## ⚙️ Persyaratan Sistem

Pastikan perangkat Anda sudah terinstal:
1. **XAMPP** (Mendukung PHP dan MySQL).
2. **Web Browser** (Chrome, Firefox, atau Edge).

---

## 🚀 Panduan Instalasi & Setup

### 1. Persiapan Folder
Pindahkan folder proyek `TheFourProject` ke dalam direktori `htdocs` XAMPP Anda.
* Lokasi default: `C:\xampp\htdocs\TheFourProject`

### 2. Penyetingan Database
1. Jalankan **Apache** dan **MySQL** dari XAMPP Control Panel.
2. Buka `http://localhost/phpmyadmin` di browser.
3. Buat database baru dengan nama: `THEFOURPROJECTDB`.
4. Pilih database tersebut, buka tab **SQL**, lalu jalankan perintah berikut:

```sql
-- Tabel Akun Pengguna
CREATE TABLE ACCOUNT (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EMAIL VARCHAR(100) NOT NULL UNIQUE,
    PASSWORD VARCHAR(255) NOT NULL
);

-- Tabel Pesanan
CREATE TABLE pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UID INT NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    noHP VARCHAR(20) NOT NULL,
    jasa VARCHAR(50) NOT NULL,
    pesan TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'pending',
    FOREIGN KEY (UID) REFERENCES ACCOUNT(ID)
);

```
### 3. Konfigurasi Koneksi (Opsional)
File konfigurasi database berada di `Database/connect.php`. Secara default, settingannya adalah:

* **Server:** `localhost`
* **User:** `root`
* **Password:** ` ` (kosong)
* **DB Name:** `THEFOURPROJECTDB`

> Jika Anda menggunakan password untuk MySQL root Anda, silakan edit file `Database/connect.php` dan sesuaikan variabel `$password`.

### 4. Menjalankan Website
1. Buka browser Anda.
2. Akses alamat: `http://localhost/TheFourProject/index.php` (Sesuaikan dengan nama folder yang Anda taruh di htdocs).

---

## 🔑 Akun Akses

### Akses Admin
Untuk mengakses fitur Dashboard Admin, Anda harus login menggunakan email khusus yang telah diatur dalam kode:
* **Email:** `kelompok4@admin.com`
* **Password:** (Anda harus mendaftarkan email ini terlebih dahulu melalui menu Register).

### Akses User
Silakan registrasi akun baru melalui menu **Masuk** -> **Buat Akun**.

---

## 📂 Struktur Folder
* `/css`: Berisi file styling (`global.css`, `style.css`, dll).
* `/Database`: Berisi logika backend (koneksi, handler login/register, CRUD).
* `/images`: Aset gambar untuk website.
* `*.php`: File halaman utama (`index.php`, `jasa.php`, `kontak.php`, dll).

---

## © Kredit
Dibuat oleh **Kelompok 4 - 2026**.  
All Rights Reserved.
