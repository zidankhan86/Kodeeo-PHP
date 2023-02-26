<!-- 
Create a PHP class called Car that has three private properties: Smake, $Smodel, and $year. Define a constructor
5) Ostad < method to set the values of these properties when a new object is created. Also, define six additional methods:
get_make(), get_model(), get_year(), set_make(), set_model(), and set_year(). The get_ methods should allow us to
retrieve the values of the private properties, while the set_ methods should allow us to update them. Finally, define
a method called display_info() that echoes out the car's make, model, and year.
Welcome
 _/ REREAD Create a Car object with the make, model, and year of a 2015 Toyota Corolla. Call the display_info() method to

display the car's information.

38 Fh Tm Then, use the set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic. Call
the display_info() method again to display the updated car information.

BE om ai Hints :
Output :

0 wisi Car make: Toyota

~ Car model: Corolla
Car year: 2015

® EAT

Car make: Honda
Astoria Car model: Civic
Car year: 2015 -->

<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function get_model() {
        return $this->model;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: " . $this->make . "\n";
        echo "Car model: " . $this->model . "\n";
        echo "Car year: " . $this->year . "\n";
    }
}

$car = new Car("Toyota", "Corolla", 2015);
$car->display_info();

$car->set_make("Honda");
$car->set_model("Civic");
$car->display_info();


