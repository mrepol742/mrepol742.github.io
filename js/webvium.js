var items = document.querySelectorAll('.size12');
items.forEach((e) => {
  e.innerHTML = updateSize;
});
var items3 = document.querySelectorAll('.version');
items3.forEach((e3) => {
  e3.innerHTML = latestVersionName;
});

document.getElementById("upda").innerHTML = updateDate;

function download() {
  window.location.href = downloadUrlPrefix.replace("%WEBVIUM%", latestVersionName);
}

for (var i = 0; i < versionList.length; i++) {
  var list = document.createElement('li');
  list.classList.add('list-group-item');
  var a = document.createElement('a');
  a.setAttribute('href', downloadUrlPrefix.replace("%WEBVIUM%", versionList[i]));
  a.setAttribute('target', '_blank');
  a.innerHTML = "Webvium v" + versionList[i] + " (" + sizeList[i] + "KB)";
  list.appendChild(a);
  versions.appendChild(list);
}

try {
  if (latestVersionCode > Webvium.currentVersion()) {
    if ((Webvium.currentVersion() + 1) != latestVersionCode) {
       document.getElementById("download_btn").style.backgroundColor = "#DB4437";
       document.getElementById("download_btn").style.borderColor = "#DB4437";
    }
    document.getElementById("download_btn").innerHTML = "Update Now";
  } 
} catch (en) {
}