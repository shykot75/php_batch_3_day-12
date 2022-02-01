<?php


namespace App\classes;



class Calculator
{
    public $firstNumber ;
    protected $secondNumber ;
    private $operator;
    public $result;



    public function __construct ($data){


        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];
    }


    public function index (){
//        echo $this->add();
//        echo $this->sub();
//        echo $this->multiplication();
//        echo $this->div();

        switch($this->operator){
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result = $this->multiplication();
                break;

            case '/':
                $this->result = $this->div();
                break;

            case '%':
                $this->result = $this->mod();
                break;
        }
        return $this->result;
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

    protected function mod (){
        return $this->firstNumber % $this->secondNumber;
    }
















}