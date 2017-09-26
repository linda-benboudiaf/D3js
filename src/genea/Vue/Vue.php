<?php
namespace genea\Vue;

session_start();

class Vue{
	function render($app, $content, $selection=NULL, $id=NULL) {
		#supprime dans l'uri de base index.php et le "/" de fin
		$urlcss = preg_replace("~\/$~", '', preg_replace("~(\/)?index\.php(\/)?~", '', $app->urlFor('racine')));
		
		
		if(isset($selection)) {
			switch($selection) {
			case("index"):
				$content = "<br />\n<div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>".$content."</div>";
			break;
			default:
			break;
			}
		
		
		$htmldebut = <<<END
		<!DOCTYPE html>
		<html>
		<head>
			<title>$selection</title>
			<link href="$urlcss/css/bootstrap.min.css" rel="stylesheet">
		</head>
		<body>\n
END;

		$htmlfin = <<<END
		</body>
		</html>
END;
		
		#concaténation de l'ensemble de l'html
		$content = $htmldebut.$this->headerRender()."<div class=\"container-fluid\">\n".$this->navRender().$content."</div>".$this->footerRender().$htmlfin;
		
		#retour à l'utilisateur
		return $content;
	
		}
	}
	
	#fonction de block de navigation
	private function headerRender() {
		global $app;
		
		$content = "<header class=\"navbar navbar-inverse\" >
			<div class=\"container\">
				<div class=\"navbar-header\">
					<a class=\"navbar-brand\" href=\"".$app->urlFor('racine')."\">Genea Tree</a>
				</div>
			</div>
		</header>";
		
		
		return $content;
	}
	
	private function footerRender() {
		$content = "
		<br />
		<br />
		<br />
		<footer class=\"navbar navbar-inverse navbar-fixed-bottom\">
		<div class=\"container\">
		<div class=\"navbar-collapse collapse\">
				<ul class=\"nav navbar-nav\">
					<li><p>Linda Benboudiaf & Création Pacôme Tisserand 2017.</p></li>
				</ul>
		</div>
		</div>
		</footer>\n";
		
		return $content;
	}
	
	private function navRender() {
		global $app;
		$content = "<nav class=\"col-sm-3 col-md-2 sidebar\">
			<ul class=\"nav nav-sidebar\">
			</ul>
		</nav>\n";
		
		return $content;
	}
}
	
