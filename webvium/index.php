<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Webvium - Lightweight, Fast, Material and Full-Featured Android Web Browser.",
    "A Project that aims to be the lightest, fastest, secured, private and full-featured android web browser. Programmed and design from Scratch.",
    "https://mrepol742.github.io/webvium/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webvium22.png", "Cover Photo");
  $meta->setKeywords("webvium, browser, lightweight android browser, android browser, aosp browser, web browser for android, lightweight fast web browser, fast browser, private browser");
  ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Webvium",
      "operatingSystem": "ANDROID",
      "applicationCategory": "BrowserApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "ratingCount": "10003"
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
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is Webvium?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p>Webvium is a web browser for android and supported devices. It's fast, lightweight and comes with amazing features consider its app size is so low. It was created from scratch without dependencies, a web browser you haven't seen before. Try it out.</p>"
        }
      }, {
        "@type": "Question",
        "name": "How to download and install Webvium?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<h3>Download & Install Webvium</h3>              <p>Webvium is a lightweight, fast, material and full-featured android web browser. <br>              Before download, please check if Webvium support your OS and other requirements.              <h3>Get Webvium</h3>              Download Webvium for <a href=\"/webvium/download/\">Android phones and tablets.</a> <br>              Webvium supports android 5.0+ (Lollipop) on phones and tablets.</p>              <h3>Install Webvium</h3>              <p>                <ol>                  <li>On your Android phone or tablet, go to <a href=\"/webvium/download/\">Webvium</a>.</li>                  <li>Tap <b>Download</b>.</li>                  <li>Tap <b>Accept</b>.</li>                  <li>To start browsing, go to the Home or All Apps Page. Tap the Webvium app.</li>                </ol>                Incase if issues, try uninstalling or reinstalling Webvium to fix problems with preferences or updates.              </p>"
        }
      }, {
        "@type": "Question",
        "name": "How to make Webvium your default browser?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<h3>Set Webvium as your default web browser</h3>                            <ol>                <li>On your Android device, open Settings.</li>                <li>Tap <b>Apps</b>.</li>                <li>Under \"General\", tap <b>Default apps</b>.</li>                <li>Tap <b>Browser app</b> > Webvium.</li>              </ol>              "
        }
      }, {
        "@type": "Question",
        "name": "How to import bookmarks, history and settings?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<h3>Import bookmarks, history & settings</h3>              To import bookmarks, history & settings from backup to Webvium:                <ol>                  <li>On your Android device, open Webvium.</li>                  <li>At the bottom, click menu.</li>                  <li>Tap <b>Settings</b> > <b>Backup</b>.</li>                  <li>Tap <b>Import</b>.</li>                  <li>Select the json file that contains the bookmark, history or settings you'd like to import.</li>                </ol>              "
        }
      }]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "Webvium - Lightweight, Fast, Material and Full-Featured Android Web Browser.",
      "url": "https://mrepol742.github.io/webvium/",
      "description": "A Project that aims to be the lightest, fastest, secured, private and full-featured android web browser. Programmed and design from Scratch.",
      "thumbnailUrl": "https://mrepol742.github.io/images/webvium22.png",
      "uploadDate": "2023-07-23T08:00:00+08:00",
      "duration": "PT27S",
      "contentUrl": "https://mrepol742.github.io/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4",
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "interactionType": {
          "@type": "WatchAction"
        },
        "userInteractionCount": 5647018
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
          <img src="/assets/images/webvium_transparent_icon.png" class="rounded mx-auto d-block img-fluid" alt="Webvium" width="300" height="300">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <br>
            <h1 class="card-title">Webvium</h1>
            <p class="card-text">Lightweight, Fast, Material and Full-Featured Android Web Browser.
              <br> <small id="curr">By downloading, you agree to its <a href="/webvium/privacypolicy/">privacy
                  policy</a>.</small><br><br>
              #communication #tools #browsers
            </p>
            <button id="download_btn" type="button" class="btn" onclick="download()"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;<b>Download</b></button><br>
            <span id="nm0d"></span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="images">
      <div class="holder">
        <video preload="none" class="preview0" controls poster="/assets/images/webvium22.png">
          <source src="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4" type="video/mp4">
          Your browser does not support the video tag. Click play to watch it directly <a href="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4">Play</a>.
        </video>
        <img loading="lazy" class="preview" src="/assets/images/webvium-1.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-2.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-3.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-4.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-5.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-6.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-7.jpg" alt="Webvium App Screenshot">
        <img loading="lazy" class="preview" src="/assets/images/webvium-8.jpg" alt="Webvium App Screenshot">
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

            To get the best with Webvium, please keep up to date and regularly checks for software updates.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Cuztomization</h5>
          <div class="card-body">
            <p class="card-text">
              Use the Interface settings, to change the app theme to dark or light. Add a little
              curved on edge of screen or make your favorite photo or wallpaper as app main
              background. Redefined your browsing experience with customization from Webvium.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Lightweight & Faster</h5>
          <div class="card-body">
            <p class="card-text">
              Webvium is designed to be the most lightweight app possible. Lightweight means faster
              installation time, faster download time, better app experience. Share this app to your
              friends within fraction of a seconds.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Material Design</h5>
          <div class="card-body">
            <p class="card-text">
              Immerse yourself in new and awesome browser fully material based designed. The colors
              and icons are carefully picked for you, and it uses one of the coolest fonts ever The
              Maven Pro from Google Fonts. Easier UI Navigation and modern based UI designs.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Total Browsing Control</h5>
          <div class="card-body">
            <p class="card-text">
              Here you can customize your all of web settings preferences if you wanted anytime.
              Webvium guaranteed that your the admin(super-user) of the app.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Incomparable Privacy</h5>
          <div class="card-body">
            <p class="card-text">
              Protect your privacy, Webvium does not collect any kind of data Your browsing activity
              is at highest security and anonymous.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">You In Control</h5>
          <div class="card-body">
            <p class="card-text">
              Yeah, the only browser that allows you to backup all of your data settings preferences,
              history, searches, bookmarks and download list and export it when you needed.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Manage Space</h5>
          <div class="card-body">
            <p class="card-text">
              It does not mean Webvium is lightweight we wont care about your storage free space. Here
              we revolutionize how browser should look like. In Webvium Manage Space you can see what
              part of webvium tool so much space and delete them whenever you want.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">AdBlocker</h5>
          <div class="card-body">
            <p class="card-text">
              Stay safe while surfing the Internet. Webvium AdBlocker will take care of blocking ads,
              analytics and error monitoring.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-3 ">
          <h5 class="card-header">Follow Webvium</h5>
          <div class="card-body">
            <p class="card-text">

              <a href="https://facebook.com/com.mrepol742.webvium" aria-label="Facebook" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-facebookpx-1"></i>
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
          <h5 class="card-header">Support Webvium</h5>
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

              <a href="https://webvium.en.uptodown.com/android" target="_blank">
                <img loading="lazy" src="/assets/images/uptodown.jpg" alt="Download Webvium, Discover and Share" width="110" />
              </a>
              <a href="https://www.amazon.com/dp/B09TLFJ86L" target="_blank">
                <img loading="lazy" src="/assets/images/available_at_amazon_en_horizontal.png" alt="Webvium Available on Amazon" width="200" />
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
                <li class="list-group-item">App Name: Webvium</li>
                <li class="list-group-item">Package Name: com.mrepol742.webvium</li>
                <li class="list-group-item">Version: <span class="version">v2.8</span></li>
                <li class="list-group-item">Size: <span class="size12">400KB</span></li>
                <li class="list-group-item">Release date: April 16, 2021</li>
                <li class="list-group-item">Latest release: <span id="upda">February 22, 2022</span></li>
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
      <div class="col-sm-6">
        <div class="accordion " id="permissions">
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
                  <li class="list-group-item">Other<br>- control vibration<br>- run at startup<br>- have full network
                    access<br>- view network
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
    <h2 class="text-center mt-5" id="frequentlyAskQuestions">Faq</h2>
    <div class="d-flex justify-content-center">
      <div class="line" style="width: 2%;"></div>
    </div><br>
    <div class="accordion ">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive22a">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive22a" aria-expanded="true" aria-controls="panelsStayOpen-collapseFive22a">
            What is Webvium?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive22a" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFive22a">
          <div class="accordion-body">
            <p>Webvium is a web browser for android and supported devices. It's fast, lightweight and comes with
              amazing features consider its app size is so low. It was created from scratch without dependencies, a
              web browser you haven't seen before. Try it out.</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            How to download and install Webvium?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <h3>Download & Install Webvium</h3>
            <p>Webvium is a lightweight, fast, material and full-featured android web browser. <br>
              Before download, please check if Webvium support your OS and other requirements.</p>
            <h3>Get Webvium</h3>
            <p>Download Webvium for <a href="/webvium/download/">Android phones and tablets.</a> <br>
              Webvium supports android 5.0+ (Lollipop) on phones and tablets.</p>
            <h3>Install Webvium</h3>
            <ol>
              <li>On your Android phone or tablet, go to <a href="/webvium/download/">Webvium</a>.</li>
              <li>Tap <b>Download</b>.</li>
              <li>Tap <b>Accept</b>.</li>
              <li>To start browsing, go to the Home or All Apps Page. Tap the Webvium app.</li>
            </ol>
            Incase if issues, try uninstalling or reinstalling Webvium to fix problems with preferences or updates.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            How to make Webvium your default browser?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <h3>Set Webvium as your default web browser</h3>
            <ol>
              <li>On your Android device, open Settings.</li>
              <li>Tap <b>Apps</b>.</li>
              <li>Under "General", tap <b>Default apps</b>.</li>
              <li>Tap <b>Browser app</b> > Webvium.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            How to import bookmarks, history and settings?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            <h3>Import bookmarks, history & settings</h3>
            To import bookmarks, history & settings from backup to Webvium:
            <ol>
              <li>On your Android device, open Webvium.</li>
              <li>At the bottom, click menu.</li>
              <li>Tap <b>Settings</b> > <b>Backup</b>.</li>
              <li>Tap <b>Import</b>.</li>
              <li>Select the json file that contains the bookmark, history or settings you'd like to import.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            How to set up your homepage?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body">
            <h3>Choose your homepage</h3>
            You can change which page appears when you tap Home.
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>At the bottom, click menu.</li>
              <li>Tap <b>Settings</b>.</li>
              <li>Under "General", tap <b>Homepage</b>.</li>
              <li>Choose Webvium homepage or a custom one.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
            How to create, view & edit bookmarks?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
          <div class="accordion-body">
            <h3>Add a bookmark</h3>
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>Go to a site you want to visit again in the future.</li>
              <li>Hold the address bar, tap <b>Add to</b>.</li>
              <li>Tap <b>Bookmarks</b>.</li>
              <li>Tap <b>Ok</b>.</li>
            </ol>
            <h3>Open a bookmark</h3>
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>At the bottom, click menu.</li>
              <li>Tap <b>Bookmarks</b></li>
              <li>Find and tap a bookmark.</li>
            </ol>
            <h3>Edit a bookmark</h3>
            <ul>
              <li>Hold on bookmark, tap <b>Edit</b>.</li>
            </ul>
            <h3>Remove a bookmark</h3>
            <ul>
              <li>Hold on bookmark, tap <b>Remove</b>.</li>
            </ul>
            <h3>Share a bookmark</h3>
            <ul>
              <li>Hold on bookmark, tap <b>Share</b>.</li>
            </ul>
            <h3>Copy the bookmark url</h3>
            <ul>
              <li>Hold on bookmark, tap <b>Copy</b>.</li>
            </ul>
            <h3>Add to homescreen the bookmark</h3>
            <ul>
              <li>Hold on bookmark, tap <b>Add to homescreen</b>.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive2" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive2">
            How to use tabs in Webvium?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive2">
          <div class="accordion-body">
            <h3>Use tabs in Webvium</h3>
            <p>Open as many tabs as you want using Webvium. You can also see all of your tabs, switch between them,
              and also remove a tab.</p>
            <h3>Open a new tab</h3>
            <ol>
              <li>On your Android phone, open the Webvium app.</li>
              <li>At the bottom, click tab.</li>
              <li>And at the top right, tap <b>New Tab</b></li>
            </ol>
            <h3>Remove a tab</h3>
            <ol>
              <li>On your Android phone, open the Webvium app.</li>
              <li>At the bottom, click tab.</li>
              <li>Hold on the tab you want to close, tap <b>Remove</b>.</li>
            </ol>
            <h3>Refresh tab</h3>
            <ol>
              <li>On your Android phone, open the Webvium app.</li>
              <li>At the bottom, tap <b>Refresh</b>.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive22">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive22" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive22">
            How to search the web on Webvium?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive22" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive22">
          <div class="accordion-body">
            <h3>Search the web on Webvium</h3>
            Quickly find what you looking for on the internet, in history and in your bookmarks.
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>In the address bar, type your search query.</li>
              <li>Tap the result or <b>Go</b>.</li>
            </ol>
            <h3>Search using voice recognition</h3>
            <ul>
              <li>At the bottom, tap <b>Voice</b>.</li>
            </ul>
            <h3>Search inside the web page</h3>
            Find specific word on a web page on your Android device.
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>Open a web page.</li>
              <li>At the top, tap menu.</li>
              <li>Tap <b>Find in page</b></li>
              <li>Type your search query.</li>
              <li>Then tap <b>Search</b>.</li>
              <li>Matches to the search query are highlighted. You can locate them by using the Up and Down buttons.
              </li>
            </ol>
            <h3>Search for words on a web page</h3>
            Find more about specific word on a web page with Web Search.
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>Open a page.</li>
              <li>Highlight a word on a page, tap it or touch and hold it.</li>
              <li>Tap <b>Web Search</b>.</li>
            </ol>
            <h3>Turn Search Assistant on or off</h3>
            <ol>
              <li>On your Android phone or tablet, open the Webvium app.</li>
              <li>At the bottom, tap menu.</li>
              <li>Tap <b>Settings</b>.</li>
              <li>Tap <b>Search</b>.</li>
              <li>Tap <b>Assistant</b>.</li>
              <li>Tap <b>Device assistant app</b>.</li>
              <li>Tap the Webvium app.</li>

            </ol>
            You can now search by holding at your Android device home button.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive222">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive222" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive222">
            How to set your default search engine on Webvium?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive222" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive222">
          <div class="accordion-body">
            <h3>Set your default Search Engine</h3>
            <p>The address bar (omnibox) can be used as a search engine. Although Google is used by default, you can
              choose to use a different default search engine.</p>
            <ol>
              <li>On your Android phone, open the Webvium app.</li>
              <li>At the bottom, click menu.</li>
              <li>Tap <b>Settings</b>.</li>
              <li>Under "Search", tap <b>Search Engines</b>.</li>
              <li>Choose the search engine you want to use.</li>
            </ol>
          </div>
        </div>
      </div>

    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/webvium/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/webvium/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>

  <script>
    async function checkUpdate() {
      const response = await fetch("https://raw.githubusercontent.com/mrepol742/released/stable/info.json");
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
      window.location.href = "/webvium/download/";
    }
  </script>
</body>

</html>