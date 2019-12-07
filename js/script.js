$(document).ready (function(){
  $("#designLgo").click(function(){
    $("#Design").hide();
    $(".toggleDesignLogo").show();
  });
  $(".toggleDesignLogo").click(function(){
    $(".toggleDesignLogo").hide();
    $("#Design").show();
  });
  $("#devLogo").click(function(){
    $("#Develop").hide();
    $(".toggleDevLogo").show();
  });
  $(".toggleDevLogo").click(function(){
    $(".toggleDevLogo").hide();
    $("#Develop").show();
  });
  $("#productLogo").click(function(){
    $("#Product").hide();
    $(".toggleProductLogo").show();
  });
  $(".toggleProductLogo").click(function(){
    $(".toggleProductLogo").hide();
    $("#Product").show();
  });
  //Function for Hovering on images
  $(function() {
    var mobileScreenTreshold = 1024;
    $(".hvrbox").click(function(e) {
      if($(window).width() <= mobileScreenTreshold) {
        if($(this).hasClass("active")) {
          $(this).removeClass("active");
        } else {
          e.preventDefault();
          $(this).addClass("active");
        }
      } else {
        $(this).removeClass("active");
      }
    });
  });

  $(function($){
    $('#mailchimp').submit(function(){
      var mailchimpform = $(this);
      $.ajax({
        url:mailchimpform.attr('action'),
        type:'POST',
        data:mailchimpform.serialize(),
        success:function(data){
          alert(data);
        }
      });
      return false;
    });
  });
  
});