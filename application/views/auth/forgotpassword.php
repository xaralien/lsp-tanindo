<div class="tn-auth-shell">
  <?php $this->load->view('statis_template/auth_aside', [
    'aside_title' => 'Atur ulang password',
    'aside_text'  => 'Masukkan email akun Anda dan buat password baru untuk kembali mengakses layanan LSP Tanindo.',
  ]); ?>

  <main class="tn-auth-main">
    <div class="tn-auth-card">
      <?php $this->load->view('statis_template/auth_mobile_brand'); ?>
      <a class="tn-back" href="<?= base_url('auth') ?>"><i class="bi bi-arrow-left"></i> Kembali ke halaman masuk</a>
      <h1>Lupa password</h1>
      <p class="tn-sub">Buat password baru minimal 8 karakter.</p>

      <div class="tn-flash">
        <?php if ($this->session->flashdata('message')) : ?><?= $this->session->flashdata('message'); ?><?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?><?= $this->session->flashdata('error'); ?><?php endif; ?>
        <?= validation_errors('<div class="tn-alert tn-alert-danger"><i class="bi bi-exclamation-circle-fill"></i><div>', '</div></div>'); ?>
      </div>

      <form method="POST" action="<?= base_url('auth/forgotpassword'); ?>" data-loading>
        <div class="tn-field">
          <label class="tn-label" for="email">Email terdaftar</label>
          <div class="tn-control">
            <i class="bi bi-envelope"></i>
            <input type="email" class="tn-input" id="email" name="email" placeholder="nama@email.com" autocomplete="email" required autofocus>
          </div>
        </div>
        <div class="tn-field">
          <label class="tn-label" for="new_password1">Password baru</label>
          <div class="tn-control has-toggle">
            <i class="bi bi-lock"></i>
            <input type="password" class="tn-input" id="new_password1" name="new_password1" placeholder="Minimal 8 karakter" autocomplete="new-password" minlength="8" required data-pass-main>
            <button type="button" class="tn-toggle-pass" data-toggle-pass="new_password1" aria-label="Tampilkan password"><i class="bi bi-eye"></i></button>
          </div>
        </div>
        <div class="tn-field">
          <label class="tn-label" for="new_password2">Konfirmasi password baru</label>
          <div class="tn-control has-toggle">
            <i class="bi bi-lock-fill"></i>
            <input type="password" class="tn-input" id="new_password2" name="new_password2" placeholder="Ulangi password baru" autocomplete="new-password" required data-pass-confirm>
            <button type="button" class="tn-toggle-pass" data-toggle-pass="new_password2" aria-label="Tampilkan password"><i class="bi bi-eye"></i></button>
          </div>
        </div>
        <button type="submit" class="tn-btn tn-btn-primary tn-btn-lg tn-btn-block" data-loading-text="Menyimpan…">Simpan password baru</button>
      </form>

      <p class="tn-auth-alt">Belum punya akun? <a href="<?= base_url('auth/register_tanindo') ?>">Daftar sertifikasi</a></p>
    </div>
  </main>
</div>
