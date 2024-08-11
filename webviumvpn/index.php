<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Webvium VPN - Anonymous, Secured, Private and the fastest Virtual Private Network.",
    "Inspired from Webvium, Webvium VPN is a lightweight android VPN app focuses in speed, simplicity, security and privacy.",
    "https://mrepol742.github.io/webviumvpn/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumvpn.png", "Cover Photo");
  $meta->setKeywords("webvium, vpn");
  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Webvium VPN",
      "operatingSystem": "ANDROID",
      "applicationCategory": "UtilitiesApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.5",
        "ratingCount": "6030"
      },
      "offers": {
        "@type": "Offer",
        "price": "0"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "Webvium VPN - Anonymous, Secured, Private and the fastest Virtual Private Network.",
      "url": "https://mrepol742.github.io/webviumvpn/",
      "description": "Inspired from Webvium, Webvium VPN is a lightweight android VPN app focuses in speed, simplicity, security and privacy.",
      "thumbnailUrl": "https://mrepol742.github.io/images/webviumvpn.png",
      "uploadDate": "2023-07-23T08:00:00+08:00",
      "duration": "PT23S",
      "contentUrl": "https://mrepol742.github.io/videos/Webvium%20VPN%20-%20Anonymous,%20Secured,%20Private%20and%20the%20fastest%20Virtual%20Private%20Network.mp4",
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "interactionType": {
          "@type": "WatchAction"
        },
        "userInteractionCount": 102111
      }
    }
  </script>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="card mb-3 mt-5">
      <div class="row g-0">
        <div class="col-md-4">
          <img loading="lazy" src="/assets/images/webviumvpn_transparent_icon.png" class="rounded mx-auto d-block img-fluid" alt="Webvium VPN" width="300" height="300">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <br>
            <h1 class="card-title">Webvium VPN</h1>
            <p class="card-text">Anonymous, Secured, Private and the fastest Virtual Private Network.
              <br> <small id="curr">By downloading, you agree to its <a href="/webviumvpn/privacypolicy/">privacy
                  policy</a>.</small><br><br>
              #tools #vpn & proxy
            </p>
            <button id="download_btn" type="button" class="btn" onclick="download()"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;<b>Download</b></button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="images">
      <div class="holder">
        <video preload="none" class="preview0" controls poster="/assets/images/webviumvpn.png">
          <source src="/assets/videos/Webvium%20VPN%20-%20Anonymous,%20Secured,%20Private%20and%20the%20fastest%20Virtual%20Private%20Network.mp4" type="video/mp4">
          Your browser does not support the video tag. Click play to watch it directly <a href="/assets/videos/Webvium%20VPN%20-%20Anonymous,%20Secured,%20Private%20and%20the%20fastest%20Virtual%20Private%20Network.mp4">Play</a>.
        </video>
        <img loading="lazy" class="preview" src="/assets/images/webvium-vpn-main-light.jpg" alt="Webvium VPN">
        <img loading="lazy" class="preview" src="/assets/images/webvium-vpn-main-light-connected.jpg" alt="Webvium VPN">
        <img loading="lazy" class="preview" src="/assets/images/webvium-vpn-main-dark.jpg" alt="Webvium VPN">
        <img loading="lazy" class="preview" src="/assets/images/webvium-vpn-main-dark-connected.jpg" alt="Webvium VPN">
      </div>
    </div>
    <br>
    <h2 class="text-center mt-5" id="features">Features</h2>
    <div class="d-flex justify-content-center">
      <div class="line" style="width: 8%;"></div>
    </div><br>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">What's New?</h5>
          <div class="card-body">
            <p class="card-text">
              This update can include, but is not limited to: <br>
            <ul>
              <li>Software stability, performance and compatibility updates, bug fixes.</li>
              <li>Added new or enchanced software features.</li>
              <li>Improved and address security concerns.</li>
            </ul>

            To get the best with Webvium VPN, please keep up to date and regularly checks for software updates.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Lightweight</h5>
          <div class="card-body">
            <p class="card-text">We designed Webvium VPN to be the lightest VPN of its kind. So it
              doesnt cause much requirements in Storage.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Fast & Secured Servers</h5>
          <div class="card-body">
            <p class="card-text">Servers are carefull picked to make sure they are accessible anywhere
              at anytime. Unblock all sites while proving security and performance at a glance.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Dark Theme</h5>
          <div class="card-body">
            <p class="card-text">Fan of Dark Mode? or just wanna save few juices. We support Dark Mode
              too.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Follow Webvium VPN</h5>
          <div class="card-body">
            <p class="card-text">
              <a href="https://fb.com/com.samiunnafis.webviumvpn" aria-label="Facebook" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-facebook px-1"></i>
              </a>
              <a href="https://www.pinterest.ph/mrepol742/webvium-vpn" aria-label="Pinterest" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-pinterest px-1"></i>
              </a>
              <a href="https://github.com/webvium" aria-label="Github" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-github px-1"></i>
              </a>
              <a href="https://www.youtube.com/@webvium" aria-label="Youtube" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-youtube px-1"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Support Webvium VPN</h5>
          <div class="card-body">
            <p class="card-text">

              <a href="https://www.buymeacoffee.com/mrepol742">
                <img src="https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black" alt="Buy me a Coffee">
              </a>

              <a href="https://www.patreon.com/melvinjonesrepol">
                <img src="https://img.shields.io/badge/Patreon-F96854?style=for-the-badge&logo=patreon&logoColor=white" alt="Become my patreon">
              </a>

              <a href="https://paypal.me/mrepol742">
                <img src="https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white" alt="PayPal Me">
              </a>

              <a href="https://ko-fi.com/mrepol742">
                <img loading="lazy" src="https://img.shields.io/badge/Ko--fi-F16061?style=for-the-badge&logo=ko-fi&logoColor=white" alt="Buy me a Coffee">
              </a>

              <a href="https://github.com/sponsors/mrepol742">
                <img loading="lazy" src="https://img.shields.io/badge/sponsor-30363D?style=for-the-badge&logo=GitHub-Sponsors&logoColor=#EA4AAA" alt="Sponsor me on Github Sponsors">
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Available at 3rt Party App Stores</h5>
          <div class="card-body">
            <p class="card-text">
              <a href="https://webvium-vpn.en.uptodown.com/android" target="_blank">
                <img loading="lazy" src="/assets/images/uptodown.jpg" alt="Download Webvium VPN, Discover and Share" width="110" />
              </a>
              <a href="https://www.amazon.com/dp/B09TRT8PGF" target="_blank">
                <img loading="lazy" src="/assets/images/available_at_amazon_en_horizontal.png" alt="Webvium VPN Available on Amazon" width="200" />
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="accordion " id="info">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne3">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne3" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne3">
            Info
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne3" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne3">
          <div class="accordion-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Package Name: com.samiunnafis.webviumvpn</li>
              <li class="list-group-item">Version: <span class="version">1.0</span></li>
              <li class="list-group-item">Size: <span class="size12">7MB</span></li>
              <li class="list-group-item">Initial release date: Dec 25, 2021</li>
              <li class="list-group-item">Latest release: <span id="upda">Dec 25, 2021</span></li>
              <li class="list-group-item">Operating System: Android 5.0 above</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="accordion " id="dataSafety">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne2">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne2">
            Data Safety
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne2">
          <div class="accordion-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Safety starts with understanding how i collect and share your data. i
                provided this information and may update it over time.</li>
              <li class="list-group-item">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                </svg>
                &nbsp; &nbsp; No data shared with third parties
              </li>
              <li class="list-group-item">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z" />
                </svg>
                &nbsp; &nbsp; No data collected
              </li>
              <li class="list-group-item">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                </svg>
                &nbsp; &nbsp; Data is encrypted in transit
              </li>
              <li class="list-group-item">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                </svg>
                &nbsp; &nbsp; You can request that data be deleted
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6 col-md-3" id="permissions">
        <div class="accordion ">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne24">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne24" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne24">
                Permissions
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne24" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne24">
              <div class="accordion-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Version <span class="version">1.0</span> may request access to:</li>
                  <li class="list-group-item">Other<br>- control vibration<br>- have full network access<br>- view
                    network connections</li>
                  <li class="list-group-item">You can disable access for these permissions in Settings. Updates to
                    Webvium VPN may automatically add or remove permissions within each group.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div>
      <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-5077097159223655" data-ad-slot="7856709026"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/webviumvpn/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/webviumvpn/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>
  <script>
    function download() {
      window.location.href = "/webviumvpn/download/";
    }
  </script>
</body>

</html>