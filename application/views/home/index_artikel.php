<?php
$feature = $artikel_trending_now_1 ? $artikel_trending_now_1 : ($artikel_trending_now_2 ? $artikel_trending_now_2 : null);
$side = [];
foreach ([$artikel_sub_trending_1, $artikel_sub_trending_2] as $list) {
  if ($list) {
    foreach ($list as $a) {
      if (!$feature || $a->Id != $feature->Id) $side[] = $a;
    }
  }
}
$side = array_slice($side, 0, 4);
$thumb = function ($a) { return base_url('uploads/artikel/' . $a->thumbnail); };
$link = function ($a) { return base_url('home/artikel_detail/' . $a->Id); };
$e = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); };
?>
<section class="tn-section" id="artikel">
  <div class="tn-container">
    <div class="tn-section-head tn-reveal" style="display:flex;align-items:flex-end;justify-content:space-between;gap:1rem;flex-wrap:wrap;text-align:left;max-width:none">
      <div>
        <span class="tn-eyebrow">Kabar Terbaru</span>
        <h2 class="tn-title" style="margin:0">Artikel &amp; kegiatan</h2>
      </div>
      <a href="<?= base_url('home/artikel') ?>" class="tn-btn tn-btn-ghost">Semua artikel <i class="bi bi-arrow-right"></i></a>
    </div>

    <?php if (!$feature && !$side) : ?>
      <div class="tn-empty"><i class="bi bi-newspaper" style="font-size:2rem"></i><p style="margin:.5rem 0 0">Belum ada artikel minggu ini.</p></div>
    <?php else : ?>
      <div class="tn-articles">
        <?php if ($feature) : ?>
          <a class="tn-article-feature tn-reveal" href="<?= $link($feature) ?>">
            <img src="<?= $thumb($feature) ?>" alt="<?= $e($feature->title) ?>" loading="lazy" />
            <div class="tn-article-cap">
              <span class="tn-chip">Trending</span>
              <h3><?= $e($feature->title) ?></h3>
            </div>
          </a>
        <?php endif; ?>
        <div class="tn-article-list">
          <?php if ($side) : foreach ($side as $a) : ?>
            <a class="tn-article-item tn-reveal" href="<?= $link($a) ?>">
              <img src="<?= $thumb($a) ?>" alt="" loading="lazy" />
              <h4><?= $e($a->title) ?></h4>
            </a>
          <?php endforeach; else : ?>
            <div class="tn-empty">Artikel lainnya akan segera hadir.</div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($artikel_weekly_topnews) : ?>
      <h3 style="font-size:1.2rem;font-weight:800;margin:3rem 0 1.25rem">Top minggu ini</h3>
      <div class="tn-scroll-row">
        <?php foreach ($artikel_weekly_topnews as $c) : ?>
          <a class="tn-article-card" href="<?= $link($c) ?>">
            <img src="<?= $thumb($c) ?>" alt="" loading="lazy" />
            <h4><?= $e($c->title) ?></h4>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
