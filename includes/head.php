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

<?php
class meta
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
}
?>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Melvin Jones Gallano Repol - Software Engineer">
<meta name="twitter:site" content="@mrepol742" />
<meta name="twitter:creator" content="@mrepol742" />
<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" href="/vendor/components/font-awesome/css/fontawesome.min.css">
<link rel="stylesheet" href="/vendor/components/font-awesome/css/brands.min.css">
<link rel="stylesheet" href="/vendor/components/font-awesome/css/solid.min.css">
<link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<?php
if (!isset($disableMainCss)) {
    echo '<link rel="stylesheet" href="/assets/css/main.css">';
}
?>

<link rel="shortcut icon" href="/favicon.png">
<link rel="apple-touch-icon" href="/favicon.png">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5077097159223655" crossorigin="anonymous"></script>