<?php $this->load->view('template_header'); ?>

<div class="form-box">

    <h1>✎ Edit Artikel</h1>

    <div class="form-note">
        <h3>Catatan</h3>
        <p>Silakan ubah data artikel di bawah ini, lalu klik tombol update untuk menyimpan perubahan.</p>
    </div>

    <form method="post">
        <label>Judul Artikel</label>
        <input type="text" name="judul" value="<?= $edit['judul']; ?>" required>

        <label>Nama Penulis</label>
        <input type="text" name="penulis" value="<?= $edit['penulis']; ?>" required>

        <label>Isi Artikel</label>
        <textarea name="isi" rows="8" required><?= $edit['isi']; ?></textarea>

        <div class="form-action">
            <button type="submit" name="submit" class="btn btn-primary">Update Artikel</button>
            <a href="<?= base_url('index.php/artikel') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>

</div>

<?php $this->load->view('template_footer'); ?>