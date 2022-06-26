function getDate(a) {
    var date1 = new Date(a);
    var date = new Date();
    var m = date.getMonth() + 1;
    var d = date.getDate();
    var y = date.getFullYear();
    var date2 = new Date(m + "/" + d + "/" + y);
    var time = date2.getTime() - date1.getTime();
    return time / (1000 * 3600 * 24);
}
  document.getElementById("since").innerHTML = ". It's been " + getDate("03/18/2020") + " days since.";
  document.getElementById("year").innerText = (new Date().getFullYear() - 2002) + " Years old.";