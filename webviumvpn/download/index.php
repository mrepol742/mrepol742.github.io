<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include("././includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Download Webvium VPN for Android",
    "Anonymous, Secured, Private and the fastest Virtual Private Network.",
    "https://mrepol742.github.io/webviumvpn/download/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumvpn.png", "Cover Photo");
  $meta->setKeywords("webvium, vpn, download");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php
  include('././includes/nav.php');
  include('././includes/components/toast/privacypolicy.php');
  ?>
  <main>
    <h1 class="text-center mt-5">Thank you for downloading Webvium VPN.</h1><br>
    <div class="card ">
      <div class="card-body">
        <p>Within a few seconds, your download should begin automatically. If it doesn't, please
          start the <a href="https://raw.githubusercontent.com/mrepol742/released/80a254530ab93b740ea489b1b4d1b1e058948a9d/Webvium%20VPN%20v1.1.apk" id="retry-download" target="_blank">download using this link.</a></p>
        <br>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <h5>
              <i class="fa-solid fa-play"></i>
              Run the Webvium VPN installer
            </h5>
            <p>In the bottom left corner of your screen, click the downloaded file.</p>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <h5>
              <i class="fa-solid fa-check"></i>
              Confirm the installations
            </h5>
            <p>To start your Webvium VPN installation, select 'Yes' from the system dialog.</p>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <h5>
              <i class="fa-solid fa-forward"></i>
              Follow setup instructions
            </h5>
            <p>Click the button in the installer window to begin.</p>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <h5>
              <i class="fa-solid fa-heart"></i>
              Thank you
            </h5>
            <p>Share Webvium and let the world know about it.</p>
          </div>
        </div>
      </div>
      <br>
      <div>
        <h5>Alternatively, you can download Webvium from this 3rd party app store.</h5>
        <a href="https://webvium-vpn.en.uptodown.com/android" target="_blank">
          <img loading="lazy" src="/assets/images/uptodown.jpg" alt="Download Webvium VPN, Discover and Share" width="110" />
        </a> <a href="https://www.amazon.com/dp/B09TRT8PGF" target="_blank">
          <img loading="lazy" src="/assets/images/available_at_amazon_en_horizontal.png" alt="Webvium VPN Available on Amazon" width="200" />
        </a>
      </div>
      <br>
      <div>
        <h5>Support Webvium VPN Development</h5>
        <a href="https://www.buymeacoffee.com/mrepol742">
          <img loading="lazy" src="https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black" alt="BuyMeACoffee">
        </a>

        <a href="https://www.patreon.com/melvinjonesrepol">
          <img loading="lazy" src="https://img.shields.io/badge/Patreon-F96854?style=for-the-badge&logo=patreon&logoColor=white" alt="Patreon">
        </a>

        <a href="https://paypal.me/mrepol742">
          <img loading="lazy" src="https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white" alt="PayPal">
        </a>

        <a href="https://ko-fi.com/mrepol742">
          <img loading="lazy" src="https://img.shields.io/badge/Ko--fi-F16061?style=for-the-badge&logo=ko-fi&logoColor=white" alt="Ko-Fi">
        </a>
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/webviumvpn/download/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/webviumvpn/download/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  <?php include("././includes/footer.php") ?>

  <script>
    setTimeout(function() {
      window.location.href = 'https://raw.githubusercontent.com/mrepol742/released/80a254530ab93b740ea489b1b4d1b1e058948a9d/Webvium%20VPN%20v1.1.apk'
    }, 3000);

    const count = 200,
      defaults = {
        origin: {
          y: 0.7
        },
      };

    function fire(particleRatio, opts) {
      confetti(
        Object.assign({}, defaults, opts, {
          particleCount: Math.floor(count * particleRatio),
        })
      );
    }

    fire(0.25, {
      spread: 26,
      startVelocity: 55,
    });

    fire(0.2, {
      spread: 60,
    });

    fire(0.35, {
      spread: 100,
      decay: 0.91,
      scalar: 0.8,
    });

    fire(0.1, {
      spread: 120,
      startVelocity: 25,
      decay: 0.92,
      scalar: 1.2,
    });

    fire(0.1, {
      spread: 120,
      startVelocity: 45,
    });
  </script>
</body>

</html>