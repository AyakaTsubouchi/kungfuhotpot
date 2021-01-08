/*--------------------------------------
Header
-----------------------------------------------------*/

// add background color when scrolling some amount
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();
    if (scrollPos < 100) {
      $("header").addClass("first-header");
    } else {
      $("header").removeClass("first-header");
    }
  });
});

//to close an open collapsed nav when clicking the element.
$(document).ready(function() {
  $(".nav-link").click(function() {
    $(".navbar-collapse").collapse("hide");
  });
});

//to close an open collapsed nav when clicking outside of the nav elements.
$(document).ready(function() {
  $(document).click(function(event) {
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
$(document).ready(function() {
  $(window).scroll(function() {
    var scrollPos = $(document).scrollTop();

    if (scrollPos < 200) {
      $(".back-to-top").removeClass("shown");
    } else if (scrollPos >= 200) {
      $(".back-to-top").addClass("shown");
    }
  });
});

// slideIn animation
$(document).ready(function() {
  $(window).on("load", function() {
    setTimeout( function(){
      $(".text-slider").addClass("slide-in");
    },1000)
   
  });
});

/*--------------------------------------
End of HOME
-------------------------------------*/

/*--------------------------------------
Modal
-----------------------------------------------------*/
// disable the gallery modal on narrow screen
// $(document).ready(function() {
//   if ($(window).width() < 400) {
//     $("#gallery").removeAttr("data-target");
//   } else {
//     $("#gallery").setAttribute("data-target", "#exampleModal");
//   }
// });

/*--------------------------------------
End of Modal
-------------------------------------*/

/*--------------------------------------
End of Modal
-------------------------------------*/
$('#exampleModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})



  $('.get_button_more_info').on('click',function() {
    var obj = $(this).val();
    obj = JSON.parse(obj);
 
    $("#exampleModal .modal-body #modal-image").attr("src",obj.img);
    $("#exampleModal .modal-body #discription").text(obj.discription);
   
    // $("#exampleModal").modal();
  });

  $('#exampleModal').on('hidden.bs.modal', function () { 
  //   $(".carousel-item").html($(this).find('.active')).replace(" active","");
  //  $("#exampleModal .modal-body #first-item").setAttribute("class","active")
  
  var firstItem = $(this).find(".carousel-item:first");
  if ( !firstItem.hasClass("active") ) {
    $(this).find(".active").removeClass("active");
    firstItem.addClass("active");
  }
});

/*--------------------------------------
End of Modal
-------------------------------------*/
