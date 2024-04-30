<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "QR Code Generator - Create your own QR Codes for free",
    "A QR Code is a two-dimensional variant of a barcode consisting of black and white pixel patterns.",
    "https://mrepol742.github.io/qrcode/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumsearch.png", "Cover Photo");
  $meta->setKeywords("qrcode, qrcode generator");
  ?>
  <style>
    input {
      width: 90%;
      padding: 10px;
      border-top: none;
      border-left: none;
      border-right: none;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>
  <main>
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card mb-3 ">
          <div class="card-body">
            <fieldset>
              <legend>Input here</legend>
              <input type="text" placeholder="Enter anything you wanted to encode to qrcode." id="inp">
            </fieldset>
            <br>
            <img class="rounded mx-auto d-block img-fluid" id="qrCode" src="/assets/images/qrcode.png" alt="QRCode image" width="200" />
            <br>
            <div class="text-center">
              <button class="btn mb-2" onclick="generateQRCode()">Generate</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3 ">
          <h1 class="card-header">What is QR Code?</h1>
          <div class="card-body">
            <p class="card-text">
              A QR Code is a two-dimensional variant of a barcode consisting of black and white pixel patterns.
              <hr>
              Did you know that the Denso Wave firm created the Quick Response (QR) code in 1994? The Japanese company
              initially created it to track parts as they were transported throughout the automotive assembly process.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/qrcode/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/qrcode/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>
  <script>
    function generateQRCode() {
      let url = document.getElementById("inp").value;
      if (url.trim()) {
        qrCode.src = "https://api.qrserver.com/v1/create-qr-code/?size=480x480&data=" + url;
      }
    }
  </script>
</body>

</html>