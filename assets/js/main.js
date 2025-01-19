let cacheName = 'mrepol742v6.6';

var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#39;",
    "/": "&#x2F;",
    "`": "&#x60;",
    "=": "&#x3D;",
};

function escapeHtml(string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
        return entityMap[s];
    });
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

let pp = getCookie("pp1");
try {
    var bsAlert = new bootstrap.Toast(document.getElementById("privacypolicy"));

    if (pp == "") {
        bsAlert.show();
        document.getElementById("accpt").onclick = function () {
            bsAlert.hide();
            setCookie("pp1", "pp1", 7);
        };
    }
} catch (err) {}

window.addEventListener("DOMContentLoaded", () => {
    if (window.matchMedia("(display-mode: standalone)").matches) {
        document.body.style.setProperty("user-select", "none");
        document.body.style.setProperty("-webkit-user-select", "none");
        document.body.style.setProperty("-ms-user-select", "none");
        document.onkeydown = (e) => {
            if (e.key == 123 || (e.ctrlKey && e.shiftKey && e.key == "I") || (e.ctrlKey && e.shiftKey && e.key == "C") || (e.ctrlKey && e.shiftKey && e.key == "J") || (e.ctrlKey && e.key == "U")) {
                e.preventDefault();
            }
        };
        document.addEventListener("contextmenu", (e) => e.preventDefault());
        let footer = document.getElementsByTagName("footer")[0];
        footer.style.setProperty("display", "none");
    }
    el_autohide = document.querySelector(".autohide");
    if (el_autohide != null) {
        navbar_height = document.querySelector(".navbar").offsetHeight;
        document.body.style.paddingTop = navbar_height + "px";
        if (el_autohide) {
            var last_scroll_top = 0;
            window.addEventListener("scroll", function () {
                let scroll_top = window.scrollY;
                if (scroll_top == 0) {
                    el_autohide.classList.add("scrolled-up-tr");
                } else {
                    el_autohide.classList.remove("scrolled-up-tr");
                }
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove("scrolled-down");
                    el_autohide.classList.add("scrolled-up");
                } else {
                    el_autohide.classList.remove("scrolled-up");
                    el_autohide.classList.add("scrolled-down");
                }
                last_scroll_top = scroll_top;
            });
        }
    }
});

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const rdr = urlParams.get("rdr");

if (typeof qwermn !== "undefined") {
    if (!queryString.includes("utm_source")) {
        window.location.href = "/";
    }
}

if (typeof sendmail !== "undefined") {
    sendmail.onclick = function () {
        var subject = document.getElementById("subject").value;
        if (subject == "") {
            document.querySelector(".status").innerHTML = "Subject cannot be empty";
            return false;
        }
        var message = document.getElementById("message").value;
        if (message == "") {
            document.querySelector(".status").innerHTML = "Message cannot be empty";
            return false;
        }
        window.location.href = escapeHtml("mailto:mrepol742@gmail.com?subject=" + subject + "&body=" + message);
    };
}

if (rdr != null) {
    window.location.href = escapeHtml(rdr + "?utm_source=" + window.location);
}

function readMore(a) {
    var dots = document.getElementById("dots" + a);
    var moreText = document.getElementById("more" + a);
    var btnText = document.getElementById("readMore" + a);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "&nbsp;See More";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "";
        moreText.style.display = "inline";
    }
}

const videos = document.querySelectorAll('video');

videos.forEach(video => {
  video.addEventListener('mouseenter', () => {
    video.play();
  });
  
  video.addEventListener('mouseleave', () => {
    video.pause();
  });
});

const originalTitle = document.title;

window.addEventListener('blur', () => {
    document.title = 'Come back please :( - ' + originalTitle;
});

window.addEventListener('focus', () => {
    document.title = originalTitle;
});