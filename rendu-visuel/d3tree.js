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

  //  assigns the data to a hierarchy using parent-child relationships
  nodesc = d3.hierarchy(treeData, function(d) {
    return d.children; //remplacer parents par children, trouver un moyen de concilier proprement les deux.
  });
  
  nodesp = d3.hierarchy(treeData, function(d) {
    return d.parents;
  });
  
  d = d3.hierarchy(treeData);

  // maps the node data to the tree layout
  nodesc = treemap(nodesc);
  
  nodesp = treemap(nodesp);

  // adds the links between the nodes
  link = g.selectAll(".link")
    .data(nodesc.descendants().slice(1))
    .enter().append("path")
    .attr("class", "link")
    .attr("d", function(d) {
       return leftCurve(d.parent.x, d.parent.y, 0, d.x, d.y);
       });
       
  link1 = g.selectAll(".link1")
    .data(nodesp.descendants()[0].children)
    .enter().append("path")
    .attr("class", "link")
    .attr("d", function(d) {
       return rightCurve(d.parent.x, d.parent.y, 0, d.x, d.y);
       });

  // adds each node as a group
  node = g.selectAll(".node")
    .data(nodesc.descendants()[0].children)
    .enter().append("g")
    .attr("class", function(d) { 
      return "node node--internal"; })
    .attr("transform", function(d) { 
      return "translate(" + 0 + "," + d.x + ")"; });
      
  node1 = g.selectAll(".node1")
    .data(nodesp.descendants()[0].children)
    .enter().append("g")
    .attr("class", function(d) { 
      return "node node--internal"; })
    .attr("transform", function(d) { 
      return "translate(" + d.y*1.5 + "," + d.x + ")"; });
  
  nodeprimaire = g.selectAll(".nodeprimary")
				.data([d.data])
				.enter().append("g")
				.attr("class", function(d) {
					return "node node--internal";})
				.attr("transform", function(d) {
					return "translate(" + width + ", " + height/2 + ")"; });
      

  // adds the circle to the node
  nodeprimaire.append("circle")
	.attr("r", 10);
  
  node.append("circle")
    .attr("r", 10);
    
  node1.append("circle")
    .attr("r", 10);
    

  // adds the text to the node
  nodeprimaire.append("text")
    .attr("dy", ".35em")
    .attr("x", function(d) { return d.children ? -13 : 13; })
    .style("text-anchor", function(d) { 
		return d.children ? "end" : "start"; })
    .text(function(d) { return d.name; });
  
  node.append("text")
    .attr("dy", ".35em")
    .attr("x", function(d) { return d.children ? -13 : 13; })
    .style("text-anchor", function(d) { 
		return d.children ? "end" : "start"; })
    .text(function(d) { return d.data.name; });
   
  node1.append("text")
    .attr("dy", ".35em")
    .attr("x", function(d) { return d.parent ? -13 : 13; })
    .style("text-anchor", function(d) { 
		return d.parent ? "end" : "start"; })
    .text(function(d) { return d.data.name; });
    
});
