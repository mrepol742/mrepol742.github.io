<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $disableAds = false;
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Search",
    "A Powerful search engine that allows users to quickly and easily find the information.",
    "https://mrepol742.github.io/search/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webviumsearch.png", "Cover Photo");
  $meta->setKeywords("webvium search, search");
  ?>
  <link rel="stylesheet" href="/assets/css/search.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <main>
    <noscript>
      <div class="nojs">
        An error occurred. Try reloading this page, or enable JavaScript if it is disabled in your browser.
      </div>
    </noscript>

    <section id="page1">
      <h1 id="currD">Search</h1>
      <div class="search-container">
        <input id="search" list="suggestions" placeholder="What are you looking for?" type="text">
        <svg id="but" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg>
      </div>
      <datalist id="suggestions"></datalist>
      <div id="sug"></div>
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
    </section>
  </main>
  <br><br>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
    integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
    integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="/lib/xml2json.js"></script>
  <script src="/assets/js/search.js"></script>

</body>

</html>