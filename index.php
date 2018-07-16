<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    h2{
        color: yellow;
    }
    </style>
    </head>
<body>
    
  <div class="ac">
      <div class="ab">
         <?php if(isset($_SESSION['username'])): ?>
  <a class="abc" href="logout.php" style="text-decoration:none">logout</a>
<?php else: ?>
  <a class="abc " href="login.php" style="text-decoration:none">login</a>
<?php endif; ?>
    <a class="abc" href="link.html">Links</a>
<a class="abc" href="r2.html">Services</a>         
          <a class="abc" href="About.html">About</a>      
        <a class="abc" href="index.php">Home</a>
<br>  </div> 
          <br><br>
          <marquee><a href="https://economictimes.indiatimes.com/news/politics-and-nation/maharashtra-government-plans-shacks-like-goas-on-720km-coast/articleshow/61180397.cms"><h2><img src="https://thebingo-w3doctor.netdna-ssl.com/wp-content/uploads/2015/11/new-bingo-sites.png" height="42" width="42">
Maharashtra government plans shacks like Goa's on 720km coast</h2></a></marquee>


</div>
<div class="aa">
    <div class="ad"><span id="span1">ALL</span> INDIA<span id="span2"> RADIO</span><br><span id="span3">Maharastra</span>
</div></span>
<br><br><br><br><br>
<div class="ae">
<div class="left">
<center><h2 class="ag">OTHERS</h2></center>
<br><img class="af" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/51/Logo_of_AIR.svg/1024px-Logo_of_AIR.svg.png"><center>
<a class="ai" href="http://allindiaradio.gov.in/Marketing/Offices/Pages/Default.aspx">Marketing</a>
<br>
<a class="ai" href="http://allindiaradio.gov.in/Oppurtunities/Music/Pages/Music.aspx">Opputunities</a>
<br>
<a class="ai" href="r2.html">Artists</a>
<br>
<a class="ai" href="audio.html">Listener's Corner</a>
<br>
<a class="ai" href="http://allindiaradio.gov.in/Information/Tenders/Pages/default.aspx">Tenders</a>
<br>

</div>
<div class="right">
    <a href="audio.html">
        <img src="https://www.tokbox.com/blog/wp-content/uploads/2016/06/foto-on-air-665x400.jpg"></img></a>
<div class="middle">
 </div>
</div>
</div>
<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
        <a href="http://allindiaradio.gov.in/Default.aspx">	<img src="https://www.thebetterindia.com/wp-content/uploads/2016/06/Untitled-design-66.jpg" alt="First" class="slide" /></a><!-- slides -->
        <a href="https://www.narendramodi.in/mann-ki-baat">	<img src="http://www.spmrf.org/wp-content/uploads/2017/02/Mann-Ki-Baat-1.jpg" alt="Second" class="slide" /></a>
        <a href="https://www.narendramodi.in/mann-ki-baat"><img src="http://www.mobiloitte.com/wp-content/uploads/all-india-radio-casestudies.png" alt="Third" class="slide" /></a>
	</div>
</div>	
<script>
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();
</script>

<footer><center>
 
 <br>
 <br><a href="https://www.facebook.com/airnewsalerts/" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
 <a href="https://twitter.com/airnewsalerts?lang=en" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
    </a>
	<p><h2 style="color:white; font-family:fantasy;">MUMBAI HEADQUARTERS</h2>
	<h4 style="color:white; font-family:fantasy;">3rd Floor, Old Cgo Building, Chief Engineering West, 101, M K Road, Mumbai, Maharashtra 400020</h4></p>
	</center>
</footer></div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("dropbtn").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var dropbtn = document.getElementById("dropbtn");
      if (dropbtn.classList.contains('show')) {
        dropbtn.classList.remove('show');
      }
  }
}
</script>
</body></html>