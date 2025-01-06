<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Melvin Jones Gallano Repol">
<meta name="hostname" content="mrepol742.github.io">
<meta name="google-site-verification" content="h5iYzE_wKfzBF13wGtJkYOsbKlIBikLLI6SjCtTyJ58" />

<link rel="license" href="https://raw.githubusercontent.com/mrepol742/mrepol742.github.io/master/LICENSE">
<link rel="sitemap" type="application/xml" title="Melvin Jones Gallano Repol » Sitemap" href="https://mrepol742.github.io/sitemap/index.xml">
<link rel="alternate" type="application/rss+xml" title="Melvin Jones Gallano Repol » Feed" href="https://mrepol742.github.io/rss/index.xml">
<link rel="canonical" href="https://mrepol742.github.io">
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Search...">
<link rel="manifest" href="/site.webmanifest">

<?php class meta
{
    function setTitle($title, $description, $url)
    {
        echo "<title>$title</title>";
        echo '<meta name="description" content="' . $description . '">';
        echo '<meta property="og:title" content="' . $title . '">';
        echo '<meta name="twitter:title" content="' . $title . '">';
        echo '<meta property="og:description" content="' . $description . '">';
        echo '<meta name="twitter:description" content="' . $description . '">';
        echo '<meta property="og:url" content="' . $url . '">';
    }

    function setImage($loc, $alt)
    {
        echo '<meta property="og:image:alt" content=' . $alt . '">';
        echo '<meta name="twitter:image:alt" content="' . $alt . '">';
        echo '<meta property="og:image" content="' . $loc . '">';
        echo '<meta name="twitter:image:src" content="' . $loc . '" >';
    }

    function setKeywords($keywords)
    {
        echo '<meta name="keywords" content="' . $keywords . '">';
    }
} ?>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Melvin Jones Gallano Repol - Software Engineer">
<meta name="twitter:site" content="@mrepol742" />
<meta name="twitter:creator" content="@mrepol742" />
<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css"
    integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/solid.min.css"
    integrity="sha512-DzC7h7+bDlpXPDQsX/0fShhf1dLxXlHuhPBkBo/5wJWRoTU6YL7moeiNoej6q3wh5ti78C57Tu1JwTNlcgHSjg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css"
    integrity="sha512-58P9Hy7II0YeXLv+iFiLCv1rtLW47xmiRpC1oFafeKNShp8V5bKV/ciVtYqbk2YfxXQMt58DjNfkXFOn62xE+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" 
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php if (!isset($disableMainCss)) {
    echo '<link rel="stylesheet" href="/assets/css/main.css">';
} ?>

<link rel="shortcut icon" href="/favicon.png">
<link rel="apple-touch-icon" href="/favicon.png">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5077097159223655" crossorigin="anonymous"></script>