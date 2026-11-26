<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            size: a4;
            margin-top: 100px;
            /* create space for header */
            margin-bottom: 70px;
            /* create space for footer */
            font-size: 10px;
        }

        header,
        footer {
            position: fixed;
            left: 0px;
            right: 0px;
        }

        header {
            height: 60px;
            margin-top: -60px;
        }

        footer {
            bottom: 0px;
            height: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tbody {
            page-break-inside: avoid;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .center {
            text-align: center;
            vertical-align: middle;
        }

        .no-top-bottom {
            border-top-color: transparent !important;
            border-bottom-color: transparent !important;
        }

        .no-top {
            border-top-color: transparent !important;
        }

        .no-bottom {
            border-bottom-color: transparent !important;
        }

        .page_break {
            page-break-before: always;
        }

        .pagenum:before {
            content: counter(page);
        }

        .td-left {
            border-left: 1px solid black;
            border-right: 1px solid white;
            border-bottom: 1px solid white;
        }

        .td-right {
            border-right: 1px solid black;
            border-left: 1px solid white;
            border-bottom: 1px solid white;
        }

        .td-bottom {
            border-bottom: 1px solid black;
            border-top: 1px solid white;
            border-right: 1px solid white;
            border-left: 1px solid white;
        }

        .td-left-bottom {
            border-left: 1px solid black;
            border-bottom: 1px solid black;

            border-top: 1px solid white;
            border-right: 1px solid white;
        }

        .td-right-bottom {
            border-right: 1px solid black;
            border-bottom: 1px solid black;

            border-left: 1px solid white;
            border-top: 1px solid white;
        }

        .td-clean {
            border: none;
        }

        td.center input {
            width: 90%;
            /* ensures padding doesn't overflow */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <img src="<?= base_url('assets/images/logo/header_pdf.png'); ?>" alt="Header Logo" style=" width: 100%;
        height: auto;">
    </header>
    <footer>
        <span class="pagenum"></span>
    </footer>
    <main>
        <div>
            <div class="row">
                <div class="col-auto">
                    <h4>FR.AK.01. PERSETUJUAN ASESMEN DAN KERAHASIAAN</h4>
                </div>
            </div>
            <br>
            <table class="mb-3">
                <tr>
                    <td rowspan="2" colspan="2" class="center" style="width: 50%;"><b>Skema Sertifikasi (<strike>KKNI</strike>/Okupasi/<strike>Klaster</strike>)*</b></td>
                    <td><b>Judul </b></td>
                    <td style="width: 5%;"><b>: </b></td>
                    <td><b>Penyuluh Pertanian Swadaya Fasilitator Mahir</b></td>
                </tr>
                <tr>
                    <td><b>Nomor </b></td>
                    <td style="width: 5%;"><b>: </b></td>
                    <td><b>01.SSO.PPSFM/LSP-TANINDO/V/2024</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="center" style="width: 50%;">TUK</td>
                    <td>
                        <input type="radio" name="TUK" value="Sewaktu" <?php echo ($jawaban->tuk == "Sewaktu") ? 'checked' : ''; ?> disabled>
                        <label>Sewaktu</label>
                    </td>
                    <td>
                        <input type="radio" name="TUK" value="Tempat Kerja" <?php echo ($jawaban->tuk == "Tempat Kerja") ? 'checked' : ''; ?> disabled>
                        <label>Tempat Kerja</label>
                    </td>
                    <td>
                        <input type="radio" name="TUK" value="Mandiri" <?php echo ($jawaban->tuk == "Mandiri") ? 'checked' : ''; ?> disabled>
                        <label>Mandiri</label>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">Nama Asesor</td>
                    <td>: </td>
                    <td colspan="2"><?= $this->session->userdata('username') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Nama Asesi</td>
                    <td>: </td>
                    <td colspan="2"><?= $data_asesi->full_name ?></td>
                </tr>
                <tr>
                    <td rowspan="4">
                        Hasil yang akan dikumpulkan
                    </td>
                    <td class="center"><input type="checkbox" name="checkbox1" value="Hasil Verifikasi Portofolio" <?php echo ($jawaban->hasil1) ? 'checked' : 'disabled'; ?>></td>
                    <td>Hasil Verifikasi Portofolio</td>
                    <td class="center"><input type="checkbox" name="checkbox2" value="Hasil Reviu Produk" <?php echo ($jawaban->hasil2) ? 'checked' : 'disabled'; ?>></td>
                    <td>Hasil Reviu Produk</td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" name="checkbox3" value="Hasil Observasi Langsung" <?php echo ($jawaban->hasil3) ? 'checked' : 'disabled'; ?>></td>
                    <td>Hasil Observasi Langsung</td>
                    <td class="center"><input type="checkbox" name="checkbox4" value="Hasil Kegiatan Terstruktur" <?php echo ($jawaban->hasil4) ? 'checked' : 'disabled'; ?>></td>
                    <td>Hasil Kegiatan Terstruktur</td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" name="checkbox5" value="Hasil Tanya Jawab" <?php echo ($jawaban->hasil5) ? 'checked' : 'disabled'; ?>></td>
                    <td>Hasil Tanya Jawab</td>
                    <td class="center">
                        <input type="checkbox" name="checkbox6" value="Daftar Pertanyaan Tertulis" <?php echo ($jawaban->hasil6) ? 'checked' : 'disabled'; ?>>
                        <br>
                        <input type="checkbox" name="checkbox7" value="Daftar Pertanyaan Lisan" <?php echo ($jawaban->hasil7) ? 'checked' : 'disabled'; ?>>
                        <br>
                        <input type="checkbox" name="checkbox8" value="Daftar Pertanyaan Wawancara" <?php echo ($jawaban->hasil8) ? 'checked' : 'disabled'; ?>>
                    </td>
                    <td>
                        Daftar Pertanyaan Tertulis
                        <br>
                        Daftar Pertanyaan Lisan
                        <br>
                        Daftar Pertanyaan Wawancara
                    </td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" name="checkbox9" value="Lainnya..." <?php echo ($jawaban->hasil9) ? 'checked' : 'disabled'; ?>></td>
                    <td>Lainnya...</td>
                    <td class="center">
                        <input type="checkbox" name="checkbox10" value="input_sendiri" <?php echo ($jawaban->hasil10) ? 'checked' : 'disabled'; ?>>
                    </td>
                    <td class="center">
                        <input type="text" name="checkbox10_input" class="form-control" value="<?= $jawaban->hasil10 ?>" disabled>
                    </td>
                </tr>

                <tr>
                    <td rowspan="3" colspan="2">Pelaksanaan asesmen disepakati pada:</td>
                    <td class="center">Hari/Tanggal : </td>
                    <td class="center" colspan="2">
                        <input type="date" name="hari_tanggal" class="form-control" value="<?= $jawaban->hari_tanggal ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td class="center">Waktu : </td>
                    <td class="center" colspan="2">
                        <input type="text" name="waktu" class="form-control" value="<?= $jawaban->waktu ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td class="center">TUK : </td>
                    <td class="center" colspan="2">
                        <input type="text" name="tuk_input" class="form-control" value="<?= $jawaban->tuk_input ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b>Asesi :</b>
                        <br>
                        Bahwa saya telah mendapatkan penjelasan terkait hak dan prosedur banding asesmen dari asesor.
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b>Asesor :</b>
                        <br>
                        Menyatakan tidak akan membuka hasil pekerjaan yang saya peroleh karena penugasan saya sebagai Asesor dalam pekerjaan Asesmen kepada siapa pun atau organisasi apapun selain kepada pihak yang berwenang sehubungan dengan kewajiban saya sebagai Asesor yang ditugaskan oleh LSP.
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b>Asesi :</b>
                        <br>
                        Saya setuju mengikuti asesmen dengan pemahaman bahwa informasi yang dikumpulkan hanya digunakan untuk pengembangan profesional dan hanya dapat diakses oleh orang tertentu saja.
                    </td>
                </tr>
                <tr>
                    <td class="td-left">
                        Tanda Tangan Asesor :
                    </td>
                    <td colspan="2" class="td-clean">
                        <img src="<?= base_url('uploads/tanda_tangan/asesor/' . $data_grades->signature) ?>" alt="" style="width: 300px;">
                    </td>
                    <td class="td-clean" style="width: 20%;">
                        Tanggal :
                    </td>
                    <td class="td-right">
                        <?= date('d F Y, H:i:s', strtotime($data_grades->asesor_upload_time)) ?>
                    </td>
                </tr>
                <tr>
                    <td class="td-left-bottom">
                        Tanda Tangan Asesi :
                    </td>
                    <td colspan="2" class="td-bottom">
                        <img src="<?= base_url('uploads/tanda_tangan/' . $data_grades->signature_asesi) ?>" alt="" style="width: 300px;">
                    </td>
                    <td class="td-bottom" style="width: 20%;">
                        Tanggal :
                    </td>
                    <td class="td-right-bottom">
                        <?= date('d F Y, H:i:s', strtotime($data_grades->asesi_upload_time)) ?>
                    </td>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>