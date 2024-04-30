<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("././includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Privacy Policy - Webvium",
    "Lightweight, Fast, Material and Full-Featured Android Web Browser.",
    "https://mrepol742.github.io/webvium/privacypolicy/"
  );
  $meta->setImage("https://mrepol742.github.io/images/webvium.png", "Cover Photo");
  $meta->setKeywords("webvium, privacy policy");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('././includes/nav.php');
  include('././includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="mt-5 text-center">
      <h1>I don't store your data</h1>
      <p>I physically can't. I have nowhere to
        store it. I don't even have a server<br>
        database to store it. So even if Elon Musk asked nicely to see your data, i wouldn't have
        anything to show him.</p><br>
    </div>
    <br>
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title">Changes</h5>
        <p class="card-text">We reserve the right, in our sole and absolute discretion, to make changes to
          this Policy from time to time. Please review this Privacy Policy periodically to check for
          updates.<br><br>Updated on: January 21, 2022</p>
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/webvium/privacypolicy/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/webvium/privacypolicy/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with
              this content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  
  <?php include("././includes/footer.php") ?>
</body>

</html>