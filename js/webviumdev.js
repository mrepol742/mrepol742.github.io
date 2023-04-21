async function doJob() {
const response = await fetch("https://raw.githubusercontent.com/mrepol742/released/dev/info.json");
const jsonData = await response.json();

var items = document.querySelectorAll('.size12');
items.forEach((e) => {
  e.innerHTML = "700KB";
});
var items3 = document.querySelectorAll('.version');
items3.forEach((e3) => {
  e3.innerHTML = jsonData.versionFullName;
});
document.getElementById("upda").innerHTML = jsonData.latestRelease;
}
doJob();

function download() {
  window.location.href = "https://mrepol742.github.io/webviumdev/download/";
}