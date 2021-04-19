 var adfly_id = 25152229;
    var adfly_advert = 'int';
    var frequency_cap = 5;
    var frequency_delay = 5;
    var init_delay = 3;
    var popunder = true;

var webvium_images = document.getElementsByClassName("webvium_shot");
for (let i = 0; i < webvium_images.length; i++) {
	webvium_images[i].addEventListener("click", e => {
		create_img(webvium_images[i].src);
	});
}


function create_img(img_src) {
 var image = document.createElement("img");
 image.src = img_src;

 image.setAttribute("class", "webvium_selected_image");
 var parent = document.createElement("body");
 parent.setAttribute("class", "webvium_shot_holder");


 parent.addEventListener("click", () => {
 	document.body.removeChild(parent)
});

 parent.appendChild(image);
 document.body.appendChild(parent);
}

function openNav1() {
  document.getElementById("mrepol742_sidebar0").style.width = "250px";
  document.getElementById("main0").style.marginLeft = "250px";
}

function closeNav1() {
  document.getElementById("mrepol742_sidebar0").style.width = "0";
  document.getElementById("main0").style.marginLeft= "0";
}

function webvium_download_url() {
    window.location.href = "http://rainonit.com/3Wsi";
}
