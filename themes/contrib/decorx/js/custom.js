let slideIndex = 1;
showSlides(slideIndex);

var autoplayInterval = setInterval(function() {

  // Get element by id and click next
  document.getElementById("next").click();
  
 
}, 8000); // Do this every 8 second!

document.querySelector('video').playbackRate = 1.0;

// Stop function added to button
function stopAutoplay() {

// Stop the autoplay
clearInterval(autoplayInterval);

}

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex - 1].style.display = "block";

}

