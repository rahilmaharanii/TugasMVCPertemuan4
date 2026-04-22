<?php $this->load->view('template_header'); ?>

<div class="content-box about-page">

    <h1 class="page-title">Tentang Website</h1>

    <h2>Deskripsi Website</h2>
    <p>
        Website ini adalah platform untuk mempelajari konsep MVC menggunakan
        framework CodeIgniter. Website ini dibuat sebagai media pembelajaran
        sederhana agar pengguna dapat memahami alur kerja Model, View, dan
        Controller dalam pengembangan aplikasi web.
    </p>

    <div class="info-box">
        <h3>Informasi Umum</h3>
        <p><strong>Nama Website:</strong> Website Manajemen Artikel</p>
        <p><strong>Tanggal Pembuatan:</strong> 15 April 2026</p>
        <p><strong>Pembuat:</strong> Melisa Fajri Rosa</p>
    </div>

    <h2>Tujuan Website</h2>
    <p>
        Website TUGAS PERTEMUAN 4
    </p>

    <h2>Fitur Website</h2>

    <div class="feature-grid">
        <div class="feature-card">
            <h3>Daftar Artikel</h3>
            <p>
                Menampilkan daftar lengkap semua artikel yang telah dipublikasikan
                dengan tampilan yang menarik dan responsif.
            </p>
        </div>

        <div class="feature-card">
            <h3>Detail Artikel</h3>
            <p>
                Menampilkan konten lengkap dari setiap artikel dengan informasi
                metadata seperti penulis dan isi artikel.
            </p>
        </div>

        <div class="feature-card">
            <h3>Tambah Artikel</h3>
            <p>
                Formulir untuk menambahkan artikel baru sebagai simulasi
                penggunaan form di CodeIgniter.
            </p>
        </div>

        <div class="feature-card">
            <h3>Navigasi Intuitif</h3>
            <p>
                Navigasi yang mudah digunakan memudahkan pengguna untuk menjelajahi
                berbagai halaman website.
            </p>
        </div>

        <div class="feature-card">
            <h3>Responsif</h3>
            <p>
                Website dirancang responsif dan dapat diakses dengan baik di
                berbagai perangkat seperti desktop, tablet, maupun mobile.
            </p>
        </div>

        <div class="feature-card">
            <h3>Desain Modern</h3>
            <p>
                Menggunakan desain modern dengan palet warna menarik dan tata
                letak yang profesional.
            </p>
        </div>
    </div>

    <h2>Teknologi yang Digunakan</h2>
    <ul class="about-list">
        <li><strong>Framework:</strong> CodeIgniter 3.1.13</li>
        <li><strong>Bahasa Pemrograman:</strong> PHP</li>
        <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript</li>
        <li><strong>Pola Desain:</strong> Model-View-Controller (MVC)</li>
        <li><strong>Database:</strong> MySQL</li>
    </ul>

    <h2>Konsep Pembelajaran</h2>
    <p>
        Website ini dirancang untuk mengajarkan konsep-konsep penting dalam
        pengembangan web menggunakan framework CodeIgniter:
    </p>

    <ul class="about-list">
        <li><strong>Model-View-Controller (MVC):</strong> Pemisahan antara logika bisnis, presentasi, dan kontrol aliran aplikasi.</li>
        <li><strong>Controller:</strong> Menangani permintaan dari pengguna dan mengarahkan aliran aplikasi.</li>
        <li><strong>View:</strong> Menampilkan antarmuka pengguna menggunakan HTML dan PHP.</li>
        <li><strong>URI Routing:</strong> Memahami cara URL dipetakan ke controller dan method.</li>
        <li><strong>Data Passing:</strong> Cara meneruskan data dari controller ke view.</li>
        <li><strong>Form Handling:</strong> Menangani input dari form HTML.</li>
    </ul>

</div>

<div class="about-cta">
    <h2>Siap Mulai Belajar?</h2>
    <p>Jelajahi berbagai artikel pembelajaran tentang CodeIgniter dan konsep MVC.</p>

    <div class="cta-buttons">
        <a href="<?= base_url('index.php/artikel'); ?>" class="btn btn-primary">Lihat Daftar Artikel</a>
        <a href="<?= base_url('index.php/artikel/tambah'); ?>" class="btn btn-secondary">Tambah Artikel Baru</a>
    </div>
</div>

<?php $this->load->view('template_footer'); ?>