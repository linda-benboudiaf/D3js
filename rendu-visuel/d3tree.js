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
    ///////return d.parents; //remplacer parents par children, trouver un moyen de concilier proprement les deux.
    var l = d.parents; // affichage des parents en passant par une variable 
    if (l == undefined){ // teste non Lecture par le navigateur ... 
      l =  [] ;  
    }
    if (d.children == undefined){
      return l; 
    }
    l.push.apply(l,d.children); // en passant pa une variable 
    return l;
  });

  // maps the node data to the tree layout
  nodesc = treemap(nodesc);
  
  //  assigns the data to a hierarchy using parent-child relationships
  nodesp = d3.hierarchy(treeData, function(d) {
    var l = d.parents; // 
    if (l == undefined){
      l = [] ; // laisse vide 
    }
    if (d.children == undefined){ // testes 
      return l; 
    }
    
    l.push.apply(l,d.children);
    return l;



    });

  // maps the node data to the tree layout
  nodesp = treemap(nodesp);

  // adds the links between the nodes
  var link = g.selectAll(".link")
    .data(nodesc.descendants().slice(1))
    .enter().append("path")
    .attr("class", "link")
    .attr("d", function(d) {
       return "M" + d.y + "," + d.x
       + "C" + (d.y + d.parent.y) / 2 + "," + d.x
       + " " + (d.y + d.parent.y) / 2 + "," + d.parent.x
       + " " + d.parent.y + "," + d.parent.x;
       });
 
  // utiliser ancestors pour traiter les nodes précédents le noeud d'origine
  // adds the links betfore the nodes
  var link1 = g.selectAll(".link")
    .data(nodesp.ancestors().slice(1))
    .enter().append("path")
    .attr("class", "link")
    .attr("d", function(d) {
       return "M" + d.y + "," + d.x
       + "C" + (d.y + d.children.y) / 2 + "," + d.x
       + " " + (d.y + d.children.y) / 2 + "," + d.children.x
       + " " + d.children.y + "," + d.children.x;
       });

  // adds each node as a group
  var node = g.selectAll(".node")
    .data(nodesc.descendants())
    .enter().append("g")
    .attr("class", function(d) { 
      return "node node--internal"; })
    .attr("transform", function(d) { 
      return "translate(" + d.y + "," + d.x + ")"; });
      
  var node1 = g.selectAll(".node")
    .data(nodesp.ancestors())
    .enter().append("g")
    .attr("class", function(d) { 
      return "node node--internal"; })
    .attr("transform", function(d) { 
      return "translate(" + d.y + "," + d.x + ")"; });

  // adds the circle to the node
  node.append("circle")
    .attr("r", 10);
    
  node1.append("circle")
    .attr("r", 10);

  // adds the text to the node
  node.append("text")
    .attr("dy", ".35em")
    .attr("x", function(d) { return d.children ? -13 : 13; })
    .style("text-anchor", function(d) { 
		return d.children ? "end" : "start"; })
    .text(function(d) { return d.data.name; });
    
  node1.append("text")
    .attr("dy", ".35em")
    .attr("x", function(d) { return d.parents ? -13 : 13; })
    .style("text-anchor", function(d) { 
		return d.parents ? "end" : "start"; })
    .text(function(d) { return d.data.name; });

});
