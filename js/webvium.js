var a = 20;

let items = document.querySelectorAll('.size12')
items.forEach((e) => {
    e.innerHTML = "474KB";
})

let items0 = document.querySelectorAll('#download_btn')
items0.forEach((e1) => {
    e1.textContent = 'Download Webvium v2.0(474KB)';
})

function download() {
    window.location.href = "https://github.com/webvium/webvium.github.io/blob/main/Webvium%20v2.0-stable.apk?raw=true";
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

function getOS() {
    var userAgent = window.navigator.userAgent,
    platform = window.navigator.platform,
    macosPlatforms = ['Macintosh',
        'MacIntel',
        'MacPPC',
        'Mac68K'],
    windowsPlatforms = ['Win32',
        'Win64',
        'Windows',
        'WinCE'],
    iosPlatforms = ['iPhone',
        'iPad',
        'iPod'],
    os = null;

    if (macosPlatforms.indexOf(platform) !== -1) {
        os = 'Mac OS';
    } else if (iosPlatforms.indexOf(platform) !== -1) {
        os = 'iOS';
    } else if (windowsPlatforms.indexOf(platform) !== -1) {
        os = 'Windows';
    } else if (/Android/.test(userAgent)) {
        os = 'Android';
    } else if (!os && /Linux/.test(platform)) {
        os = 'Linux';
    }

    return os;
}

if (getOS() != 'Android') {
    document.getElementById("nots").innerHTML = "<div class=\"alert alert-danger\" role=\"alert\">We detected that you are using <b>"  + getOS() + " OS</b> in which Webvium are not compatible. Webvium only supports Android OS version 5 or higher</div>";
}