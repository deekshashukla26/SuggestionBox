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
<div class="header">
<table align="center">
	<tr>
		<td>
			<img src="box.png" width="100" height="100"></img>
		</td>
		<td>
			<h3 id="head" style="margin: 0;">SUGGESTION<br>BOX</h3>
		</td>
	</tr>
</table>
</div>
	
<ul class="navbar">
  <li class="navbar"><a href="index.php">Home</a></li>
  <li class="navbar"><a href="mission.php">Our Mission</a></li>
  <li class="navbar"><a href="login.php" >Login</a></li>
  <li class="navbar"><a href="signup.php" >Sign Up</a></li>
</ul>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  
  <div class="mySlides fade">
    <img src="images\changes.jpg" style="width:100%; height:60%">
    <div class="text">Change is the only Constant</div>
  </div>

  <div class="mySlides fade">
    <img src="images\compl.jpg" style="width:100%; height:60%">
    <div class="text">We'll Do Our Best</div>
  </div>

  <div class="mySlides fade">
    <img src="images\sugg.png" style="width:100%; height:60%">
    <div class="text">We'll Do Our Best</div>
  </div>

  <div class="mySlides fade">
    <img src="images\anti.jpg" style="width:100%">
    <div class="text">Say NO to Ragging</div>
  </div>

  <div class="mySlides fade">
    <img src="images\rag.png" style="width:100%">
    <div class="text">Don't be a fool</div>
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
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
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