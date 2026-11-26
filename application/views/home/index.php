<?php $tpl = base_url('template/tanindo/') . 'assets/img/'; ?>
<main class="main" id="top">
  <?php $this->load->view('statis_template/v_navbar'); ?>

  <!-- ============ HERO ============ -->
  <section class="tn-hero" id="header">
    <div class="tn-container">
      <div class="tn-hero-grid">
        <div class="tn-hero-copy">
          <span class="tn-eyebrow">Lembaga Sertifikasi Profesi Berlisensi BNSP</span>
          <h1>Bersertifikasi untuk <span class="tn-mark">Masa Depan</span> Pertanian</h1>
          <p class="tn-lead">
            Mengukuhkan kompetensi, meningkatkan daya saing. LSP Tanindo membantu penyuluh, petani, dan pelaku
            usaha pertanian mendapatkan pengakuan kompetensi yang kredibel dan diakui secara nasional.
          </p>
          <div class="tn-hero-actions">
            <a href="<?= base_url('auth/register_tanindo') ?>" class="tn-btn tn-btn-primary tn-btn-lg">
              Daftar Sertifikasi <i class="bi bi-arrow-right"></i>
            </a>
            <a href="<?= base_url('home/skema') ?>" class="tn-btn tn-btn-ghost tn-btn-lg">
              <i class="bi bi-grid"></i> Lihat Skema
            </a>
          </div>
          <div class="tn-hero-trust">
            <div><i class="bi bi-patch-check-fill"></i> Berlisensi BNSP</div>
            <div><i class="bi bi-people-fill"></i> Asesor Kompeten</div>
            <div><i class="bi bi-geo-alt-fill"></i> Seluruh Indonesia</div>
          </div>
        </div>
        <div class="tn-hero-art">
          <img src="<?= $tpl ?>illustrations/hero-farmer.png" alt="Ilustrasi petani menanam padi" width="661" height="796" fetchpriority="high" />
          <div class="tn-hero-badge">
            <img src="<?= $tpl ?>partners/logo-bnsp.png" alt="Logo BNSP" />
            <div><strong>Sertifikat Nasional</strong><span>Diakui lintas sektor</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if ($this->session->flashdata('message')) : ?>
    <div class="tn-container tn-flash" style="margin-top:24px"><?= $this->session->flashdata('message'); ?></div>
  <?php endif; ?>

  <!-- ============ TENTANG ============ -->
  <section class="tn-section" id="tentang">
    <div class="tn-container">
      <div class="tn-about">
        <div class="tn-about-visual tn-reveal">
          <img src="<?= $tpl ?>gallery/logo-tanindo.png" alt="Logo LSP Tanindo" />
        </div>
        <div class="tn-reveal">
          <span class="tn-eyebrow">Tentang Kami</span>
          <h2 class="tn-title">SDM pertanian yang unggul, handal, dan profesional</h2>
          <div class="tn-collapse-text is-clamped" id="aboutText">
            <p class="tn-lead">
              Indonesia sebagai negara agraris dengan potensi geografis, agroklimat, serta kesuburan tanahnya pernah
              mengalami swasembada pangan beras pada tahun 1984. Salah satu kunci suksesnya adalah peran penyuluh
              pertanian dan program intensifikasi pertanian yang dilaksanakan secara profesional, konsisten, dan
              berkelanjutan. Kini profesi penyuluh pertanian menuju ketahanan pangan, kemandirian pangan, dan
              kedaulatan pangan.
            </p>
            <p class="tn-lead">
              Oleh karena itu hadir Lembaga Sertifikasi Profesi (LSP) Tani Andalan Indonesia (Tanindo) untuk
              melaksanakan sertifikasi penyuluh pertanian agar eksistensinya lebih diakui serta perannya lebih besar
              bagi pembangunan pertanian di Indonesia. LSP Tanindo hadir untuk menjawab tantangan profesionalisme
              penyuluh dan petani Indonesia. Ke depan Indonesia akan menjadi negara besar dengan ketahanan pangan yang
              kuat, produktivitas pertanian yang tinggi, dan berkelanjutan.
            </p>
          </div>
          <button type="button" class="tn-link-btn" id="aboutToggle" aria-expanded="false" aria-controls="aboutText">Baca selengkapnya <i class="bi bi-chevron-down"></i></button>

          <div class="tn-vision">
            <i class="bi bi-eye-fill"></i>
            <div>
              <strong>Visi</strong>
              <p>Menjadi Lembaga Sertifikasi Profesi yang kompeten, kredibel, dan profesional dalam bidang pertanian.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ MISI ============ -->
  <section class="tn-section tn-bg-cream">
    <div class="tn-container">
      <div class="tn-section-head tn-reveal">
        <span class="tn-eyebrow">Misi</span>
        <h2 class="tn-title">Tiga komitmen kami untuk pertanian Indonesia</h2>
      </div>
      <div class="tn-grid tn-grid-3">
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/farmer.svg" alt="" /></span>
          <h3>Meningkatkan Kompetensi SDM Pertanian</h3>
          <p>Meningkatkan keterampilan dan pengetahuan tenaga kerja di sektor pertanian.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/certification.svg" alt="" /></span>
          <h3>Melaksanakan Sertifikasi Profesi</h3>
          <p>Melaksanakan proses sertifikasi bagi SDM pertanian secara objektif dan terpercaya.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/collaboration.svg" alt="" /></span>
          <h3>Kolaborasi dan Sinergi</h3>
          <p>Mengembangkan kerja sama antar pemangku kepentingan untuk menciptakan tenaga kerja yang kompeten dan kompetitif.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ TUJUAN / MANFAAT ============ -->
  <section class="tn-section">
    <div class="tn-container">
      <div class="tn-section-head tn-reveal">
        <span class="tn-eyebrow">Manfaat Sertifikasi</span>
        <h2 class="tn-title">Mengapa sertifikasi profesi penting?</h2>
        <p class="tn-lead">Sertifikat kompetensi dari LSP berlisensi BNSP memastikan keahlian Anda diakui, dari tingkat lokal hingga lintas negara.</p>
      </div>
      <div class="tn-grid tn-grid-4">
        <article class="tn-card tn-reveal">
          <span class="tn-icon is-amber"><i class="bi bi-award-fill"></i></span>
          <h3>Meyakinkan Kompetensi</h3>
          <p>Membuktikan kepada organisasi, industri, atau klien bahwa Anda kompeten dan meningkatkan rasa percaya diri.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon is-amber"><i class="bi bi-graph-up-arrow"></i></span>
          <h3>Merencanakan Karier</h3>
          <p>Mengukur tingkat pencapaian kompetensi dan merencanakan jenjang karier, baik di lembaga formal maupun mandiri.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon is-amber"><i class="bi bi-shield-check"></i></span>
          <h3>Memenuhi Regulasi</h3>
          <p>Membantu tenaga profesi memenuhi persyaratan regulasi yang berlaku di sektor pertanian.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon is-amber"><i class="bi bi-globe2"></i></span>
          <h3>Pengakuan Lintas Sektor</h3>
          <p>Pengakuan kompetensi lintas sektor dan lintas negara serta mendukung promosi profesi di pasar kerja.</p>
        </article>
      </div>

      <div class="tn-grid tn-grid-3" style="margin-top:1.5rem">
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/value.svg" alt="" /></span>
          <h3>Nilai Sertifikat Profesi</h3>
          <p>Sertifikat profesi memiliki nilai yang diakui, memberi keuntungan dalam mencapai tujuan karier dan memperkuat posisi di tempat kerja.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/competence.svg" alt="" /></span>
          <h3>Menjamin Kompetensi</h3>
          <p>Memastikan kompetensi yang didapat melalui pembelajaran, pelatihan, maupun pengalaman kerja, oleh LSP berlisensi BNSP.</p>
        </article>
        <article class="tn-card tn-reveal">
          <span class="tn-icon"><img src="<?= $tpl ?>icons/independent.svg" alt="" /></span>
          <h3>Peran BNSP</h3>
          <p>BNSP adalah lembaga independen yang dibentuk melalui PP No. 23 Tahun 2004 dan PP No. 10 Tahun 2018 untuk melaksanakan sertifikasi kompetensi kerja.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ ALUR ============ -->
  <section class="tn-section tn-bg-soft" id="alur">
    <div class="tn-container">
      <div class="tn-section-head tn-reveal">
        <span class="tn-eyebrow">Alur</span>
        <h2 class="tn-title">Alur sertifikasi yang jelas dan transparan</h2>
        <p class="tn-lead">Ketuk gambar untuk memperbesar.</p>
      </div>
      <div class="tn-flow">
        <figure class="tn-reveal">
          <figcaption>Alur Sertifikasi Kompetensi</figcaption>
          <img src="<?= $tpl ?>illustrations/alur-sertifikasi.png" alt="Alur sertifikasi kompetensi" loading="lazy" data-zoom />
        </figure>
        <figure class="tn-reveal">
          <figcaption>Alur RCC (Recognition of Current Competency)</figcaption>
          <img src="<?= $tpl ?>illustrations/alur-rcc.png" alt="Alur RCC" loading="lazy" data-zoom />
        </figure>
      </div>
    </div>
  </section>

  <!-- ============ ARTIKEL ============ -->
  <?php $this->load->view('home/index_artikel'); ?>

  <!-- ============ CTA ============ -->
  <section class="tn-section-sm">
    <div class="tn-container">
      <div class="tn-cta tn-reveal">
        <div>
          <h2>Siap membuktikan kompetensi Anda?</h2>
          <p>Daftar sekarang dan mulai proses sertifikasi bersama asesor berpengalaman LSP Tanindo.</p>
        </div>
        <div class="tn-cta-actions">
          <a href="<?= base_url('auth/register_tanindo') ?>" class="tn-btn tn-btn-accent tn-btn-lg">Daftar Sekarang <i class="bi bi-arrow-right"></i></a>
          <a href="https://wa.me/6281990000360" target="_blank" rel="noopener" class="tn-btn tn-btn-light tn-btn-lg"><i class="bi bi-whatsapp"></i> Tanya Admin</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ MITRA ============ -->
  <section class="tn-section-sm" id="partners">
    <div class="tn-container">
      <div class="tn-section-head" style="margin-bottom:2rem">
        <span class="tn-eyebrow">Didukung oleh</span>
      </div>
      <div class="tn-partners">
        <div class="tn-partner"><img src="<?= $tpl ?>partners/logo-bnsp.png" alt="Badan Nasional Sertifikasi Profesi" loading="lazy" /></div>
        <div class="tn-partner"><img src="<?= $tpl ?>partners/ktna.png" alt="Kontak Tani Nelayan Andalan" loading="lazy" /></div>
        <div class="tn-partner"><img src="<?= $tpl ?>gallery/logo-tanindo.png" alt="LSP Tanindo" loading="lazy" /></div>
      </div>
    </div>
  </section>
