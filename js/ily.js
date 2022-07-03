if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js').then((reg) => {
    console.log('[ServiceWorker] Registered');
  }).catch((err) => {
    console.error('[ServiceWorker] failed: ', err)
  });
}

var typed = new Typed('#txt', {
    strings: [
        "I love you",
        "Mahal kita",
        "Wǒ ài nǐ",
        "te amo, te quiero",
        "ahabak",
        "eu te amo",
        "Ami tomake bhalobashi",
        "mujhe tumse pyaar hai",
        "ya lyublyu tebya",
        "watashi wa, anata o aishiteimasu",
        "maiṁ tuhānū pi’āra karadā hāṁ",
        "ich liebe dich",
        "Aku tresna sampeyan",
        "saya sayang awak",
        "salanghae",
        "anh yêu em",
        "je t’aime",
        "mī tujhyāvara prēma karatō",
        "nāṉ uṉṉai kātalikkiṟēṉ",
        "seni seviyorum",
        "ngóh oi néih",
        "ti amo",
        "P̄hm rạk khuṇ",
        "Huṁ tanē prēma karuṁ chu",
        "maite zaitut",
        "wǒ ài rǔ",
        "kocham Cię",
        "Nānu ninnannu prītisuttēne",
        "ñān ninne snēhikkunnu",
        "abdi bogoh ka anjeun",
        "Hu guiaya hao",
        "Ina son ka",
        "mainnkohkyittaal",
        "mu tumoku bhala paye",
        "Yes sirum yem k’yez",
        "ya tebe lyublyu",
        "hum tohse pyaar kareni",
        "Iniibig kita",
        "mo nifẹ rẹ",
        "hawm ahāṃ se prem karechi",
        "Man tokhe prem karyan ti or Man tokhe prem karyan to",
        "nakupenda",
        "Men seni Sevaman",
        "ewedihalehu",
        "mi yidi ma",
        "a hụrụ m gị n’anya",
        "Sin jaalladha’",
        "te iubesc",
        "Mən səni sevirəm",
        "əi-nə nəng-bu nung-shi",
        "Ndimakukonda Ndimakukondani",
        "gihigugma TIKA",
        "ik hou van je",
        "Ez hej te dikim",
        "Volim te",
        "tiako ianao",
        "Ma timīlā’ī māyā garchu",
        "mẽ tenū̃ piār kardā hā̃",
        "ing aming sibilama",
        "khnhom​ sralanh​ anak",
        "mama oyāṭa ādareyi",
        "M’bi fe",
        "môi apunak bhal paû",
        "Waan ku jeclahay",
        "Minjo tere naal pyar hega",
        "main tanne pyaar karoon",
        "Szeretlek",
        "ndimakukondani",
        "Ndagukunda",
        "Se agapó",
        "Me dor wo",
        "Nga ieid ia phi",
        "men seni jaqsı köremin",
        "Ke a go rata",
        "Ngiyakuthanda",
        "Miluji tě",
        "ndagukunda",
        "hav tujo mog korta",
        "Mwen renmen ou",
        "Ek het jou lief",
        "Ayayatenka",
        "Kuyayki",
        "Ndagukunda",
        "jag älskar dig",
        "Kuv hlub koj",
        "Palangga ko ikaw Guina higugma ko ikaw",
        "Tu mana doost biyeh",
        "ja ciabie kachaju",
        "Kei te aroha au ki a koe",
        "ndiyakuthanda",
        "Hav tukka Mog Karta"

    ],
    typeSpeed: 100
});


document.body.style.background = "url('https://source.unsplash.com/640x480?day') no-repeat fixed center";
document.body.style.backgroundSize = "cover";


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
    if (pp == "") {
      var x = document.querySelectorAll("#tst");
      x[0].style.setProperty("display", "block", "important");
    }
  
  document.getElementById("accpt").onclick = function() {
    setCookie("pp", "pp", 365);
    var x = document.querySelectorAll("#tst");
    x[0].style.setProperty("display", "none", "important");
  }
  
  window.history.replaceState(null, null, window.location.pathname);