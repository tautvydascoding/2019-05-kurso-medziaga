<?php



//get data passed to from main.js script
$username =  $_POST["name"];
// su apsauga nuo hackinimo:
$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES); //  real escape string alternatyva ent_quetes pasalina dvigubas kabutes, stripg tag viengubas


//=============return "STRING"=================
// echo "vardas: " . $username  ;
//    OR
//============ return json objekta=================
$x = $_POST["name"];
$manoAray = ['vardas' => $x  ];
echo json_encode( $manoAray ); // masyva uzkoduoja i json formata {name: value}
