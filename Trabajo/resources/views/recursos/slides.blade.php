<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="carousel">
			<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="./images/portada/p3.jpg" style="width:100%">
					<div class="text"></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="./images/portada/p2.jpg" style="width:100%">
					<div class="text"></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="./images/portada/p1.jpg" style="width:100%">
					<div class="text"></div>
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
</div>
<script type="text/javascript" src="/js/script.js"></script>
