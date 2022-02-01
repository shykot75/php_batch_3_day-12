<?php


namespace App\classes;

use App\classes\User;

class Calculator extends User
{
    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $operator = 30;
    public $result;

    public $user;


    public function index (){
//        echo $this->secondNumber;
//        echo $this->firstNumber;
//        echo $this->operator;
//
//        echo "<br />";
        // same class er under e protected & private cls ke call kora
//        echo $this->one();
//        echo $this->two();
        // same class er under e protected & private cls ke call kora
//        echo "<br />";


        // Extend kora chara  user class er property method use [--akhane only public property/method pawa jay--]
//        $this->user = new User();
//        echo $this->user->city;
        // Extend kora chara  user class er property method use [--akhane only public property/method pawa jay--]




        // This are from User Class here parent is user class and child is calculator class --akhane only public & Protected property/method pawa jay
        echo $this->city;
        echo $this->country;
        echo $this->login();
        echo $this->logout();
        //echo $this->profile();        //eta error khabe karon eta private
        // This are from User Class here parent is user class and child is calculator class --akhane only public & Protected property/method pawa jay

    }

    protected function one (){
        echo "in Two";
        echo $this->secondNumber;
        echo $this->firstNumber;
        echo $this->operator;

        echo "<br />";


    }

    private function two(){
        echo "in Two";
        echo $this->secondNumber;
        echo $this->firstNumber;
        echo $this->operator;

        echo "<br />";


    }











}