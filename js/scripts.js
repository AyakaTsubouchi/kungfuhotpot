/*--------------------------------------
Header
-----------------------------------------------------*/


$(document).ready(function () {
  $(window).scroll(function () {
      var scrollPos = $(document).scrollTop(); // .scrollTop() ... 
  
      if (scrollPos <100){
        $("header").addClass("first-header");
        $("header").addText("first-header");
      } else {
   
        $("header").removeClass("first-header");
       
      }
      
    });
});
$(document).ready(function () {
  $('.nav-link').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  
});


/*--------------------------------------
End of Header
-------------------------------------*/

/*--------------------------------------
Home
-----------------------------------------------------*/
$(document).ready(function () {
  $(window).scroll(function () {
    var scrollPos = $(document).scrollTop(); // .scrollTop() ... current vertical position of the scroll bar  - if the element is not scrollable, this number will be 0.
    var top1 = $("header").offset().top ; // .offset() ... gives the top & left position of an object.
    var top2 = $(".home").offset().top + 500;
    var top3 = $(".about").offset().top  ;
    // var top4 = $(".about-img").offset().top +200;
    var top4 = $(".about-img").offset().top + 500;
    var top5 = $(".contact").offset().top;
    // var top6 = $(".contact").offset().top + 1500;
    var top6 =  $(".banner").offset().top;
    // var top6 = $(".contact").offset().top + 1000 || $(".banner").offset().top ;

    if (scrollPos >= top1 && scrollPos < top2 ) { //home
      $(".indicator-1").addClass("selected");
      $(".indicator-2").removeClass("selected");
      $(".indicator-3").removeClass("selected");
      $(".indicator-4").removeClass("selected");
      $(".indicator-5").removeClass("selected");
  
      
    } else if (scrollPos >= top2 && scrollPos < top3) { //about
        $(".indicator-1").removeClass("selected");
        $(".indicator-2").addClass("selected");
        $(".indicator-3").removeClass("selected");
        $(".indicator-4").removeClass("selected");
        $(".indicator-5").removeClass("selected");
 
    } else if (scrollPos >= top3 && scrollPos < top4) { //about-image
      $(".indicator-1").removeClass("selected");
      $(".indicator-2").removeClass("selected");
      $(".indicator-3").addClass("selected");
      $(".indicator-4").removeClass("selected");
      $(".indicator-5").removeClass("selected");
      
    } else if (scrollPos >= top4 && scrollPos < top5) { //contact
    // } else if (scrollPos >= top5 && scrollPos < top6) { //contact
      $(".indicator-1").removeClass("selected");
      $(".indicator-2").removeClass("selected");
      $(".indicator-3").removeClass("selected");
      $(".indicator-4").addClass("selected");
      $(".indicator-5").removeClass("selected");
    } else if (scrollPos >= top5 ) { //banner
    // } else if (scrollPos >= top6) {  //banner
      $(".indicator-1").removeClass("selected");
      $(".indicator-2").removeClass("selected");
      $(".indicator-3").removeClass("selected");
      $(".indicator-4").removeClass("selected");
      $(".indicator-5").addClass("selected");
    }
  });
});



/*--------------------------------------
End of Home
-------------------------------------*/
