// Library personnelle contenant toutes les fonctions optimisés 
// de construction graphique pour ce type d'arbre particulier.

// création Darcosion 2017

function leftCurve(parentx, parenty, espacement, x, y) {
	return "M" + parenty + ", " + x +
	"C" +  (((y + parenty) / 2) + espacement) + ", " + x +
	" " +  (((y + parenty) / 2) + espacement) + ", " + parentx +
	" " + y + ", " + parentx;
}


function rightCurve(parentx, parenty, espacement, x, y) {
	return "M" + (y*1.5) + ", " + x +
	"C" +  ((y / 0.9) - espacement)  + ", " + x +
	" " +  ((y * 1.5) - espacement)  + ", " + parentx +
	" " + parenty + ", " + parentx;
}
