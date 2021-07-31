let webvium = ['Webvium-v21.04.17', 'Webvium-v21.4.20', 'Webvium-v1.2', 'Webvium-v1.3', 'Webvium-v1.4', 'Webvium-v1.5', 'Webvium-v1.6', 'Webvium-v1.7']

webvium.forEach(function(item, index, array) {
  let li0 = document.createElement("a")
  li0.href = 'https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/' + item;
  li0.innerHTML = item;
  document.getElementById("mrepol742_sidebar").appendChild(li0)
  u.appendChild(li0)
})

document.querySelector('#download_btn').textContent = 'Webvium v1.7 (589.0KB)';
function download() {
    window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.7" 
}

var a = 17;

let items = document.querySelectorAll('.size12')

items.forEach((e) => {
    e.innerHTML = "589.0KB";
})
try {

if (Webvium.currentVersion() >= a) {
document.getElementById("curr").style.color = "#4285f4";
document.getElementById("curr").innerHTML = "You're currently using the latest version of Webvium.";
} else {
document.getElementById("curr").innerHTML = "You're using a outdated version of Webvium.";
document.getElementById("curr").style.color = "#ea4335";
}
} catch (en) {
}
