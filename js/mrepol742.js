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

document.addEventListener("DOMContentLoaded", function(){
  el_autohide = document.querySelector('.autohide');
  el_autohide = document.querySelector('.autohide');
  navbar_height = document.querySelector('.navbar').offsetHeight;
  document.body.style.paddingTop = navbar_height + 'px';
  if(el_autohide){
    var last_scroll_top = 0;
    window.addEventListener('scroll', function() {
          let scroll_top = window.scrollY;
         if(scroll_top < last_scroll_top) {
              el_autohide.classList.remove('scrolled-down');
              el_autohide.classList.add('scrolled-up');
          }
          else {
              el_autohide.classList.remove('scrolled-up');
              el_autohide.classList.add('scrolled-down');
          }
          last_scroll_top = scroll_top;
    }); 
  }
}); 