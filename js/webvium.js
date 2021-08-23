var a = 18;

let items = document.querySelectorAll('.size12')

items.forEach((e) => {
    e.innerHTML = "538KB";
})
document.querySelector('#download_btn').textContent = 'Webvium v1.8.1 --538KB--';
function download() {
	window.location.href = "https://github.com/webvium/webvium.github.io/blob/main/Webvium%20v1.8.1-stable.apk?raw=true";
}
try {

if (a > Webvium.currentVersion()) {
document.getElementById("curr").innerHTML = "<div class=\"alert alert-danger\" role=\"alert\">You are using an outdated version of Webvium.</div>";
} else {
document.getElementById("curr").innerHTML = "<div class=\"alert alert-success\" role=\"alert\">No need to Download. You are already using the Latest version.</div>";
}
} catch (en) {
    document.getElementById("curr").innerHTML = "<div class=\"alert alert-info\" role=\"alert\">By downloading Webvium, you agree to its <a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/PrivacyPolicy\">Privacy Policy</a></div>";
}
