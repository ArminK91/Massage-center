
function ime(id){
	nesto = id;
var modal = document.getElementById('myModal');
var img = document.getElementById(nesto);

img.onclick = function(){

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
	}
}

function close(){
	
var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("spanclose")[0];

span.onclick = function() {
    modal.style.display = "none";
	}
}


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
