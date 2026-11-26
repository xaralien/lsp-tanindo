<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= htmlspecialchars(isset($title) ? $title : 'LSP Tanindo') ?> | LSP Tanindo</title>
  <meta name="theme-color" content="#0b3324" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/') ?>images/auth/logo-icon-tanindo.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-icons/bootstrap-icons.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/tanindo-ui.css') ?>?v=1" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>

<body class="tn-auth">
