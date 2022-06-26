let queryString = window.location.search;
let urlParams = new URLSearchParams(queryString);
let version = urlParams.get('version');
let url = getUrl(version);
window.location.href = url;
document.getElementById("retry-download").href = url

function getUrl(v) {
  if (version == null) {
     return "https://github.com/mrepol742/released/blob/stable/Webvium%20VPN%20v" + latestVersionNameVPN + ".apk?raw=true";
  }
  let versionF = version.replace("v", "").replace(".", "");
  if (versionF > latestVersionCodeVPN || versionListVPN[0] > versionF) {
     return "https://mrepol742.github.io/404.html?utm_source=mrepol742.github.io&utm_medium=vnf&utm_campaigns=webviumvpn";
  }
  return "https://github.com/mrepol742/released/blob/stable/Webvium%20VPN%20" + version + ".apk?raw=true";
}