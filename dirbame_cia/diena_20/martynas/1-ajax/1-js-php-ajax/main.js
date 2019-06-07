console.log("ar veikia?");

<!-- // JavaScript -->
$.ajax({
  url: "test.php",
  type: "POST",
  data: {name: "John", location: "Boston"},
  success: function(grizo){
        console.log("lyg grizo, bandysime atsispausdinti kas grizo");
        console.log("grizo"+ grizo);

        // =======jei PHP darot: echo "String";================
        gryzoPaverstasIString = JSON.stringify(grizo);
        console.log("is string paverciam i JSON:"+gryzoPaverstasIString);
        $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        // gryzoPaverstasIJSON = JSON.parse(grizo);
        // console.log("po pavertimo i jason" + gryzoPaverstasIJSON);
        // //this is what I am unsure about?
        //  $("#results").append(gryzoPaverstasIJSON.vardas);
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
