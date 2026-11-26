<?php
// Navbar publik bersama. Dipakai oleh semua halaman di controller Home.
$seg = strtolower((string) $this->uri->segment(2));
$is_home = ($this->uri->segment(1) === null || $this->uri->segment(1) === 'home') && ($seg === '' || $seg === 'index');
$home = base_url('home');
$menu = [
  ['label' => 'Beranda', 'href' => $is_home ? '#top' : $home, 'active' => $is_home],
  ['label' => 'Tentang', 'href' => ($is_home ? '' : $home) . '#tentang', 'active' => false],
  ['label' => 'Skema', 'href' => base_url('home/skema'), 'active' => in_array($seg, ['skema', 'fasilitator', 'supervisor'], true)],
  ['label' => 'Alur', 'href' => ($is_home ? '' : $home) . '#alur', 'active' => false],
  ['label' => 'Artikel', 'href' => base_url('home/artikel'), 'active' => in_array($seg, ['artikel', 'artikel_detail'], true)],
  ['label' => 'Kontak', 'href' => '#kontak', 'active' => false],
];
?>
<nav class="tn-nav" id="tnNav" aria-label="Navigasi utama">
  <div class="tn-container">
    <a class="tn-brand" href="<?= $home ?>">
      <img src="<?= base_url('template/tanindo/') ?>assets/img/gallery/logo-icon-tanindo.png" alt="Logo LSP Tanindo" width="40" height="40" />
      <span class="tn-brand-text"><strong>LSP TANINDO</strong><small>Tani Andalan Indonesia</small></span>
    </a>

    <button class="tn-burger" type="button" id="tnBurger" aria-controls="tnNavPanel" aria-expanded="false" aria-label="Buka menu">
      <span></span>
    </button>

    <div class="tn-nav-panel" id="tnNavPanel">
      <ul class="tn-menu">
        <?php foreach ($menu as $m) : ?>
          <li><a href="<?= $m['href'] ?>" class="<?= $m['active'] ? 'is-active' : '' ?>" <?= $m['active'] ? 'aria-current="page"' : '' ?>><?= $m['label'] ?></a></li>
        <?php endforeach; ?>
      </ul>
      <div class="tn-nav-cta">
        <a class="tn-btn tn-btn-ghost tn-btn-sm" href="<?= base_url('auth') ?>"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
        <a class="tn-btn tn-btn-primary tn-btn-sm" href="<?= base_url('auth/register_tanindo') ?>">Daftar Sertifikasi</a>
      </div>
    </div>
  </div>
</nav>
