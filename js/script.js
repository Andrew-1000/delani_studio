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
  })
});