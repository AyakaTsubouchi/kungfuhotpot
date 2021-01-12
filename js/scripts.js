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
 Contact
-------------------------------------*/
// change iframe default width and height
$(document).ready(function() {
  $(window).on("load", function() {
    $(".google-map iframe").removeAttr("width");
    $(".google-map iframe").removeAttr("height");
    $(".google-map iframe").attr("width","100%")
    $(".google-map iframe").attr("height","100%")
   
  });
});

/*--------------------------------------
End of Contact
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
    var clickedItem = $(this).val();
    clickedItem = JSON.parse(clickedItem);
 
    $("#exampleModal .modal-body #modal-image").attr("src",clickedItem.img);
    $("#exampleModal .modal-body #discription").text(clickedItem.discription);
    $("#exampleModal .modal-body #postid").text(clickedItem.post_id);
    
    fetch('http://localhost:8888/wp-json/wp/v2/gallery?exclude='+ clickedItem.post_id )
    .then(response => response.json())
    .then(myJSON => {
    // Logic goes here
    console.log(myJSON);
if(myJSON){

  for(let i = 0; i < myJSON.length; i++){
    $("#carouselExample").append(`
    <div class='carousel-item carousel_one'>
      <img src=${myJSON[i].fimg_url} alt="nice dishes">
    </div>
    ` 
    );
  console.log('img sorce',myJSON[i].fimg_url) 
 
  }
}
  });

   
    // $("#exampleModal").modal();
  });
  // fetchPostData() {
  //   fetch('http://localhost:8888/wp-json/wp/v2/gallery/'+ clickedItem.post_id)
  //   .then(response => response.json())
  //   .then(myJSON => {
  //   // Logic goes here
  //   console.log(myJSON);
  // });
  // }

  //reset the "active" position when closing the modal.
  $('#exampleModal').on('hidden.bs.modal', function () { 
 
  var firstItem = $(this).find(".carousel-item:first");
  if ( !firstItem.hasClass("active") ) {
    $(this).find(".active").removeClass("active");
    firstItem.addClass("active");
  }
});


//TODO pending need some research how to pass the offset from js
// jQuery.ajax({
//   type: "POST",
//   url: <?=admin_url( 'admin-ajax.php' )?> ,
//   data: { "JS_var":  1997 /*  the value that you want to pass it to PHP variable */   }, 
//   success: function(data) {
//       alert("success!");
//   }
// });

/*--------------------------------------
End of Modal
-------------------------------------*/

//TODO set googlemap's width and height 100%
/*--------------------------------------
Contact
-------------------------------------*/

/*--------------------------------------
End of Contact
-------------------------------------*/
$(function(){

  /* 親のselectが変更されたら */
  $("#parent-select-id").change(function(){

      /* 子selectを表示させつつ */
      $("#children-select").show("slow");
      
      /* 親selectの値を取得して、ajanx送受信用の関数に渡す */
      parentArea = $(this).val();
      runAjax(parentArea);

  });

});

/* データの送受信用の関数 */
function runAjax(parentArea) {
    
  /* wp_localize_scriptから受け取った
     endpoint, secureと、
     親タームのIDを送ってる */
  $.post(
      TOURSEARCH.endpoint, 
      {
  
          action: TOURSEARCH.action,
          parent_id: parentArea,
          secure: TOURSEARCH.secure
  
      }, 
      function(response){
          
          /* レスポンスを処理用の関数に渡す */
          makeOptions(response);

      }
  );
  
}

/* 受信したデータの処理とhtmlの書き換え */
function makeOptions(response) {

  $("#children-select").html("");
  emptyoption = '<option value="">---</option>';
  $("#children-select").append(emptyoption);
  $(response).each(function(){
      options = '<option value="' + this.id + '">' + this.name + '</option>';
      $("#children-select").append(options);
  });
  
}
