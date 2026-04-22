<?php $this->load->view('template_header'); ?>

<div class="article-box">

    <div class="article-header">
        <h2><?= $detail['judul']; ?></h2>
        <div class="meta">
            📅 15 Apr 2024 &nbsp;&nbsp; ✍ <?= $detail['penulis']; ?>
        </div>
    </div>

    <div class="article-body">
        <h3>Isi Artikel</h3>
        <p><?= nl2br($detail['isi']); ?></p>

        <div class="article-action">
            <a class="btn btn-primary" href="<?= base_url('index.php/artikel') ?>">← Kembali</a>
            <a class="btn btn-secondary" href="<?= base_url('index.php/artikel/edit/'.$detail['id']) ?>">Edit Artikel</a>
        </div>
    </div>

</div>

<?php $this->load->view('template_footer'); ?>