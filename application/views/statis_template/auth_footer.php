<script>
  (function() {
    // Tampilkan / sembunyikan password
    document.querySelectorAll("[data-toggle-pass]").forEach(function(btn) {
      btn.addEventListener("click", function() {
        var input = document.getElementById(btn.getAttribute("data-toggle-pass"));
        if (!input) return;
        var show = input.type === "password";
        input.type = show ? "text" : "password";
        btn.innerHTML = show ? '<i class="bi bi-eye-slash"></i>' : '<i class="bi bi-eye"></i>';
        btn.setAttribute("aria-label", show ? "Sembunyikan password" : "Tampilkan password");
      });
    });

    // Upload: tampilkan nama file terpilih
    document.querySelectorAll(".tn-upload").forEach(function(box) {
      var input = box.querySelector('input[type="file"]');
      var label = box.querySelector("[data-file-name]");
      if (!input) return;
      input.addEventListener("change", function() {
        var f = input.files && input.files[0];
        box.classList.toggle("has-file", !!f);
        if (label) label.textContent = f ? f.name + " (" + Math.round(f.size / 1024) + " KB)" : label.getAttribute("data-default");
      });
      ["dragenter", "dragover"].forEach(function(ev) { box.addEventListener(ev, function() { box.classList.add("is-drag"); }); });
      ["dragleave", "drop"].forEach(function(ev) { box.addEventListener(ev, function() { box.classList.remove("is-drag"); }); });
    });

    // Hanya angka untuk input numerik (NIK, HP, kode pos)
    document.querySelectorAll("[data-digits]").forEach(function(input) {
      input.addEventListener("input", function() {
        var v = input.value.replace(/\D+/g, "");
        if (v !== input.value) input.value = v;
      });
    });

    // Cek konfirmasi password secara langsung
    var p1 = document.querySelector("[data-pass-main]");
    var p2 = document.querySelector("[data-pass-confirm]");
    if (p1 && p2) {
      var check = function() {
        p2.setCustomValidity(p2.value && p1.value !== p2.value ? "Konfirmasi password tidak sama" : "");
      };
      p1.addEventListener("input", check);
      p2.addEventListener("input", check);
    }

    // Cegah klik ganda saat submit
    document.querySelectorAll("form[data-loading]").forEach(function(form) {
      form.addEventListener("submit", function() {
        var btn = form.querySelector('button[type="submit"]');
        if (!btn) return;
        setTimeout(function() {
          btn.classList.add("is-loading");
          btn.innerHTML = '<i class="bi bi-arrow-repeat"></i> ' + (btn.getAttribute("data-loading-text") || "Memproses…");
        }, 0);
      });
    });
  })();
</script>

<?php if ($this->uri->segment(2) == "regisktna" || $this->uri->segment(2) == "insertktna") { ?>
  <script>
    Webcam.set({
      width: 640,
      height: 480,
      dest_width: 640,
      dest_height: 480,
      image_format: 'jpeg',
      jpeg_quality: 90
    });
    Webcam.on('error', function() {
      var cam = document.getElementById('my_camera');
      if (cam) cam.innerHTML = '<span style="padding:1rem">Kamera tidak dapat diakses. Izinkan akses kamera di browser Anda lalu muat ulang halaman.</span>';
    });
    Webcam.attach('#my_camera');

    function take_snapshot() {
      Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML =
          '<span class="tn-camera-label">Hasil foto</span><img src="' + data_uri + '" alt="Hasil foto"/>';
      });
    }
  </script>
<?php } ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
