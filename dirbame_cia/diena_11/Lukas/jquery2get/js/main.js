console.log($("h1").text());
console.log($("input").val());

$("button").click(function() {
    if ($("input").val().length > 5 ) {
        document.write("jusu slaptazodis per ilgas");
    }
});

$('input[type="submit"]').click(function(){
$(this).css('color','red');
});
