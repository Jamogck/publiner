$(function() {
    var availableTags = [
      "Barleywine",
      "India Pale Ale",
      "Scottish Ale",
      "Scotch Ale",
      "Lager",
      "Dubbel",
      "Quadrupel",
      "Stout",
      "Porter",
      "Strong ale",
      "Pilsner"
    ];
    $( "#search" ).autocomplete({
      source: availableTags
    });
  });


  $( "#toggler" ).click(function)() {
    $( "#info" ).toggle();
  });



// $(function() {
//   // run the currently selected effect
//   function runEffect() {
//     // get effect type from
//     var selectedEffect = $( "#effectTypes" ).val();

//     // most effect types need no options passed by default
//     var options = {};
//     // some effects have required parameters
//     if ( selectedEffect === "scale" ) {
//       options = { percent: 0 };
//     } else if ( selectedEffect === "size" ) {
//       options = { to: { width: 200, height: 60 } };
//     }

//     // run the effect
//     $( "#effect" ).toggle( selectedEffect, options, 500 );
//   };

//   // set effect from select menu value
//   $( "#effect" ).click(function() {
//     runEffect();
//   });
// });