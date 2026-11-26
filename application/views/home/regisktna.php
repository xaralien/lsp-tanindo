<?php
$err = function ($name) {
  return form_error($name, '<small class="tn-error"><i class="bi bi-exclamation-circle"></i> ', '</small>');
};
$has = function ($name) {
  return form_error($name) !== '' ? ' has-error' : '';
};
?>
<div class="tn-auth-shell is-wide">
  <?php $this->load->view('statis_template/auth_aside', [
    'aside_title'  => 'Registrasi anggota KTNA',
    'aside_text'   => 'Daftarkan diri Anda sebagai anggota Kontak Tani Nelayan Andalan dan dapatkan Kartu Tanda Anggota (KTA) digital.',
    'aside_points' => [
      ['bi-person-vcard-fill', 'Kartu anggota digital'],
      ['bi-camera-fill', 'Foto langsung dari kamera'],
      ['bi-shield-lock-fill', 'Data tersimpan dengan aman'],
    ],
  ]); ?>

  <main class="tn-auth-main">
    <div class="tn-auth-card">
      <?php $this->load->view('statis_template/auth_mobile_brand'); ?>
      <a class="tn-back" href="<?= base_url('home') ?>"><i class="bi bi-arrow-left"></i> Kembali ke beranda</a>
      <h1>Registrasi KTNA</h1>
      <p class="tn-sub">Kolom bertanda <span style="color:var(--tn-danger)">*</span> wajib diisi.</p>

      <?php if (validation_errors()) : ?>
        <div class="tn-alert tn-alert-danger" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <div><strong>Periksa kembali isian Anda.</strong> Beberapa kolom belum sesuai, lihat keterangan merah di bawah.</div>
        </div>
      <?php endif; ?>
      <div class="tn-flash"><?= $this->session->flashdata('message'); ?></div>

      <form class="tn-panel user" method="post" action="<?= base_url('home/insertktna'); ?>" enctype="multipart/form-data" data-loading>
        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">1</span> Data diri</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('nik') ?>">
              <label class="tn-label" for="nik">NIK<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-person-vcard"></i>
                <input type="text" class="tn-input" id="nik" name="nik" placeholder="16 digit NIK" value="<?= set_value('nik'); ?>" inputmode="numeric" maxlength="16" data-digits required>
              </div>
              <?= $err('nik') ?>
            </div>
            <div class="tn-field tn-col-full<?= $has('username') ?>">
              <label class="tn-label" for="username">Nama lengkap<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-person"></i>
                <input type="text" class="tn-input" id="username" name="username" placeholder="Sesuai KTP" value="<?= set_value('username'); ?>" autocomplete="name" required>
              </div>
              <?= $err('username') ?>
            </div>
            <div class="tn-field<?= $has('email') ?>">
              <label class="tn-label" for="email">Email<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-envelope"></i>
                <input type="email" class="tn-input" id="email" name="email" placeholder="nama@email.com" value="<?= set_value('email'); ?>" autocomplete="email" inputmode="email" required>
              </div>
              <?= $err('email') ?>
            </div>
            <div class="tn-field<?= $has('nomor_hp') ?>">
              <label class="tn-label" for="nomor_hp">Nomor HP / WhatsApp<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-phone"></i>
                <input type="tel" class="tn-input" id="nomor_hp" name="nomor_hp" placeholder="08xxxxxxxxxx" value="<?= set_value('nomor_hp'); ?>" inputmode="tel" autocomplete="tel" data-digits required>
              </div>
              <?= $err('nomor_hp') ?>
            </div>
            <div class="tn-field tn-col-full<?= $has('jabatan') ?>">
              <label class="tn-label" for="jabatan">Jabatan<span class="tn-req">*</span></label>
              <select class="tn-input" id="jabatan" name="jabatan" required>
                <option value="">Pilih jabatan</option>
                <option value="1" <?= set_select('jabatan', '1'); ?>>Ketua Umum</option>
                <option value="2" <?= set_select('jabatan', '2'); ?>>Sekertariat Jendral</option>
                <option value="3" <?= set_select('jabatan', '3'); ?>>Bendahara Umum</option>
                <option value="4" <?= set_select('jabatan', '4'); ?>>Ketua Provinsi</option>
                <option value="5" <?= set_select('jabatan', '5'); ?>>Dep. Kelautan dan Perikanan</option>
                <option value="6" <?= set_select('jabatan', '6'); ?>>Dep. Kemitraan Strategis dan Advokasi</option>
                <option value="7" <?= set_select('jabatan', '7'); ?>>Dep.LITBANG</option>
                <option value="8" <?= set_select('jabatan', '8'); ?>>Dep. Media Informasi dan Komunikasi</option>
                <option value="9" <?= set_select('jabatan', '9'); ?>>Dep. Hukum & HAM</option>
                <option value="10" <?= set_select('jabatan', '10'); ?>>Anggota</option>
              </select>
              <?= $err('jabatan') ?>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">2</span> Kelahiran &amp; alamat</legend>
          <div class="tn-row">
            <div class="tn-field tn-col-full<?= $has('tem_lahir') ?>">
              <label class="tn-label" for="tem_lahir">Tempat lahir<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-geo"></i>
                <input type="text" class="tn-input" id="tem_lahir" name="tem_lahir" placeholder="Kota kelahiran" value="<?= set_value('tem_lahir'); ?>" required>
              </div>
              <?= $err('tem_lahir') ?>
            </div>
            <div class="tn-field tn-col-full">
              <span class="tn-label">Tanggal lahir<span class="tn-req">*</span></span>
              <div class="tn-row-3">
                <div>
                  <input type="text" class="tn-input" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" placeholder="Tgl" inputmode="numeric" maxlength="2" data-digits aria-label="Tanggal" required>
                  <?= $err('tanggal_lahir') ?>
                </div>
                <div>
                  <select class="tn-input" id="bulan_lahir" name="bulan_lahir" aria-label="Bulan" required>
                    <option value="">Bulan</option>
<?php foreach (['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $i => $bln) : $v = sprintf('%02d', $i + 1); ?>
                    <option value="<?= $v ?>" <?= set_select('bulan_lahir', $v); ?>><?= $bln ?></option>
<?php endforeach; ?>
                  </select>
                  <?= $err('bulan_lahir') ?>
                </div>
                <div>
                  <input type="text" class="tn-input" id="tahun_lahir" name="tahun_lahir" value="<?= set_value('tahun_lahir'); ?>" placeholder="Tahun" inputmode="numeric" maxlength="4" data-digits aria-label="Tahun" required>
                  <?= $err('tahun_lahir') ?>
                </div>
              </div>
            </div>
            <div class="tn-field tn-col-full<?= $has('alamat') ?>">
              <label class="tn-label" for="alamat">Alamat<span class="tn-req">*</span></label>
              <div class="tn-control">
                <i class="bi bi-house"></i>
                <input type="text" class="tn-input" id="alamat" name="alamat" placeholder="Nama jalan, nomor rumah, kota" value="<?= set_value('alamat'); ?>" autocomplete="street-address" required>
              </div>
              <?= $err('alamat') ?>
            </div>
            <div class="tn-field tn-col-full<?= $has('provinsi') ?>">
              <label class="tn-label" for="provinsi">Provinsi<span class="tn-req">*</span></label>
              <select name="provinsi" id="provinsi" class="tn-input" required>
                <option value="">Pilih provinsi</option>
                <option value="01" <?= set_select('provinsi', '01'); ?>>Aceh</option>
                <option value="02" <?= set_select('provinsi', '02'); ?>>Sumatera Utara</option>
                <option value="03" <?= set_select('provinsi', '03'); ?>>Sumatera Barat</option>
                <option value="04" <?= set_select('provinsi', '04'); ?>>Riau</option>
                <option value="05" <?= set_select('provinsi', '05'); ?>>Jambi</option>
                <option value="06" <?= set_select('provinsi', '06'); ?>>Sumatera Selatan</option>
                <option value="07" <?= set_select('provinsi', '07'); ?>>Bengkulu</option>
                <option value="08" <?= set_select('provinsi', '08'); ?>>Lampung</option>
                <option value="09" <?= set_select('provinsi', '09'); ?>>Kep. Bangka Belitung</option>
                <option value="10" <?= set_select('provinsi', '10'); ?>>Kep. Riau</option>
                <option value="11" <?= set_select('provinsi', '11'); ?>>Jakarta</option>
                <option value="12" <?= set_select('provinsi', '12'); ?>>Jawa Barat</option>
                <option value="13" <?= set_select('provinsi', '13'); ?>>Jawa Tengah</option>
                <option value="14" <?= set_select('provinsi', '14'); ?>>Banten</option>
                <option value="15" <?= set_select('provinsi', '15'); ?>>Jawa Timur</option>
                <option value="16" <?= set_select('provinsi', '16'); ?>>Yogyakarta</option>
                <option value="17" <?= set_select('provinsi', '17'); ?>>Bali</option>
                <option value="18" <?= set_select('provinsi', '18'); ?>>Nusa Tenggara Barat</option>
                <option value="19" <?= set_select('provinsi', '19'); ?>>Nusa Tenggara Timur</option>
                <option value="20" <?= set_select('provinsi', '20'); ?>>Kalimantan Barat</option>
                <option value="21" <?= set_select('provinsi', '21'); ?>>Kalimantan Tengah</option>
                <option value="22" <?= set_select('provinsi', '22'); ?>>Kalimantan Selatan</option>
                <option value="23" <?= set_select('provinsi', '23'); ?>>Kalimantan Timur</option>
                <option value="24" <?= set_select('provinsi', '24'); ?>>Kalimantan Utara</option>
                <option value="25" <?= set_select('provinsi', '25'); ?>>Sulawesi Utara</option>
                <option value="26" <?= set_select('provinsi', '26'); ?>>Sulawesi Tengah</option>
                <option value="27" <?= set_select('provinsi', '27'); ?>>Sulawesi Selatan</option>
                <option value="28" <?= set_select('provinsi', '28'); ?>>Sulawesi Tenggara</option>
                <option value="29" <?= set_select('provinsi', '29'); ?>>Gorontalo</option>
                <option value="30" <?= set_select('provinsi', '30'); ?>>Sulawesi Barat</option>
                <option value="31" <?= set_select('provinsi', '31'); ?>>Maluku</option>
                <option value="32" <?= set_select('provinsi', '32'); ?>>Maluku Utara</option>
                <option value="33" <?= set_select('provinsi', '33'); ?>>Papua</option>
                <option value="34" <?= set_select('provinsi', '34'); ?>>Papua Barat</option>
              </select>
              <?= $err('provinsi') ?>
            </div>
          </div>
        </fieldset>

        <fieldset class="tn-fieldset">
          <legend class="tn-legend"><span class="tn-step">3</span> Foto anggota</legend>
          <div class="tn-camera">
            <div class="tn-camera-box">
              <span class="tn-camera-label">Kamera</span>
              <div id="my_camera"></div>
            </div>
            <div class="tn-camera-box is-result" id="results">
              <span class="tn-camera-label">Hasil foto</span>
              <span style="padding:1rem">Foto Anda akan tampil di sini</span>
            </div>
          </div>
          <input type="hidden" name="image" class="image-tag">
          <button type="button" class="tn-btn tn-btn-ghost tn-btn-block" style="margin-top:1rem" onclick="take_snapshot()">
            <i class="bi bi-camera"></i> Ambil foto
          </button>
          <small class="tn-help" style="text-align:center">Pastikan wajah terlihat jelas dengan pencahayaan cukup.</small>
        </fieldset>

        <fieldset class="tn-fieldset">
          <div class="tn-recaptcha">
            <div class="g-recaptcha" data-sitekey="6LeS8ykqAAAAAMMLxrZQMfdH37sxjgQPiVYhd0Z4"></div>
          </div>
          <button type="submit" class="tn-btn tn-btn-primary tn-btn-lg tn-btn-block" data-loading-text="Mengirim…">
            Kirim registrasi <i class="bi bi-send"></i>
          </button>
        </fieldset>
      </form>
    </div>
  </main>
</div>
