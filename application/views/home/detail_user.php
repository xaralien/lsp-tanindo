<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <?php $this->load->view('statis_template/v_navbar'); ?>

  <section class="py-0" id="header">
    <div class="bg-holder d-none d-md-block" style="
                  background-image: url(<?= base_url('template/tanindo/') ?>assets/img/illustrations/hero-header.png);
                  background-position: right top;
                  background-size: contain;
               "></div>
    <!--/.bg-holder-->

    <div class="bg-holder d-md-none" style="
                  background-image: url(<?= base_url('template/tanindo/') ?>assets/img/illustrations/hero-bg.png);
                  background-position: right top;
                  background-size: contain;
               "></div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row align-items-center min-vh-75 min-vh-lg-100">
        <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
          <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">
            Bersertifikasi untuk
            <br class="d-block d-lg-block" />Masa Depan Pertanian
          </h1>
          <p class="mb-4 fs-1">
            Mengukuhkan Kompetensi, Meningkatkan Daya Saing.
          </p>
          <a href="#tentang" class="btn btn-lg btn-success">Selengkapnya ...</a>
        </div>
      </div>
    </div>
  </section>
  <?= $this->session->flashdata('message'); ?>
  <section class="py-5" id="partners">
    <div class="container">
      <div class="row justify-content-center align-items-center">

        <div class="col-lg-8 col-md-10 col-sm-12">
          <div class="card shadow-lg p-4 mb-5 bg-white rounded">
            <div class="card-body text-center">
              <h2 class="card-title mb-2">Detail Pengguna</h2>
              <h4 class="card-title mb-4"><?= $this->uri->segment(3) ?></h4>

              <?php if (isset($user) && $user): ?>
                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">Nama:</div>
                  <div class="col-md-8 text-md-left"><?= htmlspecialchars($user->username ?? 'N/A') ?></div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">Jabatan:</div>
                  <div class="col-md-8 text-md-left">
                    <?php
                    // Define your jabatan mapping here (as discussed before)
                    $jabatan_map = [
                      1 => 'Ketua Umum',
                      2 => 'Sekertariat Jendral',
                      3 => 'Bendahara Umum',
                      4 => 'Ketua Provinsi',
                      5 => 'Dep. Kelautan dan Perikanan',
                      6 => 'Dep. Kemitraan Strategis dan Advokasi',
                      7 => 'Dep.LITBANG',
                      8 => 'Dep. Media Informasi dan Komunikasi',
                      9 => 'Dep. Hukum & HAM',
                      10 => 'Anggota',
                    ];
                    $user_jabatan_text = $jabatan_map[$user->jabatan ?? 0] ?? 'Jabatan Tidak Dikenal';
                    echo htmlspecialchars($user_jabatan_text);
                    ?>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">NIK:</div>
                  <div class="col-md-8 text-md-left"><?= htmlspecialchars($user->nik ?? 'N/A') ?></div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">Email:</div>
                  <div class="col-md-8 text-md-left"><?= htmlspecialchars($user->email ?? 'N/A') ?></div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">Nomor Telpon:</div>
                  <div class="col-md-8 text-md-left"><?= htmlspecialchars($user->nomor_hp ?? 'N/A') ?></div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 text-md-right font-weight-bold">Alamat:</div>
                  <div class="col-md-8 text-md-left"><?= htmlspecialchars($user->alamat ?? 'N/A') ?></div>
                </div>

                <?php if (isset($user->profile_picture) && $user->profile_picture): ?>
                  <div class="mt-4">
                    <h4>Foto Profil:</h4>
                    <img src="<?= base_url('uploads/profile_pictures/' . htmlspecialchars($user->profile_picture)) ?>"
                      alt="Foto Profil Pengguna" class="img-fluid rounded-circle" style="max-width: 150px; height: 150px; object-fit: cover;">
                  </div>
                <?php endif; ?>

                <hr class="my-4">

                <!-- <a href="<?= base_url('users/edit/' . ($user->id ?? '')) ?>" class="btn btn-primary mt-3">Edit Profil</a> -->

              <?php else: ?>
                <div class="alert alert-warning" role="alert">
                  Data pengguna tidak ditemukan.
                </div>
              <?php endif; ?>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="py-5" id="partners">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="fw-bold">Didukung oleh</h2>
          <!-- <p class="text-muted">
                        Kami bekerja sama dengan berbagai organisasi dan
                        perusahaan terkemuka.
                     </p> -->
        </div>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-6 col-md-3 col-lg-2 mb-4">
          <img src="<?= base_url('template/tanindo/') ?>assets/img/partners/logo-bnsp.png" class="img-fluid" alt="Badan Nasional Standarisasi Profesi" />
        </div>
        <div class="col-6 col-md-3 col-lg-2 mb-4">
          <img src="<?= base_url('template/tanindo/') ?>assets/img/partners/ktna.png" class="img-fluid" alt="Kelompok Tani Andalan Indonesia" />
        </div>
        <!-- <div class="col-6 col-md-3 col-lg-2 mb-4">
          <img src="<?= base_url('template/tanindo/') ?>assets/img/partners/logo-pppsi-old.png" class="img-fluid" alt="Kelompok Tani Andalan Indonesia" />
        </div> -->
        <div class="col-6 col-md-3 col-lg-2 mb-4">
          <img src="<?= base_url('template/tanindo/') ?>assets/img/gallery/logo-tanindo.png" class="img-fluid" alt="LSP Tanindo" />
        </div>
      </div>
    </div>
  </section>