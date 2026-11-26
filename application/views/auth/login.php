<div class="tn-auth-shell">
  <?php $this->load->view('statis_template/auth_aside', [
    'aside_title' => 'Selamat datang kembali',
    'aside_text'  => 'Masuk untuk memantau status pendaftaran, mengisi formulir asesmen, dan mengunduh dokumen sertifikasi Anda.',
  ]); ?>

  <main class="tn-auth-main">
    <div class="tn-auth-card">
      <?php $this->load->view('statis_template/auth_mobile_brand'); ?>
      <a class="tn-back" href="<?= base_url('home') ?>"><i class="bi bi-arrow-left"></i> Kembali ke beranda</a>
      <h1>Masuk ke akun Anda</h1>
      <p class="tn-sub">Gunakan email dan password yang terdaftar.</p>

      <div class="tn-flash">
        <?php if ($this->session->flashdata('message')) : ?>
          <?= $this->session->flashdata('message'); ?>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
          <div class="tn-alert tn-alert-danger"><i class="bi bi-exclamation-circle-fill"></i><div><?= $this->session->flashdata('error'); ?></div></div>
        <?php endif; ?>
      </div>

      <form method="POST" action="<?= base_url('auth/login'); ?>" data-loading>
        <div class="tn-field">
          <label class="tn-label" for="email">Email</label>
          <div class="tn-control">
            <i class="bi bi-envelope"></i>
            <input type="email" class="tn-input" id="email" name="email" placeholder="nama@email.com" autocomplete="email" inputmode="email" required autofocus>
          </div>
        </div>
        <div class="tn-field">
          <label class="tn-label" for="password">Password</label>
          <div class="tn-control has-toggle">
            <i class="bi bi-lock"></i>
            <input type="password" class="tn-input" id="password" name="password" placeholder="Masukkan password" autocomplete="current-password" required>
            <button type="button" class="tn-toggle-pass" data-toggle-pass="password" aria-label="Tampilkan password"><i class="bi bi-eye"></i></button>
          </div>
        </div>
        <div class="tn-auth-links">
          <span></span>
          <a href="<?= base_url('auth/forgotpassword') ?>">Lupa password?</a>
        </div>
        <button type="submit" class="tn-btn tn-btn-primary tn-btn-lg tn-btn-block" data-loading-text="Masuk…">
          Masuk <i class="bi bi-arrow-right"></i>
        </button>
      </form>

      <p class="tn-auth-alt">Belum punya akun? <a href="<?= base_url('auth/register_tanindo') ?>">Daftar sertifikasi</a></p>
    </div>
  </main>
</div>
