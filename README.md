# Website Manajemen Artikel - CodeIgniter 3

## Deskripsi
Project ini merupakan tugas implementasi konsep **Model View Controller (MVC)** menggunakan framework **CodeIgniter 3** dan database **MySQL**.

Website ini berfungsi sebagai sistem manajemen artikel sederhana yang mendukung operasi **CRUD (Create, Read, Update, Delete)**.

---

## Fitur Utama

✅ Menampilkan daftar artikel  
✅ Menampilkan detail artikel  
✅ Menambahkan artikel baru  
✅ Mengedit artikel  
✅ Menghapus artikel  
✅ Halaman Tentang Website  
✅ Routing dengan CodeIgniter  
✅ Template Header & Footer  
✅ Desain modern responsive dengan CSS

---

## Teknologi yang Digunakan

- PHP
- CodeIgniter 3
- MySQL
- HTML5
- CSS3
- MVC Architecture

---

## Struktur Project

```bash
TugasMVCPert4/
│
├── application/
│   ├── config/
│   ├── controllers/
│   └── views/
│
├── assets/
│   └── style.css
│
├── system/
├── index.php
└── db_artikeltugasmvc4.sql
```

---

## Struktur Database

Tabel utama:

```sql
artikel
- id
- judul
- penulis
- isi
```

Import database:

```sql
db_artikeltugasmvc4.sql
```

---

## Cara Menjalankan Project

### 1 Clone Repository

```bash
git clone https://github.com/username/TugasMVCPert4.git
```

---

### 2 Pindahkan ke htdocs

```bash
C:/xampp/htdocs/TugasMVCPert4
```

---

### 3 Jalankan XAMPP

Start:

- Apache  
- MySQL

---

### 4 Import Database

Buka:

```bash
http://localhost/phpmyadmin
```

Import file:

```bash
db_artikeltugasmvc4.sql
```

---

### 5 Jalankan Project

```bash
http://localhost/TugasMVCPert4/index.php/artikel
```

---

## Screenshot Tampilan

### Home
Menampilkan daftar artikel dengan card modern.

### Tentang
Menjelaskan informasi website dan fitur-fitur utama.

### Tambah Artikel
Form input artikel baru.

---

## Konsep MVC yang Digunakan

### Controller
File:

```php
application/controllers/Artikel.php
```

Mengatur:
- menampilkan artikel
- tambah data
- edit data
- hapus data

---

### View

```php
home.php
tentang.php
tambah.php
detail.php
edit.php
```

Menampilkan antarmuka pengguna.

---

### Model
Project ini masih menggunakan query langsung di controller sebagai implementasi dasar MVC sederhana.

---

## Author

**Melisa Fajri Rosa**  
**Rahil Putri Maharani**  
Tugas MVC Pertemuan 4

---

## License

Untuk kebutuhan pembelajaran dan tugas akademik.
