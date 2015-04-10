$(document).ready(function(){

  setInterval(function(){
    $.get( "results.php", function( data ) {
      $( "ul#results" ).html( data );

    });


  }, 3000);
});
