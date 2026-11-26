<style>
  table {
    width: 100%;
    border-collapse: collapse;
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

  textarea {
    width: 100%;
    height: 50px;
  }

  .signature-pad {
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    height: 260px;
  }

  .custom-disabled {
    pointer-events: none;
    /* Prevent interactions */
    opacity: 1;
    /* Keep it fully visible */
    filter: grayscale(0%);
    /* Prevent it from looking greyed out */
  }
</style>
<div class="content-wrapper">
  <?php if ($this->session->flashdata('success')): ?>
    <p><?php echo $this->session->flashdata('success'); ?></p>
  <?php endif; ?>

  <?php if ($this->session->flashdata('error')): ?>
    <p><?php echo $this->session->flashdata('error'); ?></p>
  <?php endif; ?>

  <div class="card">
    <div class="card-body">
      <form action="<?= base_url('staff/save_ak01/' . $this->uri->segment(3)) ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">

          <table class="mb-3">
            <tr>
              <td rowspan="2" colspan="2" class="center" style="width: 50%;"><b>Skema Sertifikasi (<strike>KKNI</strike>/Okupasi/<strike>Klaster</strike>)*</b></td>
              <td>Judul </td>
              <td>: </td>
              <td>Penyuluh Pertanian Swadaya Fasilitator Mahir</td>
            </tr>
            <tr>
              <td> Nomor </td>
              <td>: </td>
              <td>01.SSO.PPSFM/LSP-TANINDO/V/2024</td>
            </tr>
            <tr>
              <td colspan="2" class="center" style="width: 50%;"><b>TUK</b></td>
              <td> <input type="radio" name="TUK" value="Sewaktu" <?php echo ($jawaban->tuk == "Sewaktu") ? 'checked' : ''; ?>>
                <label for="">Sewaktu</label>
              </td>
              <td> <input type="radio" name="TUK" value="Tempat Kerja" <?php echo ($jawaban->tuk == "Tempat Kerja") ? 'checked' : 'disabled'; ?>>
                <label for="">Tempat Kerja</label>
              </td>
              <td> <input type="radio" name="TUK" value="Mandiri" <?php echo ($jawaban->tuk == "Mandiri") ? 'checked' : 'disabled'; ?>>
                <label for="">Mandiri</label>
              </td>
            </tr>
            <tr>
              <td rowspan="4">
                <b>Hasil yang akan dikumpulkan</b>
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
          </table>
          <hr>
          <h4>Pemohon <?= $data_asesi->full_name ?></h4>
          <h4>Tanda Tangan</h4>
          <div>
            <img src="<?= base_url('uploads/tanda_tangan/' . $ttd_asesi) ?>" alt="">
          </div>
          <br>
          <hr>
          <br>
          <h4>Pemohon <?= $this->session->userdata('username'); ?></h4>
          <h4>Tanda Tangan</h4>
          <div class="text-right">
            <button type="button" class="btn btn-default btn-sm" id="undo"><i class="fa fa-undo"></i> Undo</button>
            <button type="button" class="btn btn-danger btn-sm" id="clear"><i class="fa fa-eraser"></i> Clear</button>
            <button type="button" class="btn btn-primary btn-sm" id="resize-canvas"><i class="fa fa-refresh"></i> Mulai</button>
          </div>
          <br>
          <div class="wrapper">
            <canvas id="signature-pad" class="signature-pad"></canvas>
          </div>
          <br>
          <input type="hidden" name="signed" id="signed">
          <button type="button" class="btn btn-primary btn-sm" id="save-png">Simpan Tanda Tangan</button>
          <div id="tes_signature">
            <div class="disini">

            </div>
          </div>
        </div>
        <button class="btn btn-primary">Submit</button>
      </form>
      <!-- <h4 class="card-title"></h4>
      <div class="row mb-2">
        <div class="col-md-3">
          <label for=""></label>
        </div>
      </div> -->
    </div>
  </div>
</div>

<script>
  document.getElementById("answer").addEventListener("change", function() {
    let fileName = this.files[0] ? this.files[0].name : "Choose a file...";
    this.nextElementSibling.textContent = fileName;
  });
</script>