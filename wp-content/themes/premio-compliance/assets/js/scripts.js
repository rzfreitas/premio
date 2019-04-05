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

jQuery('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: true,
  dots: false,
  asNavFor: '.caption',
  responsive: [   
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }   
  ]
 });
 jQuery('.caption').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: false,
  dots: false,
  asNavFor: '.slider',
  responsive: [   
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true
      }
    }   
  ]
 });