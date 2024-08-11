<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Webvium Dev - Lightweight, Fast, Material and Full-Featured Android Web Browser.",
    "Take a look at the dev build variant of Webvium Browser fresh from the VCS.",
    "https://mrepol742.github.io/webviumdev/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumbeta.png", "Cover Photo");
  $meta->setKeywords("webvium, browser, webvium dev, dev");
  ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Webvium Dev",
      "operatingSystem": "ANDROID",
      "applicationCategory": "BrowserApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.5",
        "ratingCount": "700"
      },
      "offers": {
        "@type": "Offer",
        "price": "0"
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
          <img src="/assets/images/webvium_transparent_icon.png" class="rounded mx-auto d-block img-fluid" alt="Webvium Dev" width="300" height="300">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <br>
            <h1 class="card-title">Webvium Dev</h1>
            <p class="card-text">Lightweight, Fast, Material and Full-Featured Android Web Browser.
              <br> <small id="curr">By downloading, you agree to its <a href="/webvium/privacypolicy/">privacy
                  policy</a>.</small><br><br>
              #communication #tools #browsers
            </p>
            <button id="download_btn" type="button" class="btn" onclick="download()"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;<b>Download</b></button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="images">
      <div class="holder">
        <video preload="none" class="preview0" controls poster="/assets/images/webviumdev.png">
          <source src="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4" type="video/mp4">
          Your browser does not support the video tag. Click play to watch it directly <a href="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4">Play</a>.
        </video>
        <img loading="lazy" class="preview" src="/assets/images/webvium-1.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-2.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-3.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-4.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-5.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-6.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-7.jpg" alt="Webvium Dev App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-8.jpg" alt="Webvium Dev App Screenshot">
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

            To get the best with Webvium Dev, please keep up to date and regularly checks for software updates.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Webvium Dev</h5>
          <div class="card-body">
            <p class="card-text">
              The development version of Webvium browser unveils cutting-edge features such as advanced privacy controls
              and seamless integration with emerging web technologies, aiming to provide developers with a versatile
              platform for experimentation and innovation in web browsing.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Follow Webvium</h5>
          <div class="card-body">
            <p class="card-text">
              <a href="https://facebook.com/com.mrepol742.webvium.dev" aria-label="Facebook" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-facebook px-1"></i>
              </a>
              <a href="https://www.pinterest.ph/mrepol742/webvium" aria-label="Pinterest" style="padding-left: 5px; padding-right: 5px;" target="_blank">
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
          <h5 class="card-header">Support Webvium Dev Development</h5>
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
    </div>
    <br>
    <div id="info">
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
                <li class="list-group-item">App Name: Webvium Dev</li>
                <li class="list-group-item">Package Name: com.mrepol742.webvium.dev</li>
                <li class="list-group-item">Version: <span class="version">v2.9</span></li>
                <li class="list-group-item">Size: <span class="size12">400KB</span></li>
                <li class="list-group-item">Release date: Feb 7, 2022</li>
                <li class="list-group-item">Latest release: <span id="upda">February 15, 2024</span></li>
                <li class="list-group-item">Operating System: Android 5.0 above</li>
              </ul>
            </div>
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
                  <li class="list-group-item">Camera<br>- take pictures and videos</li>
                  <li class="list-group-item">Location<br>- access precise location (GPS and
                    network-based)<br>- access approximate location (network-based)</li>
                  <li class="list-group-item">Microphone<br>- record audio</li>
                  <li class="list-group-item">Storage<br>- modify or delete SD card contents<br>- read the
                    contents of your SD card</li>
                  <li class="list-group-item">Notifications<br>- to send notification</li>
                  <li class="list-group-item">Other<br>- control vibration<br>- run at startup<br>- have full
                    network access<br>- view network
                    connections<br>- change your audio settings<br>- install shortcuts</li>
                  <li class="list-group-item">You can disable access for these permissions in Settings.
                    Updates to Webvium may automatically add or remove permissions within each group.</li>
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
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/webviumdev/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/webviumdev/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  <footer class="mt-5">
    <div class="container">
      <div class="row footer-row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-md-3 col-xs-12">
          <h5>Melvin Jones Gallano Repol</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#workexp">Work Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#friends">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/privacypolicy/">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-md-3 col-xs-12">
          <h5>Software</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="/webvium/">Webvium</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/webviumbeta/">Webvium Beta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/webviumdev/">Webvium Dev</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/webviumvpn/">Webvium VPN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/CryptographySystem"><i class="fa-brands fa-github px-1"></i> Cryptography System</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/leopard"><i class="fa-brands fa-github px-1"></i> Leopard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Tic-Tac-Toe"><i class="fa-brands fa-github px-1"></i> Tic Tac Toe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Flashlight"><i class="fa-brands fa-github px-1"></i> Flashlight</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Linkin-Park"><i class="fa-brands fa-github px-1"></i> Linkin Park Song Lyrics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/SMS-Bomber"><i class="fa-brands fa-github px-1"></i> SMS Bomber</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Text-to-Speech"><i class="fa-brands fa-github px-1"></i> Text to Speech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Volume-Control-Pro"><i class="fa-brands fa-github px-1"></i> Volume Control Pro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Web-Flash"><i class="fa-brands fa-github px-1"></i> Web Flash</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/Fake-Identity-Generator"><i class="fa-brands fa-github px-1"></i> Fake ID Generator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://github.com/mrepol742/C-Programming-Tutorial"><i class="fa-brands fa-github px-1"></i> C Programming Tutorial</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-md-3 col-xs-12">
          <h5>Support Me</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="https://www.buymeacoffee.com/mrepol742">Buy Me a Coffee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.patreon.com/melvinjonesrepol">Patreon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://paypal.me/mrepol742">PayPal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://ko-fi.com/mrepol742">Ko-fi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/sponsors/mrepol742">Github Sponsor</a>
            </li>
          </ul>
          <br>
          <h5>Blogs</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="https://mrepol742.hashnode.dev">Hashnode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mrepol742.github.io/blog">mrepol742 @ blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://melvinjonesrepol.blogspot.com">Blogpost</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mrepol742.medium.com">Medium</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mrepol742.wordpress.com">Wordpress</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://dev.to/mrepol742">Dev.to</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-md-3 col-xs-12">
          <h5>Others</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/viewip/">View IP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/useragent/">User Agent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/qrcode/">QR Code</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sketch/">Sketch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/wallpaper/">Wallpaper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/calculator/">Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/calendar/">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rgbcalculator/">RGB Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ily/">Ily</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/flowers/">Flowers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/valentines/">Valentines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/screensizes/">Screen Sizes</a>
            </li>

          </ul>
        </div>
      </div>
      <br>
      <a href="https://facebook.com/melvinjonesrepol" aria-label="Facebook" target="_blank">
        <i class="fa-brands fa-facebook px-1"></i>
      </a>
      <a href="https://instagram.com/melvinjonesrepol" aria-label="Instagram" target="_blank">
        <i class="fa-brands fa-instagram px-1"></i>
      </a>
      <a href="https://pinterest.com/mrepol742" aria-label="Pinterest" target="_blank">
        <i class="fa-brands fa-pinterest px-1"></i>
      </a>
      <a href="https://twitter.com/mrepol742" aria-label="Twitter" target="_blank">
        <i class="fa-brands fa-twitter px-1"></i>
      </a>
      <a href="https://github.com/mrepol742" aria-label="Github" target="_blank">
        <i class="fa-brands fa-github px-1"></i>
      </a>
      <a href="https://linkedin.com/in/mrepol742" aria-label="LinkedIn" target="_blank">
        <i class="fa-brands fa-linkedin px-1"></i>
      </a>
      <a href="https://youtube.com/@mrepol742" aria-label="Youtube" target="_blank">
        <i class="fa-brands fa-youtube px-1"></i>
      </a><br>
      <span>&copy; 2021 Melvin Jones Gallano Repol. All Rights Reserved.</span>
    </div>
  </footer>
  <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <script>
    async function checkUpdate() {
      const response = await fetch("https://raw.githubusercontent.com/mrepol742/released/dev/info.json");
      const jsonData = await response.json();

      var items = document.querySelectorAll(".size12");
      items.forEach((e) => {
        e.innerHTML = jsonData.size + "KB";
      });
      var items3 = document.querySelectorAll(".version");
      items3.forEach((e3) => {
        e3.innerHTML = jsonData.versionFullName;
      });
      document.getElementById("upda").innerHTML = jsonData.latestRelease;



      try {
        if (latestVersionCode > Webvium.currentVersion()) {
          if (Webvium.currentVersion() + 1 != latestVersionCode) {
            document.getElementById("download_btn").style.backgroundColor = "#DB4437";
            document.getElementById("download_btn").style.borderColor = "#DB4437";
          }
          document.getElementById("download_btn").innerHTML = "Update Now";
        } else {
          document.getElementById("download_btn").innerHTML = "Installed " + jsonData.versionFullName;
        }
      } catch (en) {}

    }

    checkUpdate();

    function download() {
      window.location.href = "/webviumdev/download/";
    }
  </script>
</body>

</html>