let webvium = ['Webvium-v21.04.17', 'Webvium-v21.04.20', 'Webvium-v1.2', 'Webvium-v1.3', 'Webvium-v1.4', 'Webvium-v1.5', 'Webvium-v1.6', 'Webvium-v1.7', 'Webvium-v1.8', 'Webvium-v1.8.1']

webvium.forEach(function(item, index, array) {

  let li1 = document.createElement("li")
  li1.innerHTML = '<a href=\"https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/' + item + '\">' + item + '<a/>';
    document.getElementById("u").appendChild(li1)
})


document.querySelector('#download_btn').textContent = 'Webvium v1.8.1 (540.0KB)';
function download() {
    window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v1.8.1"
}

var a = 18;

let items = document.querySelectorAll('.size12')

items.forEach((e) => {
    e.innerHTML = "540.0KB";
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
