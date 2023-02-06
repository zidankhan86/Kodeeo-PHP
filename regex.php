

  1.  REGULAR EXPRESSIONS: Regular Expression hocce amra jokhon kon kisu search kori Thik
 oi search er keyword ta amra dekhte pai . Dhoren, amra amader Computer theke kono ekta 
 specific file search korte chai thik tokhon amra amader file name onujai search kore thik
 Jei file ta amra khujesilam sheita peye jai. Ekhaneo same jinish ta ghote , ar ei keyword er
  maddome searching ta e hocche Regular Expression)

  2.Meta-Characters Hocce kichu special Characters .
  
{}- Eta use korsi jokhon amader nirdishto kisu number dekhte chai
[]-Eta array akare data dekhar jonno use kori
. 
+
i-Eta use korle (case sensitive thake na)
^-kono Specific data baad dewar jonno use kori
\\-Jei keyword ta amara chai oita back slash er modde likhi data show koranor jonno
?- match zero or one
|- eita use kori multiple data dekhar jonno


<?php
$string="We have to learn php to earn money.PHP 65";

$exp=preg_match("/PHP|earn/i",$string,$array); //(preg_match) er maddome amra pattern match kori.
//preg_match er pore $string,$arry ei gula hocce ek ekta parameter.
$exp=preg_match_all("/PHP|earn/i",$string,$array); // (preg_match_all) etao same but eta diye Shob data show korte pari
//$exp=preg_match_all("/[^we]/i",$string,$array);
//$exp=preg_match_all("/[aA-zZ]/",$string,$array);
$exp=preg_match_all("/[1-9]/",$string,$array);

if($exp){

    printf("A match was found");
}
else{

    printf("Not matched");
}
print_r($array);

//printf($array[0][0]);