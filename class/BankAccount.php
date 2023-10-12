<?php

require ('class/Client.php');

class BankAccount extends Client
{

    private $solde;

    public function __construct($name, $solde)
    {
        $this->name = $name;
        $this->solde = $solde;
    }

    public function depot($somme)
    {
        return $this->solde +=$somme;
    }

    public function retrait($somme){
        if ($somme>$this->solde){
            echo "Solde insuffisant";
        }else{
            return $this->solde -=$somme;
        }

    }



    public function affiche(){
        echo "Bonjour M. ". $this->name ." il y'a ". $this->solde . " € dans votre compte en banque";
    }

}