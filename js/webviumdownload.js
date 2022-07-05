let queryString = window.location.search;
let urlParams = new URLSearchParams(queryString);
let version = urlParams.get('version');
let url = getUrl(version);
window.location.href = url;
document.getElementById("retry-download").href = url

function getUrl(v) {
  if (version == null) {
     return "https://github.com/mrepol742/released/blob/stable/Webvium%20v" + latestVersionName + ".apk?raw=true";
  }
  let versionF = version.replace("v", "").replace(".", "");
  if (versionF > latestVersionCode || versionList[0] > versionF) {
     return "https://mrepol742.github.io/404.html?utm_source=mrepol742.github.io&utm_medium=vnf&utm_campaigns=webvium";
  }
  return "https://github.com/mrepol742/released/blob/stable/Webvium%20" + version + ".apk?raw=true";
}

console.log('\n\nWant to use our API? Learn more in our documentation:\nhttps://mrepol742.github.io/webvium/api/\n\n');