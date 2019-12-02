
(function ( $ ) {
$(window).load(function() {
    $("#spinner").fadeOut("slow");
});

$('.eqH').responsiveEqualHeightGrid();

jQuery(document).ready(function() {
    jQuery('.bounceleftpost').addClass("hidething").viewportChecker({
        classToAdd: 'showthing animated bounceInLeft',
        offset: 100
   });
    jQuery('.bouncerightpost').addClass("hidething").viewportChecker({
        classToAdd: 'showthing animated bounceInRight',
        offset: 100
   });
    jQuery('.fadeInUp').addClass("hidething").viewportChecker({
        classToAdd: 'showthing animated fadeInUp',
        offset: 200
   });
});



  $('.bannerSlider').slick({
    dots: false,
    infinite: true,
    speed: 2000,
autoplaySpeed: 4000,
    autoplay: true,
    arrows: false,
    slide: 'div',
    cssEase: 'linear',
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,

responsive: [{
        breakpoint: 1024,
        settings: {
    draggable: true,
    touchMove: true
        }
    },{

        breakpoint: 700,
        settings: {
    draggable: true,
    touchMove: true
        }
    }, {
        breakpoint: 500,
        settings: {
    draggable: true,
    touchMove: true
        }
    }]
});

$('.accoladesSlider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    arrows: false,
pauseOnHover: true,
    speed: 1000,
autoplaySpeed: 8000,
    slidesToShow: 1,
    slidesToScroll: 1,

responsive: [{

        breakpoint: 400,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
    draggable: true,
    touchMove: true
        }
    }]
});

$('.clientSlider').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    speed: 1000,
autoplaySpeed: 2000,
    slidesToShow: 5,
    slidesToScroll: 1,

responsive: [{
  breakpoint: 1000,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
    draggable: true,
    touchMove: true
        }
    }, {
  breakpoint: 768,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
    draggable: true,
    touchMove: true
        }
    }, {
        breakpoint: 500,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
    draggable: true,
    touchMove: true
        }
}, {
        breakpoint: 400,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
    draggable: true,
    touchMove: true
        }
    }]
});


function getViewportWidth()
{
       if (window.innerWidth)
       {
               return window.innerWidth;
       }
       else if (document.body && document.body.offsetWidth)
       {
               return document.body.offsetWidth;
       }
       else
       {
               return 0;
       }
}
var tellMeTheSizes=function()
{
	  var listImgH = $('.ImgBoxOuter').height();
	  var listImgW = $('.ImgBoxOuter').width();
	  $('.ImgBoxInner').width(listImgW);
	  $('.ImgBoxInner').height(listImgH);
	  $('.ImgBoxInner .imgSize').css({'max-width': listImgW , 'max-height': listImgH});

	  var homeTxt = $('.bannerSlider img').height();
	  $('.homeHeight').height(homeTxt);


	  var bannerH = $('.bannerSlider img').height();
	  $('.cd-section').height(bannerH);


		$(function () {
			$(window).scroll(function () {
			if ($(this).scrollTop() > 35) {
				$('.fixedTop').show();
			} else {
				$('.fixedTop').hide();
			}
		});
		// scroll body to 0px on click
		$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});


var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

 // Parallax
 // makes the parallax elements
function parallaxIt() {
  // create variables
  var $fwindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  var $contents = [];
  var $backgrounds = [];

  // for each of content parallax element
  $('[data-type="content"]').each(function(index, e) {
    var $contentObj = $(this);

    $contentObj.__speed = ($contentObj.data('speed') || 1);
    $contentObj.__fgOffset = ($contentObj.data('offset') || $contentObj.offset().top);
    $contents.push($contentObj);
  });

  // for each of background parallax element
  $('[data-type="background"]').each(function() {
    var $backgroundObj = $(this);

    $backgroundObj.__speed = ($backgroundObj.data('speed') || 1);
    $backgroundObj.__fgOffset = ($backgroundObj.data('offset') || $backgroundObj.offset().top);
    $backgrounds.push($backgroundObj);
  });


  // update positions
  $fwindow.on('scroll resize', function(e) {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    $contents.forEach(function($contentObj) {
      var yPos = $contentObj.__fgOffset - scrollTop / $contentObj.__speed;

      $contentObj.css('transform', "translateY("+  -yPos + "px)");
      //console.log("translateY("+ yPos+"px)");
    });

    $backgrounds.forEach(function($backgroundObj) {
      var yPos = -((scrollTop - $backgroundObj.__fgOffset) / $backgroundObj.__speed);

      $backgroundObj.css({
        backgroundPosition: '50% ' + yPos + 'px'
      });
    });


  });


  // triggers winodw scroll for refresh
  $fwindow.trigger('scroll');

};



if(!isMobile){
	$(window).on('load', function(event) {
	parallaxIt();
});

parallaxIt();
}



	  //======================HEADER SCROLL STARTS================================//


	  	if(getViewportWidth() < 767)
		  {
			  var bannerH = $('.bannerSlider img').height() +80;
			  $('.cd-section').height(bannerH);
		  }

	  	if(getViewportWidth() < 500)
		  {
			  var bannerH = $('.bannerSlider img').height() +120;
			  $('.cd-section').height(bannerH);
		  }

		if(getViewportWidth() < 992)
		  {

			  $(function () {
					$(window).scroll(function () {
					if ($(this).scrollTop() > 35) {
						$('.fixedTop').hide();
					} else {
						$('.fixedTop').hide();
					}
				});
				// scroll body to 0px on click
				$('#back-top a').click(function () {
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});


		  }


		 //======================HEADER SCROLL ENDS================================//


}
window.onload=function()
{
	   tellMeTheSizes();
	   //setTimeout(function(){
		 // $('.ImgBoxOuter').show();
		//}, 500);
	   //$('.ImgBoxOuter').fadeIn();
	   //$('.ImgBoxOuter').show();
}
window.onresize=function()
{
	   tellMeTheSizes();

}



$(".hamburger").click(function(event) {
    $(this).toggleClass('h-active');
    $(".newsLeftMenu").toggleClass('slidenav');
});



$(".menu").each(function(){
    $('<span class="mClick"></span>').insertBefore($(this).find(".fadeInDown"));
})









}( jQuery ));



