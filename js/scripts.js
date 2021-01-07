/*--------------------------------------
Header
-----------------------------------------------------*/

// add background color when scrolling some amount
$(document).ready(function () {
  $(window).scroll(function () {
      var scrollPos = $(document).scrollTop(); 
      if (scrollPos <100){
        $("header").addClass("first-header");

      } else {
   
        $("header").removeClass("first-header");
       
      }
      
    });
});

//to close an open collapsed nav when clicking the element.
$(document).ready(function () {
  $('.nav-link').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  
});

//to close an open collapsed nav when clicking outside of the nav elements.
$(document).ready(function () {
  $(document).click(function (event) {
      var clickover = $(event.target);
      var _opened = $("#navbarNavAltMarkup").hasClass("show");
      if (_opened === true && !clickover.hasClass("navbar-toggler")) {
          $(".navbar-toggler").click();
      }
  });
});


/*--------------------------------------
End of Header
-------------------------------------*/

/*--------------------------------------
/*--------------------------------------
HOME
-----------------------------------------------------*/
// to show the button after scrolling
$(document).ready(function () {
  $(window).scroll(function () {
    var scrollPos = $(document).scrollTop(); 
    
  if (scrollPos < 200) { 
        $(".back-to-top").removeClass("shown");
       
 
    } else if (scrollPos >= 200) {
      $(".back-to-top").addClass("shown");
      
    } 
  });
});


/*--------------------------------------
End of HOME
-------------------------------------*/


/*--------------------------------------
 Modal
-------------------------------------*/
function switchStyle() {
  if (document.getElementById('styleSwitch').checked) {
    document.getElementById('gallery').classList.add("custom");
    document.getElementById('exampleModal').classList.add("custom");
  } else {
    document.getElementById('gallery').classList.remove("custom");
    document.getElementById('exampleModal').classList.remove("custom");
  }
}
/*--------------------------------------
End of  Modal
-------------------------------------*/