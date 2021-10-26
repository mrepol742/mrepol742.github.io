var a = 22;

let items = document.querySelectorAll('.size12')
items.forEach((e) => {
    e.innerHTML = "478KB";
})

let items0 = document.querySelectorAll('#download_btn')
items0.forEach((e1) => {
    e1.textContent = 'Download Webvium v2.2';
})

function download() {
    window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Released/Webvium%20v2.2.apk";
}

try {

    if (a > Webvium.currentVersion()) {
        document.getElementById("curr").innerHTML = "<b>You are using an outdated version of Webvium.</b>";
    } else {
        document.getElementById("curr").innerHTML = "<b>No need to Download. You are already using the Latest version.</b>";
    }
} catch (en) {
    document.getElementById("curr").innerHTML = "By downloading Webvium, you agree to its <a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/PrivacyPolicy\">Privacy Policy</a>";
}