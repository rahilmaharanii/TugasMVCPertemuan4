<?php $this->load->view('template_header'); ?>

<div class="container">

    <div class="section-title">
        📰 Daftar Artikel Terbaru
    </div>

    <?php if (!empty($artikel)) { ?>
        <div class="cards">
            <?php foreach($artikel as $a){ ?>
                <div class="card">
                    <div class="card-top">
                        <?= $a['judul']; ?>
                    </div>

                    <div class="card-body">
                        <p>
                            📅 15 Apr 2024 &nbsp;&nbsp;
                            ✍ <?= $a['penulis']; ?>
                        </p>

                        <p>
                            <?= substr($a['isi'], 0, 90); ?>...
                        </p>

                        <div class="button-group">
                            <a class="btn btn-detail" href="<?= base_url('index.php/artikel/detail/'.$a['id']) ?>">Baca →</a>
                            <a class="btn btn-edit" href="<?= base_url('index.php/artikel/edit/'.$a['id']) ?>">Edit</a>
                            <a class="btn btn-delete" href="<?= base_url('index.php/artikel/hapus/'.$a['id']) ?>" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="empty">
            Belum ada artikel yang ditambahkan.
        </div>
    <?php } ?>

</div>

<?php $this->load->view('template_footer'); ?>