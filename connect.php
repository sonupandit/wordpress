<?php include "header-kb.php" ?>

<div class="outerWrap innerbanner-contact">
    <h1 class="innerHead">Get in Touch </h1>
    <div class="bedcrum">
		<div class="container text-right">
			<a href="index.php">home</a>    Connect
		</div>
	</div>
</div>

<div class="outerWrap innerBody greybg">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="font-weight: 300;">
				<h2 class="ytxt" style="text-transform: none; font-size: 38px; font-weight: 300;">We'd Love to Hear From You</h2>
				<p class="font16">Need an expert opinion or an insight into our services, or about how we can add value to your enterprise? We're all ears.</p>
				<p class="font16">We value the opportunity to interact with you - please feel free to get in touch with us.</p>
			</div>

			<div class="col-md-6" id="connect">
				<form action="#" id="frmCONTACT" name="frmCONTACT">
                <input type="hidden" name="page_name" value="CONNECT" >
			  		<div class="row">
			  			<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="name" name="name" placeholder="Name"></div></div>
			  			<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="email" name="email" placeholder="Email"></div></div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" onkeyup="checkNum(this);" autocomplete="off"></div></div>
			  			<div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"></div></div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12"><div class="form-group"><textarea class="form-control" rows="3" name="comments" id="comments" placeholder="Comments"></textarea></div></div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-6"><div class="form-group"><button type="submit" class="btn btn-danger btn-block" id="INPROCESS">Submit</button></div></div>
			  		</div>



				</form>

			</div>
            <div id="ERROR"></div>
		</div>


    </div>
</div>

<div id="dubai" class="outerWrap innerBody addressWrap" style="background: #333; padding: 0;">
	<div class="clearfix">
		<div class="col2 fright relpos">&nbsp;
			<div class="abspos wtxt text-left" style="left:60px; top: 120px; font-weight: 300;">
			<h2 class="ytxt">Kaden Boriss</h2>
			Level 1, Building No 6, Bay Square,<br>
			Business Bay,<br>
			Dubai<br>
			Tel:  <a href="tel:+971 45548499 ">+971 4 554 8499 </a><br>
			Email: <a href="mailto:uae@kadenboriss.ae">uae@kadenboriss.ae</a>

			</div>
		</div>
		<div class="col2 fleft">
				<div class="mapWrap">
					<div id="Dubai" style="height: 400px;" class="nectar-google-map" data-dark-color-scheme="" data-ultra-flat="" data-greyscale="1" data-extra-color="#7b2f3d" data-enable-animation="false" data-enable-zoom="1" data-zoom-level="16" data-center-lat="25.185300" data-center-lng="55.279982" data-marker-img="images-mjlaw/maps-icon.png"></div>
					<div class="Dubai map-marker-list">
						<div class="map-marker" data-lat="25.185300" data-lng="55.279982" data-mapinfo=""></div>
					</div>
				</div>

			</div>

    </div>
</div>

<div class="clr"></div>
<script type="text/javascript">
var nectarLove = {"mapApiKey":"AIzaSyCcowJ7qP4YCZ5uRJfMW2EXUms7N9v18nU"};
document.addEventListener("DOMContentLoaded", function(){
	   $(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 81
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
});


</script>

<?php include "footer-kb.php" ?>
