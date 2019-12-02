<div class="outerWrap workWithUs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="workLeft">
					<h2 class="wtxt" style="margin-bottom: 8px;">Work With Us</h2>
					<a href="careers.php" class="font14 ytxt">Apply Now →</a>
				</div>
				<div class="workRight">
				Chart your career course with the best in the business.<br>Beginners or experienced professionals - explore opportunities to grow and excel.
				</div>
			</div>
		</div>
	</div>
</div>
<div class="outerWrap footer">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
        		<div class="pull-left social">
        			<!-- <a href="https://www.facebook.com/kadenborissglobal/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp; -->
					<a href="https://twitter.com/kadenboriss" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
					<a href="https://www.linkedin.com/in/kadenboriss/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
				<span class="font14">&copy; <?php echo date("Y"); ?> Kaden Boriss.</span><br>
				<span class="ytxt">Website Designed by <a href="http://www.infomediawebsolutions.com" target="_blank">Infomedia Web Solutions</a>.</span>
            </div>
        </div>

    </div>
</div>
<!-- <div class="footerDisclaimer">
	<div class="container">
		<div class="row">
	    	<div class="col-12" style="padding: 20px 0; text-transform: none; ">
	    		<b>Disclaimer: All law offices are independent and autonomous of each other with no financial arrangements or controlling interests, whatsoever. Kindly, do your own due diligence as to their respective professional expertise.</b>
	    	</div>
	    </div>
	</div>
</div> -->
<script src="js-mjlaw/app.js"></script>
<script>
  window.addEventListener('load',function(){

    jQuery('[href*="mailto:"]').click(function(){
		var mailattr = jQuery(this).attr('href');
		gtag('event', 'email', {'event_category' : 'email', 'event_label' : mailattr});
    });

    jQuery('[href*="tel:"]').click(function(){
		var telattr = jQuery(this).attr('href');
		gtag('event', 'Phone', {'event_category' : 'Phone', 'event_label' : telattr});
    });

  });
</script>
</body>
</html>