  

  $(function() {
    $( "#speed" ).selectmenu();
 

  });
  // button  scan
      $(function() {
    $( "#bobo" )
      .button()
      .click(function( event ) {
        event.preventDefault();
   


console.log("BOBO");
$d=
var o = $xp(FIRST_RECORD_LINK, $d);

console.log($o);
/*          var d={'val1': 999}; // первий раз ненадо дни автоматом 2 

$.ajax({
  url: 'php/scanx.php',
   type: 'POST',
   data: d,
  success: function(data){
  
      console.log('scan ok '+data);
    
  }
});
*/

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



//--------
function $xp(xPath, $scope) {
    var selector = convertXPath(xPath);
    return $(selector, $scope);
}
 
function convertXPath(x) {
 
    //parse //*
    x = replace(x, '//\\*', '');
 
    //parse id
    x = replace(x, '\\[@id="([^"]*)"\\]', '#$1');
 
    //parse [1]
    x = replace(x, '\\[1\\]', ':first');
 
    //parse [n]
    x = replace(x, '\\[([0-9]+)\\]', ':eq($1)');
 
    //parse :eq's and lower 1
    var z = x.split(':eq(');
    x = z[0];
    if (z.length > 1) {
        for (var i = 1; i < z.length; i++) {
            var end = z[i].indexOf(')');
            var number = parseInt(z[i].substr(0, end)) - 1;
            x = x + ':eq(' + number + z[i].substr(end);
        }
    }
 
    //parse /
    x = replace(x, '/', ' > ');
 
    return x;
}
 
function replace(txt, r, w) {
  var re = new RegExp(r, "g");
  return txt.replace(re, w);
}