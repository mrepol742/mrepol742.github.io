let webvium = ['Webvium-v21.04.17', 'Webvium-v21.04.20', 'Webvium-v1.2', 'Webvium-v1.3', 'Webvium-v1.4', 'Webvium-v1.5', 'Webvium-v1.6', 'Webvium-v1.7', 'Webvium-v1.8', 'Webvium-v1.8.1']

webvium.forEach(function(item, index, array) {
  let li0 = document.createElement("a")
  li0.href = 'https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/' + item;
  li0.innerHTML = item;
  document.getElementById("mrepol742_sidebar").appendChild(li0)
})
