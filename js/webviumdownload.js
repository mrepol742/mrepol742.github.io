var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var version = urlParams.get('version');
var url = getUrl(version);

setTimeout(function() {
window.location.href = url;
}, 3000);

document.getElementById("retry-download").href = url

function getUrl(v) {
  if (version == null) {
     return "https://mrepol742-released-stable.netlify.app/Webvium%20v" + latestVersionName + ".apk";
  }
  var versionF = version.replace("v", "").replace(".", "");
  if (versionF > latestVersionCode || versionList[0] > versionF) {
     return "https://mrepol742.github.io/404.html?utm_source=mrepol742.github.io&utm_medium=vnf&utm_campaigns=webvium";
  }
  return "https://mrepol742-released-stable.netlify.app/Webvium%20" + version + ".apk";
}