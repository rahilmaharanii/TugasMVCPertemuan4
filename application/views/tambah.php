<?php $this->load->view('template_header'); ?>

<div class="form-box">

    <h1>＋ Tambah Artikel Baru</h1>

    <div class="form-note">
        <h3>Petunjuk</h3>
        <p>Isi semua data artikel dengan lengkap, lalu klik tombol simpan untuk menambahkan artikel baru.</p>
    </div>

    <form method="post">
        <label>Judul Artikel</label>
        <input type="text" name="judul" placeholder="Masukkan judul artikel" required>

        <label>Nama Penulis</label>
        <input type="text" name="penulis" placeholder="Masukkan nama penulis" required>

        <label>Isi Artikel</label>
        <textarea name="isi" rows="8" placeholder="Masukkan isi artikel" required></textarea>

        <div class="form-action">
            <button type="submit" name="submit" class="btn btn-primary">Simpan Artikel</button>
            <a href="<?= base_url('index.php/artikel') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>

</div>

<?php $this->load->view('template_footer'); ?>