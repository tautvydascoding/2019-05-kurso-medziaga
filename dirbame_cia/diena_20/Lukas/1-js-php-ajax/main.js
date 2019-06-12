console.log("ar veikia?");

<!-- // JavaScript -->
$.ajax({
  url: "test.php",
  type: "POST",
  data: {name: "John", location: "Boston"},
  success: function(grizo){
        console.log("lyg suveike, bandysime atsispausdinti rezultata");
        console.log(grizo);

        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        grizoPaverstasIJSON = JSON.parse(grizo);
        console.log("grizo Paversti duomeni I JSON" + grizoPaverstasIJSON);
        //this is what I am unsure about?
         $("#results").append(grizoPaverstasIJSON.vardas); // append su JS pagalba ideda kazka i html
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
