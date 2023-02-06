


Ekhane amra ekta datar poriborte arekta data same jaygay kivabe dekhabo ta dekhano hoise 

<?php

$string="We are learning php for better understanding about Laravel";

/*$pattern="/php/i";

$replacement="Laravel";

printf(preg_replace($pattern,$replacement,$string));*/

$split=preg_split("/[\s+]/",$string);

print_r($split);