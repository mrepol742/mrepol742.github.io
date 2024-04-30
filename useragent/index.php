<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "What's My User Agent? - Check your User Agent",
    "A user agent is any program that retrieves, renders, and supports end-user interaction with Web information on behalf of a user. As a result, a user agent is a unique type of software agent.",
    "https://mrepol742.github.io/useragent/"
  );
  $meta->setImage("https://mrepol742.github.io/images/useragent.png", "Cover Photo");
  $meta->setKeywords("browser user agent, user agent, what is my user agent?");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>
  <main>
    <div class="card mt-5">
      <div class="card-body text-center" style="padding:40px;">
        <h1 class="card-title">Your browser user agent is</h1>
        <h3 id="ip34"> </h3>
        <p class="card-text">Please click refresh to detect new changes to the user agent.</p> <br>
        <button class="btn" onclick="refreshIp()">Refresh</button>
      </div>
    </div>
    <br>
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title">What is User Agent?</h5>
        <p class="card-text">
          A user agent is any program that retrieves, renders, and supports end-user interaction with Web information
          on behalf of a user. As a result, a user agent is a unique type of software agent.
        </p>
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/useragent/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/useragent/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>
  <script>
    refreshUa();

    function refreshUa() {
      document.getElementById("ip34").innerHTML = navigator.userAgent;
    }
  </script>
</body>

</html>