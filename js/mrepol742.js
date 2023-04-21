if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js').then((reg) => {
    console.log('[ServiceWorker] Registered');
  }).catch((err) => {
    console.error('[ServiceWorker] failed: ', err)
  });
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var pp = getCookie("pp");
try {
var bsAlert = new  bootstrap.Toast(document.getElementById("privacypolicy"));

if (pp == "") {
    bsAlert.show();
document.getElementById("accpt").onclick = function() {
  bsAlert.hide();
  setCookie("pp", "pp", 365);
}
}
} catch (err) {}

try {
var isShow = true;
qwe111.addEventListener("click", function() {
    if (isShow) {
        isShow = false;
        qwe.style.background = 'url("/images/chevron-up.svg")';
    } else {
        isShow = true;
        qwe.style.background = 'url("/images/chevron-down.svg")';
    }
});
} catch (er) {}