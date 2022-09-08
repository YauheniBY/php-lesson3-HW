<?php

// --------------------------------- 1 TASK 0-100 /3
// $numberWhile = 0;

// while( $numberWhile <= 100 ){

//     if($numberWhile % 3 == 0) {
//         echo ("$numberWhile,  " );
//     }  
//     $numberWhile++;     
// };

// --------------------------------- 2 TASK

// function whatTheNum ($num) {
//     switch ($num % 2) {
//         case 0:
//             echo ($num . "- Чётное <br>");
//             break;
//         case 1:
//             echo ($num . "- Нечётное <br>");
//             break;
//     }
// }

// $myNumber = 0;

// do{

//     if($myNumber == 0){
//         echo ($myNumber . "- Ноль <br>");

//     } else {
//         whatTheNum ($myNumber);
//     };
//     $myNumber++;


// } while($myNumber <= 10);

// --------------------------------- 3 TASK

$sities = [ "Moscow Region" => ['Королёв', 'Мытищи'], "Bryansk Region" => ['Клинцы', 'Красная Гора', 'Новозыбков'] ];
echo("<ul>");

foreach($sities as $sity => $towns){
    echo("<li>$sity:</li>");
    echo("<li>");
    foreach($towns as $town){ 
        if( $town !== $towns[count($towns) - 1]){
            echo("$town, ");
        } else {
            echo("$town");
        }
    }
    echo("</li>");

}
echo("</ul>");

    
    
?>