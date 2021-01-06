
@include('home.free_header');

	<h1 align="center">Welcome Home - {{$username}}</h1>
	<br>

<div align="center">
	<table>
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total jobs applied <br>
					{{$countjob}}
					
				</span>
				</div>
			</td>
		</tr>
	</table>
<br>
<br>

		 <div class="search-container">
			    <input type="text" placeholder="Job Search.." name="search" size="100" style="font-size:30px">
  			    <button type="submit"><i class="fa fa-search"></i></button></div>
		
</div>
<h2 style="text-align:center">Popular Jobs</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="https://visme.co/blog/wp-content/uploads/2017/08/40-Creative-Logo-Designs-to-Inspire-You.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2019/07/20111622/data-entry-1024x512.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="https://blog.stepes.com/wp-content/uploads/2017/12/stepes-translator-interview.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="https://hot-themes.com/wp-content/uploads/2020/07/install_wordpress_centos7.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxeyjE4bSf5sZ4fcfKZTykqVvkfcjwH6D2rw&usqp=CAU" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="https://brandier.co/wp-content/uploads/2020/02/Dizajn-web-stranice-min.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://visme.co/blog/wp-content/uploads/2017/08/40-Creative-Logo-Designs-to-Inspire-You.jpg" style="width:100%" onclick="currentSlide(1)" alt="Logo Design">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2019/07/20111622/data-entry-1024x512.png" style="width:100%" onclick="currentSlide(2)" alt="Data Entry">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://blog.stepes.com/wp-content/uploads/2017/12/stepes-translator-interview.jpg" style="width:100%" onclick="currentSlide(3)" alt="Translator">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://hot-themes.com/wp-content/uploads/2020/07/install_wordpress_centos7.jpg" style="width:100%" onclick="currentSlide(4)" alt="WordPress">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxeyjE4bSf5sZ4fcfKZTykqVvkfcjwH6D2rw&usqp=CAU" style="width:100%" onclick="currentSlide(5)" alt="SEO">
    </div>    
    <div class="column">
      <img class="demo cursor" src="https://brandier.co/wp-content/uploads/2020/02/Dizajn-web-stranice-min.jpg" style="width:100%" onclick="currentSlide(6)" alt="Web Design">
    </div>
  </div>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

</body>
</html>