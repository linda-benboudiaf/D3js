<?php session_start(); ?>
<!DOCTYPE> 
<html> 
<?php include ("header.html") ?>
<body>
</div>
<ul>
    <li > <a href="home.php">  Home</a> </li>
    <li > <a href="about.php">GeneaTree</a> </li>
    <li > <a href="contact.php">Contact</a> </li>
</ul>
<div class="contenue">
	<div id="d3_selectable_force_directed_graph" style="width: 960px; height: 500px; margin: auto; margin-bottom: 12px" align="center">
		<svg width="960" height="500"><g class="g-main"><rect width="960" height="500" style="fill: white;"></rect><g transform="translate(-289.22105789667546,-171.50323915181377) scale(1.6471820345351462)"><g></g><g class="link"></g></g></g></svg>
	</div>
	<link rel="stylesheet" href="css/d3v4-selectable-zoomable-force-directed-graph.css">
	<script src="js/d3.js"></script>
	<script src="js/d3v4-brush-lite.js"></script>
	<script src="js/d3v4-selectable-force-directed-graph.js"></script>

	<script>
	    var svg = d3.select('#d3_selectable_force_directed_graph');
	
	    d3.json('json.php', function(error, graph) {
	        if (!error) {
				console.warn(error);
	            console.log('graph', graph);
	            createV4SelectableForceDirectedGraph(svg, graph);
	        } else {
	            console.error(error);
	        }
	    });
	</script>
</div>
<?php  include ("footer.html")  ?>
</body>
</html>
