// set the dimensions and margins of the diagram
var margin = {top: 20, right: 180, bottom: 30, left: 180},
  width = 660 - margin.left - margin.right,
  height = 700 - margin.top - margin.bottom;

var svg = d3.select("section").append("svg")
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom),
    g = svg.append("g")
      .attr("transform",
        "translate(" + margin.left + "," + margin.top + ")");


// declares a tree layout and assigns the size
var treemap = d3.tree()
  .size([height, width]);

// load the external data
d3.json("d3-data.json", function(error, treeData) {
  if (error) throw error;
  
  node = d3.hierarchy(treeData, function(d) {
    return d; 
    });
    
    node = treemap(node);
});
