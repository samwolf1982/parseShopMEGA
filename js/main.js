  

  $(function() {
    $( "#speed" ).selectmenu();
 

  });
  // button  scan
      $(function() {
    $( "input[type=submit], button" )
      .button()
      .click(function( event ) {
        event.preventDefault();
   

          var d={'val1': 999}; // первий раз ненадо дни автоматом 2 

$.ajax({
  url: 'php/scan.php',
   type: 'POST',
   data: d,
  success: function(data){
  
      console.log('scan ok '+data);
    
  }
});


      });
  });





  $( "#speed" ).selectmenu({
  change: function( event, ui ) {

console.log("Change");

  }
});



