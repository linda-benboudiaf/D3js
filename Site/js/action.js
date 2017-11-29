
function zoom(x) {
    x.style.height = "120px";
    x.style.width = "120px";
}

function dezoom(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}

// fonction qui permet de faire un slide dans la page d'acceuil ... 
$(document).ready(function(){
    $("#cadre").click(function(){
        $("#panel").slideToggle("slow");
    });
});



// ajouter une fonction hide jQuery et mettre une petite librairie... 

var x = false;
$(".img").on('click',function(){
  if(x){
	$(".img_affich").hide('slow', 'linear');
    x= false;
   }else{
	$(".img_affich").show('slow', 'linear');
    x= true;
  }
});


var index = 1;
defile(index);

function plusSlides(n) {
  defile(index += n);
}

function slide(n) {
  defile(index = n);
}

function defile(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {index = 1}
  if (n < 1) {index = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[index-1].style.display = "block";
  dots[index-1].className += " active";
} 




