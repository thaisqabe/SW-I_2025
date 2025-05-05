<?php

    include_once 'Carro.class.php';

    $car1= new Carro();
    $car2= new Carro();
    $car3= new Carro();
    $car4= new Carro();
    $car5= new Carro();

    $car1->Marca = "TOYOTA" ;
    $car1->Modelo= "CAMRY" ;
    $car1->Combustivel= "Híbrido";
    $car1->Portas= 4;
    $car1->CapacidadeTanque= 60 ;

    $car2->Marca = "MERCEDES-BENZS" ;
    $car2->Modelo= "A-200" ;
    $car2->Combustivel= "Gasolina";
    $car2->Portas= 4;
    $car2->CapacidadeTanque= 43 ;

    $car3->Marca = "FIAT" ;
    $car3->Modelo= "STRADA" ;
    $car3->Combustivel= "Gasolina";
    $car3->Portas= 2;
    $car3->CapacidadeTanque= 55 ;

    $car4->Marca = "CHEVROLET" ;
    $car4->Modelo= "ONIX" ;
    $car4->Combustivel= "Gasolina e etanol";
    $car4->Portas= 4;
    $car4->CapacidadeTanque= 44 ;

    $car5->Marca = "JEEP" ;
    $car5->Modelo= "GLADIATOR" ;
    $car5->Combustivel= "Gasolina";
    $car5->Portas= 4;
    $car5->CapacidadeTanque= 83 ;

    $car1->MostrarDados();

    $car2->MostrarDados();

    $car3->MostrarDados();

    $car4->MostrarDados();

    $car5->MostrarDados();
?>