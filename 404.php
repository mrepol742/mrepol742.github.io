<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include("includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Page not found - Melvin Jones Gallano Repol",
    "I'm a Self-taught Freelance Software Engineer with experience in full-stack web development, seo, data analyics, embedded system design with arduino programming, hardware & software troubleshooting and PWA.",
    "https://mrepol742.github.io/"
  );
  $meta->setImage("https://mrepol742.github.io/images/cover.jpg", "Cover Photo");
  $meta->setKeywords("melvin jones, mrepol742, repol, mjrepol, melvin jones gallano repol, melvinjonesrepol");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">
  
  <?php
  include('includes/nav.php');
  include('includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="py-5">
      <img src="https://i.gifer.com/WRNx.gif" class="rounded m-2">
      <h1 class="mt-3">The page or file you are looking for was not here and I don't know why.</h1>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/search/index.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/search/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  <?php include('includes/footer.php') ?>
  
</body>

</html>