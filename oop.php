<?php

interface BaseAnimal
{
    
    function isAlive();
    function canEat($parameter1, $parameter2);
    function breed();
}
// implements BaseAnimal

class Animal implements BaseAnimal
{
    public $result;
    function isAlive()
    {
       
    }
    function canEat($parameter1, $parameter2)
    {
        
    }
    function breed()
    {
    }
    function sayYes(){

    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}
class Human implements BaseHuman
{

    function isAlive()
    {
    }
    function canEat($parameter1, $parameter2)
    {
    }
    function Breed()
    {
    }

    function canTalk()
    {
    }
}
$object = new Human('', '');
echo $object instanceof human;
//echo $object instanceof Animal;
// $object->isAlive();

