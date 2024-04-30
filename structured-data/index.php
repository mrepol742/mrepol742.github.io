<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Schema Markup Testing - Test Your Structured Data",
    "A machine-readable representation of your product data that can be shared with Google Merchant Center directly from your website. The markup added to your HTML assists Google and other search engines in reliably understanding and processing your content.",
    "https://mrepol742.github.io/structured-data/"
  );
  $meta->setImage("https://mrepol742.github.io/images/cover.png", "Cover Photo");
  $meta->setKeywords("google rich results, schema validator");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

<?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="py-5">
      <h1>Test your structured data</h1>
      <h4>A machine-readable representation of your product data that can be shared with Google Merchant Center directly from your website. The markup added to your HTML assists Google and other search engines in reliably understanding and processing your content.</h4>
      <div class="row">
        <div class="col-sm-6">
          <div class="card mb-3 ">
            <img loading="lazy" src="/assets/images/structureddata-rich.png" class="rounded mx-auto d-block img-fluid"
            alt="Rich Results Test" width="550">
            <div class="card-body">
              <h5 class="card-title">Rich Results Test</h5>
              <p class="card-text"> 
                The official Google tool for testing your structured data to see which Google rich results the structured data on your page can generate. You can also see how rich results will appear in Google Search.
            
              </p>
              <a href="https://search.google.com/test/rich-results">https://search.google.com/test/rich-results</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card mb-3 ">
            <img loading="lazy" src="/assets/images/structureddata-schema.png" class="rounded mx-auto d-block img-fluid"
            alt="Schema Markup Validator" width="550">
            <div class="card-body">
              <h5 class="card-title">Schema Markup Validator</h5>
              <p class="card-text"> 
                Validate all Schema.org-based structured data embedded in web pages.
              </p>
              <a href="https://validator.schema.org">https://validator.schema.org</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/structured-data/index.html"
              target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/structured-data/index.html?plain=1"
              target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>
  <?php include("./includes/footer.php") ?>
</body>

</html>