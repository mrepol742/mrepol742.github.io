document.querySelector('#download_btn').textContent = 'Webvium v1.7 (589.0KB)';
function download() { window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.7.apk" }
let li0 = document.createElement("li")
li0.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.17.apk\">Webvium v21.04.17 (596.0KB)</a>"
u.appendChild(li0)
let li1 = document.createElement("li")
li1.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.20.apk\">Webvium v21.04.20 (584.5KB)</a>"
u.appendChild(li1)
let li2 = document.createElement("li")
li2.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.2.apk\">Webvium v1.2 (590.1KB)</a>"
u.appendChild(li2)
let li3 = document.createElement("li")
li3.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.3.apk\">Webvium v1.3 (588.6KB)</a>"
u.appendChild(li3)
let li4 = document.createElement("li")
li4.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.4.apk\">Webvium v1.4 (576.2KB)</a>"
u.appendChild(li4)
let li5 = document.createElement("li")
li5.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.5.apk\">Webvium v1.5 (584.7KB)</a>"
u.appendChild(li5)
let li6 = document.createElement("li")
li6.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.6.apk\">Webvium v1.6 (584.7KB)</a>"
u.appendChild(li6)
let li7 = document.createElement("li")
li7.innerHTML = "<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.7.apk\">Webvium v1.7 (589.0KB)</a>"
u.appendChild(li7)

var a = 17;
document.getElementById("size12").innerHTML = "589.0KB";
if (Webvium.currentVersion() >= a) {
document.getElementById("curr").style.color = "#4285f4";
document.getElementById("curr").innerHTML = "You're currently using the latest version of Webvium.";
} else {
document.getElementById("curr").innerHTML = "You're using a outdated version of Webvium.";
document.getElementById("curr").style.color = "#ea4335";
}