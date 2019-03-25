<!DOCTYPE html>
<html>
<head>
  <title>Suggestion Box</title>
  <link rel="icon" href="box.png" type="image/png" sizes="18x18">
  <link rel="stylesheet" href="sugbox.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</head>
<body>
<table align="center">
  <tr>
    <td>
      <img src="box.png" width="100" height="100"></img>
    </td>
    <td>
      <h2 id="head" style="margin-top: 0;">SUGGESTION<br>BOX</h2>
    </td>
  </tr>
</table>

  
  

<ul class="navbar">
  <li class="navbar"><a href="home.php">Home</a></li>
  <li class="navbar"><a href="mission.php">Our Mission</a></li>
  <li class="navbar"><a href="login.php" >Login</a></li>
  <li class="navbar"><a href="signup.php" >Sign Up</a></li>
</ul>
<h2 id ="head">We are here to help...</h2>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="seminar.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="mphall.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="ymunagate.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<script>
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
</script>



</body>
</html>