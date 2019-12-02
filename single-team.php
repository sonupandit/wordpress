<?php include "header-kb.php" ?>

<div class="outerWrap innerbanner">
    <h1 class="innerHead">Our People</h1>
    <div class="bedcrum">
		<div class="container text-right">
			<a href="index.php">home</a>    <a href="people.php">people</a>
		</div>
	</div>
</div>

<div class="outerWrap profileIntro">
	<div class="container">
    	<div class="row">
        	<div class="col-md-3 col-sm-4 col-xs-4">
   		    	<img src="images-mjlaw/javed-hussain.jpg" class="fullwidth relpos img-thumbnail peopleImg" alt="Javed Hussain"/>
   		    </div>
        	<div class="col-md-9 col-sm-8 col-xs-8">
           		<h2 class="wtxt" style="margin-bottom: 8px;">Javed Hussain</h2>
           		<span class="wtxt">Senior Advisor</span>
           		<div class="clr height15"></div>
            </div>
        </div>
    </div>
</div>

<div class="outerWrap innerBody">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
           		<p>Javed brings a unique skill set combining investment banking, cross-asset principal investing and risk management, developed over a 30-year career in international banking and finance with a strong emerging markets focus.</p>

				<p>He supports the global client base with integrated due diligence, risk advisory and cross-functional business improvement. His broad and deep experience of combining business improvements with expertise of capital markets and financing helps clients to monetise value/exit investments.</p>

				<p>Javed started his career in the City of London at the Bank of England before moving to a global investment bank (Nomura) where he worked for 19 years including roles in risk management and as a portfolio manager in the bank's de facto internal hedge fund.</p>

				<p>He has been in the Middle East since 2007, where he has had senior roles with Nomura in Bahrain, Dubai and Riyadh, including Chief Executive Officer of Nomura Saudi Arabia. Since leaving Nomura in 2017, he has worked with family offices and Ultra High Net Worth Individuals in the private capital markets space. He is based in Dubai.</p>


           		<a href="our-team.php">&larr; Back to People</a>


            </div>
        </div>
    </div>
</div>


<script>
	$(document).ready(function() {
		  $(".peopleDropdown").click(function(){
			$("#filters").slideToggle();
		  });
		$('.eqH').responsiveEqualHeightGrid();

	});
</script>
<?php include "footer-kb.php" ?>
