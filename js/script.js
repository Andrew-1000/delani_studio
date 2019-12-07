$(document).ready (function(){
  $("#designLgo").click(function(){
    $("#Design").hide();
    $(".toggleDesignLogo").show();
  });
  $(".toggleDesignLogo").click(function(){
    $(".toggleDesignLogo").hide();
    $("#Design").show();
  });
});