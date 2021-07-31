
document.querySelector('#download_btn').textContent = 'Webvium v1.7 (589.0KB)';
function download() {
    window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.7"
}

var a = 17;

let items = document.querySelectorAll('.size12')

items.forEach((e) => {
    e.innerHTML = "589.0KB";
})
try {

if (Webvium.currentVersion() >= a) {
document.getElementById("curr").style.color = "#4285f4";
document.getElementById("curr").innerHTML = "You're currently using the latest version of Webvium.";
} else {
document.getElementById("curr").innerHTML = "You're using a outdated version of Webvium.";
document.getElementById("curr").style.color = "#ea4335";
}
} catch (en) {
}
