
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222')
	}, 5000);

});

var isMobile = false;

$(document).ready(function()
{


  $('html.oldie img[src*="svg"]').attr('src', function() { return $(this).attr('src').replace('.svg', '.png') });

  $('#hamburger').click(function()
  {
    if ($(this).hasClass("is-active"))
    {
      showHideHamburgerMenu('hide');
    }
    else showHideHamburgerMenu('show');
  });

  $('#topNav ul li').hover(function()
  {
    if (isMobile) $(this).children('ul').stop().slideDown(300);
    else $(this).children('ul').stop().fadeIn(300);
  },function()
  {
    if (isMobile) $(this).children('ul').stop().slideUp(300);
    else $(this).children('ul').stop().fadeOut(300);
  });

  positionSubnav();
  makeSquaresSquare();
  window.sr = ScrollReveal({ reset: true, distance: '50px', duration: 1200, scale: 0.9,viewFactor: 0.25, delay: 100, });
  setScrollReveal();
  $(window).resize(function(){ makeSquaresSquare(); positionSubnav(); showHideHamburgerMenu('auto'); setScrollReveal();});


});

function setScrollReveal()
{
  if ($(window).width() > 767)
  {
  sr.reveal('.scrollReveal');
  sr.reveal('.scrollRevealLarger', { reset: false });
  sr.reveal('.scrollRevealLargest', { reset: false, distance: '0', scale: 1 });
  }
}

function makeSquaresSquare()
{
  $('.square').each(function()
  {
    newHeight = $(this).width();
    //$(this).height($(this).width());
    console.log("height: " + $(this).height() + " width: "+ $(this).width() + " new width: "+$(this).height());
  });
}

function showHideHamburgerMenu(action)
{
  speed = 300;
  if (action=="auto")
  {
    if ($(window).width() <= 768)
    {
      if ($('#hamburger').hasClass("is-active")) action="show";
      else action="hide";
      speed = 0;
    }
    else
    {
      $('#topNav').show();
      $('#navBackground').hide();
    }
  }
  if (action=="hide")
  {
    $('#hamburger').removeClass("is-active");
    if (isMobile) $('#topNav').fadeOut(speed);
    $('#navBackground').fadeOut(speed,function() { $(this).hide(); });
  }
  else if (action=="show")
  {
    $('#hamburger').addClass("is-active");
    $('#topNav').fadeIn(speed * 1.5);
    $('#navBackground').fadeIn(speed * 1.5);
  }
}

function positionSubnav()
{
  if ($('#topNav li:first-child').css("display") == "inline-block") // if desktop
  {
    $('#topNav ul ul').each(function()
    {
      navItemWidth = $(this).outerWidth();
      parentWidth = $(this).parent().outerWidth();
      thisLeft = (0-(navItemWidth/2)) + (parentWidth / 2);
      $(this).css("left",thisLeft+"px");
    });
  }
  else
  {
    isMobile = true;
    $('#topNav ul ul').each(function()
    {
      $(this).css("left","auto");
    });
  }
}