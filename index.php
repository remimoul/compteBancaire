</br>
</br>


<?php

require ('class/BankAccount.php');

$name = "Dupont";
$solde = 1000;

$compte1 = New BankAccount('Duchmol',800);
$compte1->retrait(200);
$compte1->depot(350);
$compte1->affiche();
?>


</br>
</br>


<?php
$compte2 = New BankAccount($name,$solde);
$compte2->depot(25);
$compte2->affiche();

