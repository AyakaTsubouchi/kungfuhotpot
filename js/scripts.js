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
/*--------------------------------------
back to TOP
-----------------------------------------------------*/
$(document).ready(function () {
  $(window).scroll(function () {
    var scrollPos = $(document).scrollTop(); // .scrollTop() ... current vertical position of the scroll bar  - if the element is not scrollable, this number will be 0.
    var top1 = $("header").offset().top ; // .offset() ... gives the top & left position of an object.
    var top2 = $(".home").offset().top + 500;
    var top3 = $(".slider").offset().top  ;
   
    // var top4 = $(".about-img").offset().top + 500;
    // var top5 = $(".contact").offset().top;

    // var top6 =  $(".banner").offset().top;
 

  if (scrollPos < top2) { //slider
        $(".back-to-top").removeClass("shown");
       
 
    } else if (scrollPos >= top2) { //about-image
      $(".back-to-top").addClass("shown");
      
    } 
  });
});



/*--------------------------------------
End of Back To Top
-------------------------------------*/
