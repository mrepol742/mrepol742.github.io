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
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

let pp = getCookie("pp");
try {
let bsAlert = new  bootstrap.Toast(document.getElementById("privacypolicy"));

if (pp == "") {
    bsAlert.show();
}
} catch (err) {}

document.getElementById("accpt").onclick = function() {
  bsAlert.hide();
  setCookie("pp", "pp", 365);
}

function isSearchPage() {
  if (typeof isSearch === 'undefined') {
    return false;
  }
  return isSearch;
}

let theme = getCookie("pa");
if (theme == "pa" && !isSearchPage()) {
  updateTheme();
  document.getElementById("theme").setAttribute('style', 'fill: white');
}

function changeTheme() {
  let theme = getCookie("pa");
  updateTheme();
  if ((theme == "" || theme == "pb" ) && !isSearchPage()) {
      setCookie("pa", "pa", 365);
      document.getElementById("theme").setAttribute('style', 'fill: white');
  } else {
    setCookie("pa", "pb", 365);
    document.getElementById("theme").setAttribute('style', 'fill: black');
  }
}

let stateCheck = setInterval(() => {
  if (document.readyState === 'complete') {
    window.history.replaceState(null, null, window.location.pathname);
    clearInterval(stateCheck);
  }
}, 100);


var mrepol742 = "                                               \n" +
"                                    \"\"#    mmmmmm    mm   mmmm \n" +
" mmmmm   m mm   mmm   mmmm    mmm     #        #\"   m\"#  \"   \"# \n" +
" # # #   #\"  \" #\"  #  #\" \"#  #\" \"#    #       m\"   #\" #      m\" \n" +
" # # #   #     #\"\"\"\"  #   #  #   #    #      m\"   #mmm#m   m\"   \n" +
" # # #   #     \"#mm\"  ##m#\"  \"#m#\"    \"mm   m\"        #  m#mmmm \n" +
"                      #                                         \n" +
                      "                                          \n" +
"                      ";

console.log(mrepol742, '\nHello World,\n\nCool to see you here!\nWe hope you find what you are looking for.\nFeel free to ask us any questions:\nhttps://facebook.com/melvinjonesrepol\n\nHave a bugless day!\n\n');