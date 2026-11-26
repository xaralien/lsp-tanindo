<?php
$err = function ($name) {
  return form_error($name, '<small class="tn-error"><i class="bi bi-exclamation-circle"></i> ', '</small>');
};
$has = function ($name) {
  return form_error($name) !== '' ? ' has-error' : '';
};
$errors_all = validation_errors();
?>
<div class="tn-auth-shell is-wide">
  <?php $this->load->view('statis_template/auth_aside', [
    'aside_title'  => 'Daftar sertifikasi kompetensi',
    'aside_text'   => 'Lengkapi data diri Anda. Proses hanya beberapa menit, dan tim kami akan memverifikasi pendaftaran Anda melalui email.',
    'aside_points' => [
      ['bi-1-circle-fill', 'Isi data akun & data pribadi'],
      ['bi-2-circle-fill', 'Unggah bukti pembayaran'],
      ['bi-3-circle-fill', 'Verifikasi email & mulai asesmen'],
    ],
  ]); ?>

  <main class="tn-auth-main">
    <div class="tn-auth-card">
      <?php $this->load->view('statis_template/auth_mobile_brand'); ?>
      <a class="tn-back" href="<?= base_url('home') ?>"><i class="bi bi-arrow-left"></i> Kembali ke beranda</a>
      <h1>Formulir pendaftaran</h1>
      <p class="tn-sub">Kolom bertanda <span style="color:var(--tn-danger)">*</span> wajib diisi.</p>

      <?php if ($errors_all) : ?>
        <div class="tn-alert tn-alert-danger" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <div><strong>Periksa kembali isian Anda.</strong> Beberapa kolom belum sesuai, lihat keterangan merah di bawah.</div>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('auth/process') ?>" method="post" class="tn-panel register" id="register_tanindo" enctype="multipart/form-data" data-loading>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">1</span> Data akun</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('email') ?>">
              <label class="tn-label" for="email">Email<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-envelope"></i>
                <input type="email" class="tn-input" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="nama@email.com" autocomplete="email" inputmode="email" required>
              </div>
              <?= $err('email') ?: '<small class="tn-help">Link verifikasi akan dikirim ke email ini.</small>' ?>
            </div>
            <div class="tn-field<?= $has('password') ?>">
              <label class="tn-label" for="password">Password<span class="tn-req">*</span></label>
              <div class="tn-control has-toggle">
                <i class="bi bi-lock"></i>
                <input type="password" class="tn-input" id="password" name="password" placeholder="Minimal 8 karakter" autocomplete="new-password" minlength="8" required data-pass-main>
                <button type="button" class="tn-toggle-pass" data-toggle-pass="password" aria-label="Tampilkan password"><i class="bi bi-eye"></i></button>
              </div>
              <?= $err('password') ?>
            </div>
            <div class="tn-field<?= $has('password_confirm') ?>">
              <label class="tn-label" for="password_confirm">Konfirmasi password<span class="tn-req">*</span></label>
              <div class="tn-control has-toggle">
                <i class="bi bi-lock-fill"></i>
                <input type="password" class="tn-input" id="password_confirm" name="password_confirm" placeholder="Ulangi password" autocomplete="new-password" required data-pass-confirm>
                <button type="button" class="tn-toggle-pass" data-toggle-pass="password_confirm" aria-label="Tampilkan password"><i class="bi bi-eye"></i></button>
              </div>
              <?= $err('password_confirm') ?>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">2</span> Data pribadi</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('full_name') ?>">
              <label class="tn-label" for="full_name">Nama lengkap<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-person"></i>
                <input type="text" class="tn-input" id="full_name" name="full_name" value="<?= set_value('full_name'); ?>" placeholder="Sesuai KTP" autocomplete="name" required>
              </div>
              <?= $err('full_name') ?>
            </div>
            <div class="tn-field tn-col-full<?= $has('no_ktp') ?>">
              <label class="tn-label" for="no_ktp">Nomor KTP (NIK)<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-person-vcard"></i>
                <input type="text" class="tn-input" id="no_ktp" name="no_ktp" value="<?= set_value('no_ktp'); ?>" placeholder="16 digit NIK" inputmode="numeric" maxlength="16" pattern="\d{16}" data-digits required>
              </div>
              <?= $err('no_ktp') ?: '<small class="tn-help">16 digit angka, tanpa spasi.</small>' ?>
            </div>
            <div class="tn-field<?= $has('place_of_birth') ?>">
              <label class="tn-label" for="place_of_birth">Tempat lahir<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-geo"></i>
                <input type="text" class="tn-input" id="place_of_birth" name="place_of_birth" value="<?= set_value('place_of_birth'); ?>" placeholder="Kota kelahiran" required>
              </div>
              <?= $err('place_of_birth') ?>
            </div>
            <div class="tn-field<?= $has('date_of_birth') ?>">
              <label class="tn-label" for="date_of_birth">Tanggal lahir<span class="tn-req">*</span></label>
              <input type="date" class="tn-input" id="date_of_birth" name="date_of_birth" value="<?= set_value('date_of_birth'); ?>" max="<?= date('Y-m-d') ?>" required>
              <?= $err('date_of_birth') ?>
            </div>
            <div class="tn-field<?= $has('gender') ?>">
              <label class="tn-label" for="gender">Jenis kelamin<span class="tn-req">*</span></label>
              <select name="gender" id="gender" class="tn-input" required>
                <option value="Male" <?= set_select('gender', 'Male'); ?>>Pria</option>
                <option value="Female" <?= set_select('gender', 'Female'); ?>>Wanita</option>
              </select>
              <?= $err('gender') ?>
            </div>
            <div class="tn-field<?= $has('nationality') ?>">
              <label class="tn-label" for="nationality">Kebangsaan<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-flag"></i>
                <input type="text" class="tn-input" id="nationality" name="nationality" value="<?= set_value('nationality', 'Indonesia'); ?>" placeholder="Indonesia" required>
              </div>
              <?= $err('nationality') ?>
            </div>
            <div class="tn-field tn-col-full">
              <label class="tn-label" for="kualifikasi_pendidikan">Kualifikasi pendidikan <span class="tn-opt">(opsional)</span></label>
              <div class="tn-control">
                <i class="bi bi-mortarboard"></i>
                <input type="text" class="tn-input" id="kualifikasi_pendidikan" name="kualifikasi_pendidikan" value="<?= set_value('kualifikasi_pendidikan'); ?>" placeholder="Contoh: S1 Agribisnis">
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">3</span> Kontak</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('mobile_number') ?>">
              <label class="tn-label" for="mobile_number">Nomor HP pribadi / WhatsApp<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-phone"></i>
                <input type="tel" class="tn-input" id="mobile_number" name="mobile_number" value="<?= set_value('mobile_number'); ?>" placeholder="08xxxxxxxxxx" inputmode="tel" autocomplete="tel" data-digits required>
              </div>
              <?= $err('mobile_number') ?>
            </div>
            <div class="tn-field">
              <label class="tn-label" for="home_mobile_number">Telepon rumah <span class="tn-opt">(opsional)</span></label>
              <div class="tn-control">
                <i class="bi bi-telephone"></i>
                <input type="tel" class="tn-input" id="home_mobile_number" name="home_mobile_number" value="<?= set_value('home_mobile_number'); ?>" placeholder="021xxxxxxx" inputmode="tel" data-digits>
              </div>
            </div>
            <div class="tn-field">
              <label class="tn-label" for="office_mobile_number">Telepon kantor <span class="tn-opt">(opsional)</span></label>
              <div class="tn-control">
                <i class="bi bi-building"></i>
                <input type="tel" class="tn-input" id="office_mobile_number" name="office_mobile_number" value="<?= set_value('office_mobile_number'); ?>" placeholder="021xxxxxxx" inputmode="tel" data-digits>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">4</span> Alamat</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('home_address') ?>">
              <label class="tn-label" for="home_address">Alamat rumah<span class="tn-req">*</span></label>
              <div class="tn-control is-textarea">
                <i class="bi bi-house"></i>
                <textarea class="tn-input" id="home_address" name="home_address" rows="3" placeholder="Nama jalan, nomor rumah, RT/RW" autocomplete="street-address" required><?= set_value('home_address'); ?></textarea>
              </div>
              <?= $err('home_address') ?>
            </div>
            <div class="tn-field<?= $has('village') ?>">
              <label class="tn-label" for="village">Kelurahan / Desa<span class="tn-req">*</span></label>
              <input type="text" class="tn-input" id="village" name="village" value="<?= set_value('village'); ?>" placeholder="Kelurahan" required>
              <?= $err('village') ?>
            </div>
            <div class="tn-field<?= $has('sub_district') ?>">
              <label class="tn-label" for="sub_district">Kecamatan<span class="tn-req">*</span></label>
              <input type="text" class="tn-input" id="sub_district" name="sub_district" value="<?= set_value('sub_district'); ?>" placeholder="Kecamatan" required>
              <?= $err('sub_district') ?>
            </div>
            <div class="tn-field<?= $has('city') ?>">
              <label class="tn-label" for="city">Kota / Kabupaten<span class="tn-req">*</span></label>
              <input type="text" class="tn-input" id="city" name="city" value="<?= set_value('city'); ?>" placeholder="Kota / Kabupaten" required>
              <?= $err('city') ?>
            </div>
            <div class="tn-field<?= $has('province') ?>">
              <label class="tn-label" for="province">Provinsi<span class="tn-req">*</span></label>
              <input type="text" class="tn-input" id="province" name="province" value="<?= set_value('province'); ?>" placeholder="Provinsi" required>
              <?= $err('province') ?>
            </div>
            <div class="tn-field">
              <label class="tn-label" for="kode_pos">Kode pos <span class="tn-opt">(opsional)</span></label>
              <input type="text" class="tn-input" id="kode_pos" name="kode_pos" value="<?= set_value('kode_pos'); ?>" placeholder="12345" inputmode="numeric" maxlength="5" autocomplete="postal-code" data-digits>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">5</span> Dokumen</legend>
          <div class="tn-field">
            <label class="tn-label" for="bukti_bayar">Bukti pembayaran</label>
            <label class="tn-upload">
              <span class="tn-upload-icon"><i class="bi bi-cloud-arrow-up"></i></span>
              <span>
                <strong>Pilih atau seret file ke sini</strong>
                <span data-file-name data-default="PDF, JPG, PNG, atau DOCX · maks. 5 MB">PDF, JPG, PNG, atau DOCX · maks. 5 MB</span>
              </span>
              <input type="file" id="bukti_bayar" name="bukti_bayar" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
            </label>
          </div>

          <div class="tn-recaptcha">
            <div class="g-recaptcha" data-sitekey="6LeS8ykqAAAAAMMLxrZQMfdH37sxjgQPiVYhd0Z4"></div>
          </div>

          <button type="submit" class="tn-btn tn-btn-primary tn-btn-lg tn-btn-block" data-loading-text="Mengirim pendaftaran…">
            Kirim pendaftaran <i class="bi bi-send"></i>
          </button>
        </fieldset>
      </form>

      <p class="tn-auth-alt">Sudah punya akun? <a href="<?= base_url('auth') ?>">Masuk di sini</a></p>
    </div>
  </main>
</div>
