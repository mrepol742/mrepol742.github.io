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
