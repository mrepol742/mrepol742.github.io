<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("./includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Generate RGB Color - Create GRB Color using this Calculator",
    "The red, green, and blue primary colors make up the additive RGB color model. This page help you to generate a rgb color that suit to your needs.",
    "https://mrepol742.github.io/rgbcalculator/"
  );
  $meta->setImage("https://mrepol742.github.io/images/rgb.jepg", "Cover Photo");
  $meta->setKeywords("google rich results, schema validator");
  ?>
  <link rel="stylesheet" href="/assets/css/rgbcalculator.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php
  include('./includes/nav.php');
  include('./includes/components/toast/privacypolicy.php');
  ?>
  <main>
    <div class="row mt-5">
      <div class="col-sm-6">
        <div class="card mb-3 ">
          <div class="card-body">
            <form>
              <fieldset>
                <legend>RGB</legend>
                <div class="text-center">
                  <input type="text" id="box" value="rgb(255,255,255)"> <br>
                  <label for="red">Red</label> <br>
                  <input type="range" id="red" value="255" min="0" max="255"> <br>
                  <label for="green">Green</label> <br>
                  <input type="range" id="green" value="255" min="0" max="255"> <br>
                  <label for="blue">Blue</label> <br>
                  <input type="range" id="blue" value="255" min="0" max="255"> <br><br>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3 ">
          <h1 class="card-header">What is RGB?</h1>
          <div class="card-body">
            <p class="card-text">
              The red, green, and blue main colors of light are put together in different ways to create a wide range
              of colors in the additive RGB color model. The initials of the three additive fundamental colors—red,
              green, and blue—were used to create the model's name.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
      </div>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/rgbcalculatorex.html" target="_blank">Edit on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/rgbcalculator/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include("./includes/footer.php") ?>
  <script src="/js/rgbcalculator.js"></script>
</body>

</html>