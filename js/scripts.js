(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);


function openTab(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
	
	
}

( function() {
    var nav = document.getElementById( 'site-navigation' ), button, menu;
    if ( ! nav ) {
        return;
    }
 
    button = nav.getElementsByTagName( 'button' )[0];
    menu   = nav.getElementsByTagName( 'ul' )[0];
    if ( ! button ) {
        return;
    }
 
    // Hide button if menu is missing or empty.
    if ( ! menu || ! menu.childNodes.length ) {
        button.style.display = 'none';
        return;
    }
 
    button.onclick = function() {
        if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
            menu.className = 'nav-menu';
        }
 
        if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
            button.className = button.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
} )(jQuery);
jQuery(document).ready(function ($) {
    $(':radio').change(function (event) {
        var id = $(this).data('id');
        $('.' + id).addClass('none').siblings().removeClass('none');
    });
    $('.menu-btn').click(function () {
        $('.hm-landing-menu ul').addClass('hm-menu-opened');
    });
    $('.hm-overlay').click(function () {
        $('.hm-landing-menu ul').removeClass('hm-menu-opened');
    });
    $(document).ready(function(){
        $(".hm-text-slider .owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            mouseDrag: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 600
        });
        $(".hm-recent-posts .owl-carousel").owlCarousel({
            items: 4,
            loop: false,
            margin: 40,
            dots: true,
            nav: true,
            navText: ['',''],
            responsive : {
                0 : {
                    items : 1,
                    margin : 5,
                },
                640 : {
                    items : 2,
                    margin : 10
                },
                992 : {
                    items : 3,
                    margin : 20
                },
                1600 : {
                    items : 4,
                    margin : 40
                }
            }
        });
    });
    $("#home2-banner-arrow").click(function() {
        $('html,body').animate({
            scrollTop: $("#home2-2-section").offset().top
        }, 500);
    });
    $(".hm-chat-link a").click(function (e) {
        Intercom('show');
        e.preventDefault()
    });

    $(".wpcf7").parents(".vc_column-inner").css({
        'padding-left': '0',
        'padding-right': '0'
    });

});

jQuery(document).ready(function($) {$
  // $('.tablinks:nth-child(1)').css('background-color', '#3fff');
									
    $('.tablinks:nth-child(3)').click(function(){
		$(this).css('background-color', '#fff');
	    $('.tablinks:nth-child(2)').css('background-color', '#5a6788');
	    $('.tablinks:nth-child(2)').addClass('act');	
       })

	$('.tablinks:nth-child(2)').click(function(){
	    $(this).css('background-color', '#fff');
		$('.tablinks:nth-child(1)').css('background-color', '#97dae7');
		$('.tablinks:nth-child(3)').css('background-color', '#5a6788');
       })	
									
	$('.tablinks:nth-child(1)').click(function(){
	    $(this).css('background-color', '#fff');
		$('.tablinks:nth-child(2)').css('background-color', '#97dae7');
      })	
									
																
});
