
$(document).ready(function() {
  $("#vers_connexion").click(function(){
      //$("#form-register").css("display", "none");
      $("#form_inscription").hide(200);
      $("#form_connexion").show(200);
      $("#titre_connection").show();
      $("#titre_inscrption").hide();
      $("#vers_inscription").show();
      $("#vers_connexion").hide();


  });

  $("#vers_inscription").click(function(){
    $("#form_inscription").show(200);
    $("#form_connexion").hide(200);
    $("#titre_connection").hide();
    $("#titre_inscrption").show();
    $("#vers_inscription").hide();
    $("#vers_connexion").show();

  });
});

$("#upfile1").click(function () {
    $("#file1").trigger('click');
});
$("#vers_inscription").hide();




/*Catégories styling*/
$(document).ready(function () {
      $(".sub > a").click(function() {
          var ul = $(this).next(),
                  clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
                  height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
          clone.remove();
          ul.animate({"height":height});
          return false;
      });
         $('.mini-menu > ul > li > a').click(function(){
         $('.sub a').removeClass('active');
         $(this).addClass('active');
      }),
         $('.sub ul li a').click(function(){
         $('.sub ul li a').removeClass('active');
         $(this).addClass('active');
      });
  });

  $( function() {
   $( "#slider-range" ).slider({
     range: true,
     min: 0,
     max: 1000,
     values: [ 190, 728 ],
     slide: function( event, ui ) {
       $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        var mi = ui.values[0];
             var mx = ui.values[1];
             filterSystem(mi, mx);
     }
   });
   $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
 } );


 function filterSystem(minPrice, maxPrice) {
     $(".items div.item").hide().filter(function () {
         var price = parseInt($(this).data("price"), 10);
         return price >= minPrice && price <= maxPrice;
     }).show();
 }








/*!
 * Start Bootstrap - SB Admin v5.1.1 (https://startbootstrap.com/template-overviews/sb-admin)
 * Copyright 2013-2019 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin/blob/master/LICENSE)
 */
