var yr = new Date().getFullYear() + 1;
var future = new Date("Jan 1, " + yr + " 00:00:00").getTime();
setInterval(function () {
  var now = new Date().getTime();
  var count = future - now;
  var days = Math.floor(count / (1000 * 60 * 60 * 24));
  var hours = Math.floor((count % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((count % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((count % (1000 * 60)) / 1000);
  document.getElementById("currD").innerHTML = days + "Days " + hours + "Hours";
}, 1000);
