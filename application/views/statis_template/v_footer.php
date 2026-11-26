<?php
// ==== Informasi kontak LSP Tanindo (ubah di sini saja) ====
$kontak = [
  'telp'       => '0819-9000-0360',
  'telp_href'  => 'tel:+6281990000360',
  'wa_href'    => 'https://wa.me/6281990000360',
  'email'      => 'awakbaharikqpql@gmail.com',
  'alamat_1'   => 'Jl. Tebet Barat Dalam Raya No. 15',
  'alamat_2'   => 'Jakarta Selatan 12810, Indonesia',
  'maps_query' => 'Jl. Tebet Barat Dalam Raya No. 15, Jakarta Selatan 12810',
];
$tpl = base_url('template/tanindo/') . 'assets/img/';
?>

<!-- ============ FOOTER / KONTAK ============ -->
<footer class="tn-footer" id="kontak">
  <div class="tn-container">
    <div class="tn-footer-grid">
      <div>
        <div class="tn-footer-brand">
          <img src="<?= $tpl ?>gallery/logo-icon-tanindo.png" alt="Logo LSP Tanindo" />
          <div><strong>LSP Tanindo</strong><small>Tani Andalan Indonesia</small></div>
        </div>
        <p style="margin:0;line-height:1.7;max-width:340px">
          Lembaga Sertifikasi Profesi bidang pertanian berlisensi BNSP. Mengukuhkan kompetensi, meningkatkan daya saing.
        </p>
        <div class="tn-socials" aria-label="Media sosial">
          <a href="https://www.facebook.com/people/Lsp-Tanindo/pfbid02W8kwmYVzTURSvvDKcx9w5nFfmAGScgDGmbPCAy9jm8foV2DTSAZJw3spCCmjNR9pl/?mibextid=ZbWKwL" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/lsp_tanindo/?igsh=MWxia3lwamphc3A3Ng%3D%3D" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com/@lsp.tanindo?_t=8nW0gaTpVce&_r=1" target="_blank" rel="noopener" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
          <a href="https://www.youtube.com/@lsptanindo" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          <a href="https://x.com/LspTanindo?t=IOgV_eo43JORkSGwH9cQKQ&s=09" target="_blank" rel="noopener" aria-label="X (Twitter)"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>

      <div>
        <h4>Hubungi Kami</h4>
        <ul class="tn-contact-list">
          <li>
            <i class="bi bi-telephone-fill"></i>
            <div><span>Telepon / WhatsApp</span><a href="<?= $kontak['telp_href'] ?>"><?= $kontak['telp'] ?></a></div>
          </li>
          <li>
            <i class="bi bi-envelope-fill"></i>
            <div><span>Email</span><a href="mailto:<?= $kontak['email'] ?>"><?= $kontak['email'] ?></a></div>
          </li>
          <li>
            <i class="bi bi-geo-alt-fill"></i>
            <div><span>Alamat</span><address><?= $kontak['alamat_1'] ?><br /><?= $kontak['alamat_2'] ?></address></div>
          </li>
        </ul>
        <a href="<?= $kontak['wa_href'] ?>" target="_blank" rel="noopener" class="tn-btn tn-btn-accent tn-btn-sm" style="margin-top:1.5rem">
          <i class="bi bi-whatsapp"></i> Chat via WhatsApp
        </a>
      </div>

      <div class="tn-footer-map">
        <iframe
          title="Lokasi LSP Tanindo di Google Maps"
          src="https://maps.google.com/maps?q=<?= rawurlencode($kontak['maps_query']) ?>&z=16&output=embed"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
      </div>
    </div>

    <div class="tn-footer-bottom">
      <span>&copy; <?= date('Y') ?> LSP Tanindo. Hak cipta dilindungi.</span>
      <span>Template oleh <a href="https://themewagon.com/" target="_blank" rel="noopener">ThemeWagon</a></span>
    </div>
  </div>
</footer>
</main>

<!-- ============ Tombol mengambang ============ -->
<div class="tn-fab-stack">
  <a href="#top" class="tn-fab tn-totop" id="tnToTop" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>
  <a href="<?= $kontak['wa_href'] ?>" target="_blank" rel="noopener" class="tn-fab tn-fab-wa" aria-label="WhatsApp LSP Tanindo"><i class="bi bi-whatsapp"></i></a>
  <button type="button" class="tn-fab tn-fab-chat" id="chatToggle" aria-label="Buka live chat" aria-controls="chatWindow" aria-expanded="false">
    <i class="bi bi-chat-dots-fill"></i><span class="tn-dot"></span>
  </button>
</div>

<div class="tn-chat" id="chatWindow" role="dialog" aria-label="Live chat">
  <div class="tn-chat-head">
    <img src="<?= $tpl ?>gallery/logo-icon-tanindo.png" alt="" />
    <div><strong>Admin LSP Tanindo</strong><small>Biasanya membalas di jam kerja</small></div>
    <button type="button" id="closeChat" aria-label="Tutup chat"><i class="bi bi-x-lg"></i></button>
  </div>
  <div class="tn-chat-body" id="chatMessages">
    <div class="tn-bubble is-admin">👋 Halo! Ada yang bisa kami bantu?</div>
  </div>
  <form class="tn-chat-foot" id="chatForm" autocomplete="off">
    <input type="text" id="chatInput" placeholder="Tulis pesan…" maxlength="1000" aria-label="Pesan" />
    <button type="submit" id="sendChat" aria-label="Kirim"><i class="bi bi-send-fill"></i></button>
  </form>
</div>

<div class="tn-lightbox" id="tnLightbox" role="dialog" aria-label="Pratinjau gambar">
  <button type="button" aria-label="Tutup"><i class="bi bi-x-lg"></i></button>
  <img src="" alt="" />
</div>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="<?= base_url('template/tanindo/') ?>vendors/@popperjs/popper.min.js"></script>
<script src="<?= base_url('template/tanindo/') ?>vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('template/tanindo/') ?>vendors/is/is.min.js"></script>
<script src="<?= base_url('template/tanindo/') ?>assets/js/theme.js"></script>
<script>
  function downloadFile() {
    var link = document.createElement("a");
    link.href = "<?= base_url('template/tanindo/') ?>assets/document/compro_lsp_tanindo_2024.pptx";
    link.download = "compro_lsp_tanindo_2024.pptx";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }

  (function() {
    // ---------- Navbar ----------
    var nav = document.getElementById("tnNav");
    var burger = document.getElementById("tnBurger");
    var toTop = document.getElementById("tnToTop");

    function onScroll() {
      var y = window.scrollY || window.pageYOffset;
      if (nav) nav.classList.toggle("is-scrolled", y > 8);
      if (toTop) toTop.classList.toggle("is-visible", y > 600);
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    if (nav && burger) {
      burger.addEventListener("click", function() {
        var open = nav.classList.toggle("is-open");
        burger.setAttribute("aria-expanded", open ? "true" : "false");
        burger.setAttribute("aria-label", open ? "Tutup menu" : "Buka menu");
      });
      nav.querySelectorAll(".tn-nav-panel a").forEach(function(a) {
        a.addEventListener("click", function() {
          nav.classList.remove("is-open");
          burger.setAttribute("aria-expanded", "false");
        });
      });
    }

    // ---------- Reveal on scroll ----------
    var items = document.querySelectorAll(".tn-reveal");
    if ("IntersectionObserver" in window) {
      var io = new IntersectionObserver(function(entries) {
        entries.forEach(function(en) {
          if (en.isIntersecting) { en.target.classList.add("is-visible"); io.unobserve(en.target); }
        });
      }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });
      items.forEach(function(el) { io.observe(el); });
    } else {
      items.forEach(function(el) { el.classList.add("is-visible"); });
    }

    // ---------- "Baca selengkapnya" ----------
    var aboutBtn = document.getElementById("aboutToggle");
    var aboutText = document.getElementById("aboutText");
    if (aboutBtn && aboutText) {
      aboutBtn.addEventListener("click", function() {
        var clamped = aboutText.classList.toggle("is-clamped");
        aboutBtn.setAttribute("aria-expanded", clamped ? "false" : "true");
        aboutBtn.innerHTML = clamped ? 'Baca selengkapnya <i class="bi bi-chevron-down"></i>' : 'Tutup <i class="bi bi-chevron-up"></i>';
      });
    }

    // ---------- Lightbox ----------
    var lb = document.getElementById("tnLightbox");
    if (lb) {
      var lbImg = lb.querySelector("img");
      document.querySelectorAll("img[data-zoom], .tn-gallery a").forEach(function(el) {
        el.addEventListener("click", function(ev) {
          ev.preventDefault();
          lbImg.src = el.tagName === "A" ? el.getAttribute("href") : el.src;
          lbImg.alt = el.alt || "";
          lb.classList.add("is-open");
        });
      });
      lb.addEventListener("click", function() { lb.classList.remove("is-open"); lbImg.src = ""; });
      document.addEventListener("keydown", function(e) { if (e.key === "Escape") lb.classList.remove("is-open"); });
    }

    // ---------- Live chat ----------
    var chatToggle = document.getElementById("chatToggle");
    var chatWindow = document.getElementById("chatWindow");
    var chatMessages = document.getElementById("chatMessages");
    var chatInput = document.getElementById("chatInput");
    var chatForm = document.getElementById("chatForm");
    var pollTimer = null;
    var lastCount = -1;

    function bubble(text, isAdmin) {
      var div = document.createElement("div");
      div.className = "tn-bubble " + (isAdmin ? "is-admin" : "is-guest");
      div.textContent = text; // aman dari XSS
      return div;
    }

    function setOpen(open) {
      chatWindow.classList.toggle("is-open", open);
      chatToggle.setAttribute("aria-expanded", open ? "true" : "false");
      if (open) {
        chatToggle.classList.remove("has-new");
        loadMessages();
        setTimeout(function() { chatInput.focus(); }, 50);
      }
    }

    function loadMessages() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "<?= base_url('chat/get_messages') ?>", true);
      xhr.onload = function() {
        if (xhr.status !== 200) return;
        var messages;
        try { messages = JSON.parse(xhr.responseText); } catch (e) { return; }
        if (!Array.isArray(messages)) return;

        if (lastCount >= 0 && messages.length > lastCount && !chatWindow.classList.contains("is-open")) {
          var last = messages[messages.length - 1];
          if (last && last.sender === "admin") chatToggle.classList.add("has-new");
        }
        if (messages.length === lastCount) return;
        lastCount = messages.length;

        chatMessages.innerHTML = "";
        chatMessages.appendChild(bubble("👋 Halo! Ada yang bisa kami bantu?", true));
        messages.forEach(function(msg) {
          chatMessages.appendChild(bubble(msg.message, msg.sender === "admin"));
        });
        chatMessages.scrollTop = chatMessages.scrollHeight;
      };
      xhr.send();
    }

    function sendMessage() {
      var message = chatInput.value.trim();
      if (message === "") return;
      chatMessages.appendChild(bubble(message, false));
      chatMessages.scrollTop = chatMessages.scrollHeight;
      lastCount++;

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "<?= base_url('chat/send_message') ?>", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("message=" + encodeURIComponent(message) + "&sender_type=guest");
      chatInput.value = "";
    }

    if (chatToggle && chatWindow) {
      chatToggle.addEventListener("click", function() { setOpen(!chatWindow.classList.contains("is-open")); });
      document.getElementById("closeChat").addEventListener("click", function() { setOpen(false); });
      chatForm.addEventListener("submit", function(e) { e.preventDefault(); sendMessage(); });

      // Polling: cepat saat chat terbuka, lambat saat tertutup, berhenti saat tab tidak aktif.
      function schedule() {
        clearTimeout(pollTimer);
        if (document.hidden) return;
        pollTimer = setTimeout(function() { loadMessages(); schedule(); }, chatWindow.classList.contains("is-open") ? 3000 : 15000);
      }
      document.addEventListener("visibilitychange", schedule);
      loadMessages();
      schedule();
    }
  })();
</script>
</body>

</html>
