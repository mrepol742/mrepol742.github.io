document.querySelector('#download_btn').textContent = 'Webvium v1.3 (588.6KB)';
function download() { window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.3.apk" }
let li0 = document.createElement("li")
li0.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.2.apk\">Webvium v1.2 (590.1KB)</a>"
u.appendChild(li0)
let li1 = document.createElement("li")
li1.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.17.apk\">Webvium v21.04.17 (596.0KB)</a>"
u.appendChild(li1)
let li2 = document.createElement("li")
li2.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.20.apk\">Webvium v21.04.20 (584.5KB)</a>"
u.appendChild(li2)
let li3 = document.createElement("li")
li3.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.3.apk\">Webvium v1.3 (588.6KB)</a>"
u.appendChild(li3)

var a = 13;
if (Update.currentVersion() >= a) {
document.getElementById("curr").style.color = "#4285f4";
document.getElementById("curr").innerHTML = "You're currently using the latest version of Webvium.";
} else {
document.getElementById("curr").innerHTML = "You're using a outdated version of Webvium.";
document.getElementById("curr").style.color = "#ea4335";
}