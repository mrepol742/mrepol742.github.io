var items = document.querySelectorAll(".size12");
items.forEach((e) => {
    e.innerHTML = updateSizeVPN;
});
var items3 = document.querySelectorAll(".version");
items3.forEach((e3) => {
    e3.innerHTML = latestVersionNameVPN;
});

document.getElementById("upda").innerHTML = updateDateVPN;

function download() {
    window.location.href = downloadUrlPrefixVPN.replace("%WEBVIUM%", latestVersionNameVPN);
}

for (var i = 0; i < versionListVPN.length; i++) {
    var list = document.createElement("li");
    list.classList.add("list-group-item");
    var a = document.createElement("a");
    a.setAttribute("href", downloadUrlPrefixVPN.replace("%WEBVIUM%", versionListVPN[i]));
    a.classList.add("btn");
    a.classList.add("webvI");
    a.setAttribute("target", "_blank");
    a.innerHTML = "- Webvium VPN v" + versionListVPN[i] + " " + sizeListVPN[i] + "KB";
    list.appendChild(a);
    versions.appendChild(list);
}
