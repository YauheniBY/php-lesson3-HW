<?php

// --------------------------------- 1 TASK 0-100 /3
$numberWhile = 0;

while( $numberWhile <= 100 ){

    if($numberWhile % 3 == 0) {
        echo ("$numberWhile,  " );
    }  
    $numberWhile++;     
};

echo ("<hr>");

// --------------------------------- 2 TASK

function whatTheNum ($num) {
    switch ($num % 2) {
        case 0:
            echo ($num . "- Чётное <br>");
            break;
        case 1:
            echo ($num . "- Нечётное <br>");
            break;
    }
}

$myNumber = 0;

do{

    if($myNumber == 0){
        echo ($myNumber . "- Ноль <br>");

    } else {
        whatTheNum ($myNumber);
    };
    $myNumber++;


} while($myNumber <= 10);

echo ("<hr>");

// --------------------------------- 3 (+8) TASK Показать списком города, которые начинаются на  "К"

$sities = [ "Московская область" => ['Королёв', 'Мытищи'], "Брянская область" => ['Клинцы', 'Красная Гора', 'Новозыбков'] ];

$finalStr = "<ul>";


foreach($sities as $sity => $towns){
    
    $finalStr .= "<li style=\"text-transform:uppercase;\"><b>$sity:</b></li>";



    foreach($towns as $town){
        $firstLetter = mb_substr($town,0,1,"UTF-8");
       
        // if($firstLetter == "К"){
            $finalStr .= "<li>";
            if( $town !== $towns[count($towns) - 1]){
                $finalStr .= "$town, ";
            } else {
                $finalStr .= "$town</li>";
            }
        
        // } 
        
    }
    
    

}
$finalStr .= "</ul>";
echo $finalStr;


echo ("<hr>");



// --------------------------------- 4 TASK: function change kyrilic letters to latines leters 
 

function translit ($str){  
    $letters = [ " "=>" ","_"=>"_","а"=> "a", "б" => "b", "в" => "v", "г" => "g", "д"=>"d", "е"=>"e", "ё"=>"e","ж"=>"zh","з"=>"z","и"=>"i","й"=>"i","к"=>"k","л"=>"l","м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"kh","ц"=>"cz","ч"=>"ch","ш"=>"sh","щ"=>"shh","ъ"=>'',"ы"=>"y","ь"=>'', "э" => "e", "ю" => "yu", "я" => "ya" ];
    $strArray= preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    $changedStr = "";
    foreach ($strArray as $myLetter ){
        $changedStr .= $letters[$myLetter];
    }; 
    return $changedStr;    
};

// --------------------------------- 5 TASK : function replace " " to "_"  in a string 


function replace ($str) {
    return implode("_", explode(" ", $str));
}

// --------------------------------- 6 TASK : sites menu UL > LI from PHP-array

$menu = [ "Главная" => ['О нас', 'Отзывы', 'Доставка', 'Акции', 'Контакты'=>['Адрес', 'Телефон']], "Каталог" => ['Мужская одежда', 'Женская одежда', 'Детская  одежда'] ];
$htmlMenuStr = '';
$htmlMenuStr .= "<ul>";
foreach($menu as $main_link => $_links){
    $htmlMenuStr .= "<li>$main_link</li>";
    if(!empty($main_link[0])){
        $htmlMenuStr .= "<ul>";
          foreach($_links as $_linkFromMain_link => $_linkOfMain_link){
            
            if(!empty($_linkFromMain_link[0])){
                $htmlMenuStr .= "<li>$_linkFromMain_link</li>";
                $htmlMenuStr .= "<ul>";
                foreach($_linkOfMain_link as $itemMain_link=>$item){
                    $htmlMenuStr .= "<li>$item</li>";
                 }                
                 $htmlMenuStr .= "</ul>";  
            } else {
                $htmlMenuStr .= "<li>$_linkOfMain_link</li>";
            }
         }        
         $htmlMenuStr .= "</ul>";
    } 
}
$htmlMenuStr .= "</ul>";

echo $htmlMenuStr;
echo ("<hr>");

// --------------------------------- 7 TASK : sites menu UL > LI from array

for($i = 0; $i <= 9; print $i++){}

echo ("<hr>");


// --------------------------------- 9 TASK : multiply Replace- AND Translit-

function transRepl($str){

   return  translit(replace($str));

}

echo( transRepl('я на солнышке лежу'));




?>









