<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("./includes/head.php");

    $meta = new meta();
    $meta->setTitle(
        "Point of Sale System - Connecting everyone with smarter, faster, and more secure shipping. From first mile to last, we move your world forward.",
        "CCPA GDPR compliant full featured Point of Sale System for your business needs.",
        "https://mrepol742.github.io/point-of-sale-system//"
    );
    $meta->setImage("https://mrepol742.github.io/images/webviumbeta.png", "Cover Photo");
    $meta->setKeywords("Point of Sale System, pos, shopping, retail, sales, inventory");
    ?>
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
                        <h1 class="card-title">Point of Sale System</h1>
                        <p class="card-text">This project aims to develop a centralized, web-based Point of Sale (POS) system that serves multiple departments within an organization under a single cohesive platform. Designed with resource constraints and security at its core, the system ensures uninterrupted operation even without internet connectivity.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title">Found a problem with this page?</h5>
                <ul class="card-text">
                    <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/point-of-sale-system/index.php" target="_blank">Edit on Github</a></li>
                    <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/point-of-sale-system//index.php?plain=1" target="_blank">Source on Github</a></li>
                    <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
                            content on GitHub</a></li>

                </ul>
            </div>
        </div>
    </main>

    <?php include("./includes/footer.php") ?>

</body>

</html>