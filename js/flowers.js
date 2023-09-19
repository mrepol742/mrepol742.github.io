N = 15;
w3 = "http://www.w3.org/";
svgNS = w3 + "2000/svg";
xlinkNS = w3 + "1999/xlink";
with (Math) (R = random), (S = sin), (C = cos);

w = svg.width = innerWidth;
h = svg.height = innerHeight;
this.onresize = function () {
    if (w == innerWidth) return;
    w = svg.width = innerWidth;
    h = svg.height = innerHeight;
    svg.setAttribute("viewBox", [0, 0, w, h]);
};

Flower = function (x, y, r, dx, dy) {
    this.x = x;
    this.y = y;
    this.r = 0;
    this.dx = dx;
    this.dy = dy;
    var el = (this.element = document.createElementNS(svgNS, "use"));
    this.setTransforms();
    el.setAttributeNS(xlinkNS, "href", "#flower");
    svg.appendChild(el);
};

Flower.prototype.setTransforms = function () {
    with (this) element.setAttribute("transform", "translate(" + x + "," + y + ") rotate(" + r + ")");
};

flowers = [];
for (i = N; i--; ) flowers.push(new Flower((w * R()) | 0, (h * R()) | 0, 360 * R(), ((R() * 5) | 0) - 2, 1));

~(function L(t) {
    t /= 1e3;
    for (i = N; i--; ) {
        f = flowers[i];
        f.r += 1;
        f.x += f.dx;
        f.y += f.dy;
        if (f.x > w + 200) f.x -= w + 400;
        if (f.x < -200) f.x += w + 400;
        if (f.y > h + 200) f.y -= h + 400;
        if (f.y < -200) f.y += h + 400;
        f.setTransforms();
    }

    requestAnimationFrame(L);
})(0);
