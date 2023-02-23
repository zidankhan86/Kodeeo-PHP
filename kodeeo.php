<?php

// class kodeeo{


// public $companyName="kodeeo Limited";
// public $address="Sector 11 , Road 10 , House 15";


// public function AddThreeNumbers(){

// echo 1+2+3;

// }

// public function AddFourNumbers(){
//    echo 1+2+3+4;

// }

// }


class Father{

   
public function JomiJama(){


    echo "500 Ekor Jomi ache ";
}



}

class Son extends Father{

    public function JomiJama(){


        echo "900 Ekor Jomi ache ";
    }




}

$sonobj=new Son();
$sonobj->JomiJama();
