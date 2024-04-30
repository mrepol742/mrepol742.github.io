<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Privacy Policy - Melvin Jones Gallano Repol",
    "I'm a Self-taught Freelance Software Engineer with experience in full-stack web development, seo, data analyics, embedded system design with arduino programming, hardware & software troubleshooting and PWA.",
    "https://mrepol742.github.io/privacypolicy/"
  );
  $meta->setImage("https://mrepol742.github.io/images/cover.png", "Cover Photo");
  $meta->setKeywords("melvin jones, mrepol742, repol, mjrepol, melvin jones gallano repol, melvinjonesrepol");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <h1 class="text-center mt-5">What I Collect, How i use and Changes</h1><br>
    <div class="card ">
      <div class="card-body">
        <p class="card-text">Third party vendors, including Google, use cookies to serve ads and analyze
          traffic based on a user's prior visits to this website.
          Google's use of advertising cookies enables it and its partners to serve ads to this website
          users based on their visit.
          Users may opt out of personalized advertising by visiting <a href="https://www.google.com/settings/ads">Ads
            Settings</a>. Simple Analytics also analyze
          this website traffic you can view the stats by visiting <a href="https://simpleanalytics.com/mrepol742.github.io">https://simpleanalytics.com/mrepol742.github.io</a>
        </p>
      </div>
    </div> <br>
    <div class="card ">
      <div class="card-body">
        <p class="card-text">The information we gather is used to offer, maintain, and secure our users'
          services. This information may also be used to improve your user experience with our services.
          Before we use any of your information for a reason other than those listed in this Privacy
          Policy, we will ask for your permission.</p>
      </div>
    </div>
    <br>
    <div class="card ">
      <div class="card-body">
        <p class="card-text">We reserve the right, in our sole and absolute discretion, to make changes to
          this Policy from time to time. Please review this Privacy Policy periodically to check for
          updates.<br><br>Updated on: April 18, 2022</p>
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/privacypolicy/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/privacypolicy/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with
              this content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>
</body>

</html>