/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
}

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

jQuery('.scroll_to').click(function(e){
    var jump = jQuery(this).attr('href');
    var new_position = jQuery(jump).offset();
    jQuery('html, body').stop().animate({ scrollTop: new_position.top }, 1000);
    e.preventDefault();
});