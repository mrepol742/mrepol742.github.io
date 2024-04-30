<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Webvium Search",
    "A Powerful search engine that allows users to quickly and easily find the information.",
    "https://mrepol742.github.io/search/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumsearch.png", "Cover Photo");
  $meta->setKeywords("webvium search, search");
  ?>
  <link rel="stylesheet" href="/assets/css/search.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFD9TXR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <main>
    <div class="toast" id="privacypolicy" style="position: fixed; bottom: 0; right: 0; z-index: 9999; float: right; margin: 3%;" data-bs-autohide="false">
      <div class="toast-header">
        <i class="fa-solid fa-cookie-bite"></i> &nbsp;&nbsp;
        <strong class="me-auto">Your Privacy</strong>

      </div>
      <div class="toast-body">
        <p>This site uses cookies to provide services and to analyze traffic in accordance with our <a href="/privacypolicy/" id="learnmore">Privacy Policy</a>.</p>
        <div class="mt-2 pt-2">
          <button type="button" class="btn" id="accpt"><b>Accept</b></button>
        </div>
      </div>
    </div>
    <noscript>
      <div class="nojs">
        An error occurred. Try reloading this page, or enable JavaScript if it is disabled in your browser.
      </div>
    </noscript>

    <section id="page1">
      <h1 id="currD">Webvium Search</h1>
      <div class="search-container">
        <input id="search" list="suggestions" placeholder="What are you looking for?" type="text">
        <svg id="but" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg>
      </div>
      <datalist id="suggestions"></datalist>
      <div id="sug"></div>

      <br>
      <div class="card-group wid" style="text-align: left;" id="wid2">
        <div class="card" style="background: transparent !important;">
          <div class="card-body">
            <h5 class="card-title" id="stitle">Faq</h5>
            <div class="accordion " id="accordion-faq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne2323">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2323" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne2323">
                    What is Webvium Search?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne2323" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne2323">
                  <div class="accordion-body">
                    <p>Find information quickly and easily, and browse the Internet securely with Webvium Search.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne2323as">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2323as" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne2323as">
                    How to change search engine?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne2323as" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne2323as">
                  <div class="accordion-body">
                    <p>Open Webvium Settings > go to Search and Search Providers.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne232323">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne232323" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne232323">
                    How to change background images?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne232323" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne232323">
                  <div class="accordion-body">
                    <p>Go to Webvium Settings > and Interface to apply your own preference in Webvium Search
                      Background.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne232323as">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne232323as" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne232323as">
                    How to use custom images as Background?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne232323as" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne232323as">
                  <div class="accordion-body">
                    <p>Go to Webvium Settings > and Interface and select Custom Background in list of options in
                      Background.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne232323ef">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne232323ef" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne232323ef">
                    How to change Webvium Homepage?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne232323ef" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne232323ef">
                  <div class="accordion-body">
                    <p>Go to Webvium Settings > and General, select Home and choose on list of options.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-5" style="background: transparent !important;">
          <div class="card-body">
            <h5 class="card-title" id="stitle">Found a problem with this page?</h5>
            <ul class="card-text">
              <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/search/index.html" target="_blank">Edit on Github</a></li>
              <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/search/index.html?plain=1" target="_blank">Source on Github</a></li>
              <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with
                  this
                  content on GitHub</a></li>
            </ul>
            <h5 class="card-title" id="stitle">Support Search Development</h5>
            <p class="card-body">
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

    </section>
    <section id="page2" style="display: none;">

      <div class="input-group">
        <input type="text" class="form-control" id="search1" placeholder="What are you looking for?">
        <button class="navb" id="but1">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
          </svg>
        </button>
      </div>

      <br id="oppp">
      <div id="root">
      </div>
      <br>
      <div class="card cards mb-5">
        <div class="card-body">
          <h5 class="card-title">Found a problem with this page?</h5>
          <ul class="card-text">
            <li><a class="aaaa" href="https://github.com/mrepol742/mrepol742.github.io/edit/master/search/index.html" target="_blank">Edit on Github</a></li>
            <li><a class="aaaa" href="https://github.com/mrepol742/mrepol742.github.io/blob/master/search/index.html?plain=1" target="_blank">Source on Github</a></li>
            <li><a class="aaaa" href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem
                with this
                content on GitHub</a></li>

          </ul>
        </div>
      </div>
    </section>
  </main>
  <br><br>
  <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/vendor/components/jquery/jquery.min.js"></script>
  <script src="/lib/xml2json.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/search.js"></script>

</body>

</html>