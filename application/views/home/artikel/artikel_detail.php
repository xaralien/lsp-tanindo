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
    <section class="py-5" id="tentang">
        <div class="container">
            <div class="row align-items-center">\
                <div class="col-md-12 col-12">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">
                        <?= $data_artikel->title ?>
                    </h5>
                </div>
                <div class="col-md-12 col-12 mb-2 text-center">
                    <img src="<?= base_url('uploads/artikel/' . $data_artikel->thumbnail) ?>" style="width: 60%;" class="img-fluid" />
                </div>
            </div>
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-12 mb-3">
                    <p style="text-align: justify;" class=" mb-5">
                        <?= $data_artikel->text ?>
                    </p>
                </div>
            </div>
            <div class="row align-items-left">
                <div class="col-md-12 col-12 mb-3">
                    <p style="text-align: justify;" class=" mb-5">
                        <?= date('d F Y', strtotime($data_artikel->tanggal)) ?>
                    </p>
                </div>
            </div>
        </div>
    </section>