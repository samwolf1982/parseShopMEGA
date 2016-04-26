  

  $(function() {
    $( "#speed" ).selectmenu();
 

  });
  // button  scan
      $(function() {
    $( "#bobo" )
      .button()
      .click(function( event ) {
        event.preventDefault();
   

          var d={'val1': 999}; // первий раз ненадо дни автоматом 2 

$.ajax({
  url: 'php/scanx.php',
   type: 'POST',
   data: d,
  success: function(data){
  
      console.log('scan ok '+data);
    
  }
});


      });
  });

// button  scan
      $(function() {
    $( "#lolo" )
      .button()
      .click(function( event ) {
        event.preventDefault();
   

          var d={'val1': 999}; // первий раз ненадо дни автоматом 2 

$.ajax({
  url: 'php/scan3.php',
   type: 'POST',
   data: d,
  success: function(data){
  
      console.log('scan ok lolo '+data);
    
  }
});


      });
  });




  $( "#speed" ).selectmenu({
  change: function( event, ui ) {

console.log("Change");

  }
});



