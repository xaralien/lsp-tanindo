<?php
// Panel brand di sisi kiri halaman autentikasi.
// Variabel opsional: $aside_title, $aside_text, $aside_points (array)
$aside_title  = isset($aside_title) ? $aside_title : 'Bersertifikasi untuk masa depan pertanian';
$aside_text   = isset($aside_text) ? $aside_text : 'Mengukuhkan kompetensi, meningkatkan daya saing bersama Lembaga Sertifikasi Profesi berlisensi BNSP.';
$aside_points = isset($aside_points) ? $aside_points : [
  ['bi-patch-check-fill', 'Berlisensi BNSP'],
  ['bi-people-fill', 'Asesor kompeten & berpengalaman'],
  ['bi-award-fill', 'Sertifikat diakui secara nasional'],
];
?>
<aside class="tn-auth-aside">
  <a class="tn-brand" href="<?= base_url('home') ?>">
    <img src="<?= base_url('template/tanindo/') ?>assets/img/gallery/logo-icon-tanindo.png" alt="Logo LSP Tanindo" />
    <span class="tn-brand-text"><strong>LSP TANINDO</strong><small>Tani Andalan Indonesia</small></span>
  </a>
  <div>
    <h2><?= $aside_title ?></h2>
    <p><?= $aside_text ?></p>
    <ul class="tn-auth-points">
      <?php foreach ($aside_points as $pt) : ?>
        <li><i class="bi <?= $pt[0] ?>"></i> <?= $pt[1] ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <small class="tn-auth-foot">&copy; <?= date('Y') ?> LSP Tanindo &middot; Butuh bantuan? <a href="https://wa.me/6281990000360" target="_blank" rel="noopener" style="color:#f7b955">0819-9000-0360</a></small>
</aside>
