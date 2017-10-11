var w = 500;
var h = 200;
var svg = d3.select("section").append("svg").attr("width", w).attr("height", h); // définition du svg

var tree = d3.layout.tree()
