/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

jQuery(document).ready(function() {
    function setHeight() {
      windowHeight = jQuery(window).innerHeight();
      jQuery('.img-banner').css({"min-height": windowHeight-'100'});
    };
    setHeight();
    
    jQuery(window).resize(function() {
      setHeight();
    });
});

jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
     slideshowSpeed: 8000,
     animation: "slide",
     animationLoop: true,
     controlNav: false,
     itemWidth: 250,
     itemMargin: 5,
     minItems: 2,
     maxItems: 4
  });
});
jQuery(window).load(function() {
    jQuery('.flexslider-depoimento').flexslider({
     slideshowSpeed: 8000,
     animation: "slide",
     animationLoop: true,
     itemMargin: 5,
     itemWidth: 400,
     randomize: true,
     minItems: 1,
     maxItems: 3
  });
});