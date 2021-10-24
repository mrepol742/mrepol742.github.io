var a = 21;

let items = document.querySelectorAll('.size12')
items.forEach((e) => {
    e.innerHTML = "488KB";
})

let items0 = document.querySelectorAll('#download_btn')
items0.forEach((e1) => {
    e1.textContent = 'Download Webvium v2.1';
})

function download() {
    window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Released/Webvium%20v2.1.apk";
}

function issue() {
    window.location.href = "https://github.com/mrepol742/PROJECT-WEBVIUM/issues/new?assignees=&labels=&template=bug_report.md&title=";
}

function request() {
    window.location.href = "https://github.com/mrepol742/PROJECT-WEBVIUM/issues/new?assignees=&labels=&template=feature_request.md&title=";
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