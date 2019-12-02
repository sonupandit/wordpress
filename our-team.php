<?php include "header-kb.php" ?>

<div class="outerWrap innerbanner">
    <h1 class="innerHead">Our People</h1>
    <div class="bedcrum">
		<div class="container text-right">
			<a href="index.php">home</a>    people
		</div>
	</div>
</div>

<div class="outerWrap innerBody peoplepage">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
				<style>
		           #filters li {
		            margin-right: 3px!important;
		            font-size: 13px !important;
		            letter-spacing: 0;
		          }
		        	#filters li span {
		            padding: 4px 8px !important;
		            letter-spacing: 0.5px;
		          }
		          .peopleInfo span {
		              height: 35px;
		              display: block;
		          }
		        </style>
				<div class="peopleDropdown">Dubai</div>
				<ul id="filters" class="clearfix">
					<li><span class="filter active" data-filter="advisor gs manager director associate am marketing secretary fo consultant">All</span></li>
					<li><span class="filter" data-filter="advisor">Advisor</span></li>
					<li><span class="filter" data-filter="gs">Global Strategist</span></li>
					<li><span class="filter" data-filter="manager">Manager</span></li>
					<li><span class="filter" data-filter="associate">Associate</span></li>
				</ul>



				<div id="portfoliolist" class="row">

					<div class="portfolio col-md-3 col-sm-4 col-xs-4 advisor eqH" data-cat="advisor">
						<div class="peopleWrap">
							<div class="portfolio-wrapper">
								<img src="images-mjlaw/javed-hussain.jpg" alt="Javed Hussain">
								<div class="label">
									<div class="label-bg"></div>
									<div class="label-text">
										<a href="single-team.php">Read Bio</a>
									</div>
								</div>
							</div>
							<div class="peopleInfo">
								<h3><a href="single-team.php">Javed Hussain</a></h3>
								<span>Senior Advisor</span>
							</div>
						</div>
					</div>

					<div class="portfolio col-md-3 col-sm-4 col-xs-4 advisor eqH" data-cat="advisor">
						<div class="peopleWrap">
							<div class="portfolio-wrapper">
								<img src="images-mjlaw/no-team.jpg" alt="" />
								<div class="label">
									<div class="label-bg"></div>
									<div class="label-text">
										<a href="#">Read Bio</a>
									</div>
								</div>
							</div>
							<div class="peopleInfo">
								<h3><a href="#">Ajay Sikri</a></h3>
								<span>Senior Advisor</span>
							</div>
						</div>
					</div>

					<div class="portfolio col-md-3 col-sm-4 col-xs-4 gs eqH" data-cat="gs">
						<div class="peopleWrap">
							<div class="portfolio-wrapper">
								<img src="images-mjlaw/no-team.jpg" alt="" />
								<div class="label">
									<div class="label-bg"></div>
									<div class="label-text">
										<a href="#">Read Bio</a>
									</div>
								</div>
							</div>
							<div class="peopleInfo">
								<h3><a href="#">Tomas Csobonyei</a></h3>
								<span>Global Strategist and Business Development specialist</span>
							</div>
						</div>
					</div>

					<div class="portfolio col-md-3 col-sm-4 col-xs-4 manager eqH" data-cat="manager">
						<div class="peopleWrap">
							<div class="portfolio-wrapper">
								<img src="images-mjlaw/no-team.jpg" alt="" />
								<div class="label">
									<div class="label-bg"></div>
									<div class="label-text">
										<a href="#">Read Bio</a>
									</div>
								</div>
							</div>
							<div class="peopleInfo">
								<h3><a href="#">Joel George</a></h3>
								<span>Admin Manager</span>
							</div>
						</div>
					</div>

					<div class="portfolio col-md-3 col-sm-4 col-xs-4 associate eqH" data-cat="associate">
						<div class="peopleWrap">
							<div class="portfolio-wrapper">
								<img src="images-mjlaw/no-team.jpg" alt="" />
								<div class="label">
									<div class="label-bg"></div>
									<div class="label-text">
										<a href="#">Read Bio</a>
									</div>
								</div>
							</div>
							<div class="peopleInfo">
								<h3><a href="#">Joel Jackson</a></h3>
								<span>Associate</span>
							</div>
						</div>
					</div>


				</div>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
	var filterList = {

		init: function () {

			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});

		},

		hoverEffect: function () {

			// Simple parallax effect
			$('#portfoliolist .peopleWrap').hover(
				function () {
					$(this).find('.label').stop().fadeIn();
					$(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');
				},
				function () {
					$(this).find('.label').stop().fadeOut();
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
				}

				/*
				function () {
					$(this).find('.label').stop().animate({top: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');
				},
				function () {
					$(this).find('.label').stop().animate({top: "-100%"}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
				}
				*/



			);





		}



	};

	// Run the show!
	filterList.init();

	$(".peopleDropdown").click(function(){
	   $("#filters").slideToggle();
	});



});
</script>

<?php include "footer-kb.php" ?>
