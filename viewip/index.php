<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "What's My IP Address? - Check your IP Address",
    "A numerical label that identifies a computer network that communicates using the Internet Protocol. The fundamental functionalities of an IP address are network interface identification and location addressing.",
    "https://mrepol742.github.io/viewip/"
  );
  $meta->setImage("https://mrepol742.github.io/images/ipaddress.png", "Cover Photo");
  $meta->setKeywords("viewip, ipaddress, what is my ip address?");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="card mt-5">
      <div class="card-body text-center">
        <h1 class="card-title">Your internet IP Address is</h1>
        <h3 id="ip34"> </h3>
        <p class="card-text">Please click refresh to detect new changes to the ip address.</p> <br>
        <button class="btn" onclick="refreshIp()">Refresh</button>
      </div>
    </div>
    <br>
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title">What is IP Address?</h5>
        <p class="card-text">
          An Internet Protocol address, such as 192.0.2.1, is a numerical label that identifies a computer network
          that communicates using the Internet Protocol. The fundamental functionalities of an IP address are network
          interface identification and location addressing.
        </p>
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/viewip/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/viewip/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  <?php include("./includes/footer.php") ?>
  <script>
    refreshIp();

    function refreshIp() {
      fetch('https://api64.ipify.org/?format=json')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          document.getElementById("ip34").innerHTML = data.ip;
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
    }
  </script>
</body>

</html>