var a = 182;

let items = document.querySelectorAll('.size12')

items.forEach((e) => {
    e.innerHTML = "538KB";
})
document.querySelector('#download_btn').textContent = 'Webvium v1.8.1 (538KB)';
function download() {
	window.location.href = "https://github.com/webvium/webvium.github.io/blob/main/Webvium%20v1.8.1-stable.apk?raw=true";
}
try {

if (a > Webvium.currentVersion()) {
document.getElementById("curr").innerHTML = "You're using an outdated version of Webvium.";
document.getElementById("curr").style.color = "#ea4335";
} else {
document.getElementById("curr").innerHTML = "You're updated";
document.getElementById("curr").style.color = "#ea4335";
}
} catch (en) {

}
