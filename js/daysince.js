var date1 = new Date("03/18/2020");

var date = new Date();
var m = date.getMonth()+1;
var d = date.getDate();
var y = date.getFullYear();

var date2 = new Date(m + "/" + d + "/" + y);
  
var time = date2.getTime() - date1.getTime();
var days = time / (1000 * 3600 * 24);
  
document.getElementById("since").innerHTML = ". It's been " + days + " days since.";