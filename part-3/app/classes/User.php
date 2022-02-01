<?php


namespace App\classes;


class User
{
    public $city = "Dhaka";
    protected $country = "Bangladesh";
    private $area = "Kawran Bazar";

    public function login(){
        echo"In Login";
    }

    protected function logout(){
        echo"In Logout";
    }

    private function profile(){
        echo"In Profile";
    }










}