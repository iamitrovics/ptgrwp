(function($) {

	jQuery(document).ready(function() {

      // Sticky header
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50){  
            $('#top-bar').addClass("sticky");
        }
        else{
            $('#top-bar').removeClass("sticky");
        }
    });       

    $('#brands-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
      arrows:false,
    });  

    $('#quotes-slider').slick({
      infinite: true,
      arrows:false,
      dots:true,
      slidesToShow: 1,
      slidesToScroll: 1
    });      
                
    $(function() {
      $('.report-card a').matchHeight();
      $('#about-features .about-card').matchHeight();
      $('#investment .invest-card .invest-desc').matchHeight();
      $('#packages .package-card').matchHeight();
      $('#packages .package-card .package-text').matchHeight();
      $('#packages .package-card .package-header').matchHeight();
      $('.invest-text').matchHeight();
      $('#about-team .team-wrapper .team-card .team-desc h3').matchHeight();
    });    

   // Menu
   $('#mobile-menu--btn a').click(function(){
    $('.main-menu-sidebar').addClass("menu-active");
    $('.menu-overlay').addClass("active-overlay");
    $(this).toggleClass('open');
});

// Menu
$('.close-menu-btn').click(function(){
    $('.main-menu-sidebar').removeClass("menu-active");
    $('.menu-overlay').removeClass("active-overlay");
});

    $(function() {

    var menu_ul = $('.nav-links > li.has-menu  ul'),
        menu_a  = $('.nav-links > li.has-menu  small');
    
    menu_ul.hide();
    
    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
        menu_a.removeClass('active');
        menu_ul.filter(':visible').slideUp('normal');
        $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
        $(this).removeClass('active');
        $(this).next().stop(true,true).slideUp('normal');
        }
    });
    
    });
    
$(".nav-links > li.has-menu  small ").attr("href","javascript:;");

var $menu = $('#menu');

$(document).mouseup(function (e) {
  if (!$menu.is(e.target) // if the target of the click isn't the container...
  && $menu.has(e.target).length === 0) // ... nor a descendant of the container
  {
    $menu.removeClass('menu-active');
    $('.menu-overlay').removeClass("active-overlay");
  }
});         

     // Menu
     $('#btn-search').click(function(){
      $('#search-bar').toggleClass("search-active");
      $(this).toggleClass('active-ico');
  });   

          // modal script
          setTimeout(function() {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.brochure-btn').click(function(e){
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = '+myEm+'], .modal[data-my-element = '+myEm+']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function(){
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });



  });

  // scroll to element on the same page 
  $('.local-cta').on('click', function(e) {
		e.preventDefault();
		var ele = $(this);
		var location = $(ele).attr('href');

		$('html, body').animate({
			scrollTop: $(location).offset().top
		}, 500);
	});
  
})(jQuery);
