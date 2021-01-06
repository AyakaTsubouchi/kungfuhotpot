/*--------------------------------------
Header
-----------------------------------------------------*/


$(document).ready(function () {
  $(window).scroll(function () {
      var scrollPos = $(document).scrollTop(); // .scrollTop() ... 
  
      if (scrollPos <100){
        $("header").addClass("first-header");

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
HOME
-----------------------------------------------------*/
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
End of Modal
-------------------------------------*/
$('#exampleModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})



  $('.get_button_more_info').on('click',function() {
    var obj = $(this).val();
    obj = JSON.parse(obj);
 
    $("#exampleModal .modal-body img").attr("src",obj.img);
    $("#exampleModal .modal-body #discription").text(obj.discription);
   
    // $("#exampleModal").modal();
  });



/*--------------------------------------
End of Modal
-------------------------------------*/