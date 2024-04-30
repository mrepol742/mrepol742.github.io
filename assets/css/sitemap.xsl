<?xml version="1.0" encoding="UTF-8"?>
	<xsl:stylesheet version="2.0"
		xmlns:html="http://www.w3.org/TR/REC-html40"
		xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"
		xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
		xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
		xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title>XML Sitemap</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<style type="text/css">
			@font-face {
    font-family: 'Maven Pro';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url("/assets/fonts/MavenPro.woff2") format('woff2');
}

@font-face {
    font-family: 'Source Code Pro';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url("/assets/fonts/SourceCodePro-Regular.ttf");
}

h1, h2, h3, h4, h5, h6, th {
    letter-spacing: -1px;
    font-family: 'Source Code Pro', sans-serif;
}

::selection {
    background-color: #4285f4;
    color: #ffffff;
}

::-moz-selection {
    background-color: #4285f4;
    color: #ffffff;
}
* {
    font-family: 'Maven Pro', sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}
				body {
					color: #212121;
				}
			table {
					border: none;
					border-collapse: collapse;
				}
				 
				#sitemap tbody tr:hover td {
					background-color: #ccc;
					transition: all 1s ease;
				}
				#content {
					margin: 0 auto;
					width: 1000px;
				}
				.expl {
					margin: 18px 3px;
					line-height: 1.2em;
				}
				.expl a {
				  	color: #4285f4; 
				}
				a {
					color: #212121;
					text-decoration: none;
					transition: all 1s ease;
				}
				td { 
					padding: 10px;
				}
				th {
					text-align:left;
					padding-right:30px;
				} 
			</style>
		</head>
		<body class="d-flex flex-column min-vh-100">
		<div id="content">
			<h1>XML Sitemap</h1>
			<p class="expl">
				A sitemap is a file that contains a list of all the webpages on a website. It helps search engines like Google to crawl and index the website more efficiently.<br/>
				You can find more information about XML sitemaps on <a href="https://sitemaps.org" target="_blank">sitemaps.org</a>.
			</p>
				<p class="expl">
					This XML Sitemap contains <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> URLs.
				</p>
				<table id="sitemap" cellpadding="4">
					<thead>
					<tr>
						<th title="Last Modification Time" width="25%">Last Mod.</th>
						<th width="5%">Images</th>
						<th width="5%">Videos</th>
						<th width="60%">URL</th>
					</tr>
					</thead>
					<tbody>
					<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
					<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
					<xsl:for-each select="sitemap:urlset/sitemap:url">
						<tr>
							<td>
								<xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)),concat(' ', substring(sitemap:lastmod,20,6)))"/>
							</td>
							<td>
								<xsl:value-of select="count(image:image)"/>
							</td>
							<td>
								<xsl:value-of select="count(video:video)"/>
							</td>
							<td>
								<xsl:variable name="itemURL">
									<xsl:value-of select="sitemap:loc"/>
								</xsl:variable>

								<a href="{$itemURL}">
									<xsl:value-of select="sitemap:loc"/>
								</a>
							</td>
						</tr>
					</xsl:for-each>
					</tbody>
				</table>
		</div>
		</body>
		</html>
	</xsl:template>
	</xsl:stylesheet>
