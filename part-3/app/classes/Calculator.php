<?php


namespace App\classes;



class Calculator
{
    public $firstNumber ;
    protected $secondNumber ;
    private $operator;
    public $result;



    public function __construct (){


        $this->firstNumber =10;
        $this->secondNumber =20;
        $this->operator = '+';
    }


    public function index (){
//        echo $this->add();
//        echo $this->sub();
//        echo $this->multiplication();
//        echo $this->div();

        switch($this->operator){
            case '+':
                echo $this->add();
                break;

            case '-':
                echo $this->sub();
                break;

            case '*':
                echo $this->multiplication();
                break;

            case '/':
                echo $this->div();
                break;
        }
    }

    protected function add (){
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub (){
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multiplication (){
        return $this->firstNumber * $this->secondNumber;
    }

    protected function div (){
        return $this->firstNumber / $this->secondNumber;
    }
















}