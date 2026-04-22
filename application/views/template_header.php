<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= isset($title) ? $title : 'Website Manajemen Artikel'; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
</head>
<body>

<div class="top">
    <h1>Website Manajemen Artikel</h1>
    <p>Platform pembelajaran konsep MVC dengan CodeIgniter</p>
</div>

<nav>
    <a class="<?= (isset($active) && $active == 'home') ? 'active' : ''; ?>" href="<?= base_url('index.php/artikel') ?>">Home</a>
    <a class="<?= (isset($active) && $active == 'tentang') ? 'active' : ''; ?>" href="<?= base_url('index.php/artikel/tentang') ?>">Tentang</a>
    <a class="<?= (isset($active) && $active == 'tambah') ? 'active' : ''; ?>" href="<?= base_url('index.php/artikel/tambah') ?>">Tambah Artikel</a>
</nav>