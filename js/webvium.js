let items = document.querySelectorAll('.size12');
items.forEach((e) => {
  e.innerHTML = updateSize;
});
let items3 = document.querySelectorAll('.version');
items3.forEach((e3) => {
  e3.innerHTML = latestVersionName;
});

document.getElementById("upda").innerHTML = updateDate;

function download() {
  window.location.href = downloadUrlPrefix.replace("%WEBVIUM%", latestVersionName);
}

for (var i = 0; i < versionList.length; i++) {
  let list = document.createElement('li');
  list.classList.add('list-group-item');
  let a = document.createElement('a');
  a.setAttribute('href', downloadUrlPrefix.replace("%WEBVIUM%", versionList[i]));
  a.classList.add('btn');
  a.classList.add('webvI');
  a.setAttribute('target', '_blank');
  a.innerHTML = "- Webvium v" + versionList[i] + " " + sizeList[i] + "KB";
  list.appendChild(a);
  versions.appendChild(list);
}

try {
  if (latestVersionCode > Webvium.currentVersion()) {
      document.getElementById("curr").innerHTML = "<b>You are using an outdated version of Webvium.</b>";
  } else {
      document.getElementById("curr").innerHTML = "<b>You are already using the Latest version.</b>";
  }
} catch (en) {
}