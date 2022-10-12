<?php
    $carros_db=[];
    $carros_db["NNN2020"]=["Auto"=>["Marca"=>"Nissan", "Modelo"=>2020, "Tipo"=>"Versa"], 
    "Propietario"=>["Nombre"=>"Jose Perez Leon", "Ciudad"=>"Puebla", "Direccion"=>"Centro, 16 de septiembre 210"]];

    $carros_db["LFA2005"]=["Auto"=>["Marca"=>"Kia", "Modelo"=>2005, "Tipo"=>"Rio"], 
    "Propietario"=>["Nombre"=>"Luis Fernandez Acuña", "Ciudad"=>"Puebla", "Direccion"=>"Centro, Zaragoza 234"]];

    $carros_db["JPL2019"]=["Auto"=>["Marca"=>"Chevrolet", "Modelo"=>2019, "Tipo"=>"Aveo"], 
    "Propietario"=>["Nombre"=>"Jorge Pacheco Limon", "Ciudad"=>"Puebla", "Direccion"=>"San Miguel, Tezozomoc 210"]];
    
    $carros_db["LGH2015"]=["Auto"=>["Marca"=>"Nissan", "Modelo"=>2015, "Tipo"=>"NP300"], 
    "Propietario"=>["Nombre"=>"Lidia Gonzalez Huerta", "Ciudad"=>"Puebla", "Direccion"=>"San Miguel, Anahuac 6578"]];

    $carros_db["GFM2021"]=["Auto"=>["Marca"=>"Nissan", "Modelo"=>2021, "Tipo"=>"March"], 
    "Propietario"=>["Nombre"=>"Gabriela Fernandez Minero", "Ciudad"=>"Puebla", "Direccion"=>"La Flor, Rosa 2689"]];

    $carros_db["ESR2000"]=["Auto"=>["Marca"=>"Toyota", "Modelo"=>2000, "Tipo"=>"Hilux"], 
    "Propietario"=>["Nombre"=>"Ernesto Salas Ramos", "Ciudad"=>"Puebla", "Direccion"=>"La Flor, Margarita 324"]];

    $carros_db["FKV2008"]=["Auto"=>["Marca"=>"Volkswagen", "Modelo"=>2008, "Tipo"=>"Vento"], 
    "Propietario"=>["Nombre"=>"Freddy Krueger", "Ciudad"=>"Puebla", "Direccion"=>"Fracc Estrella, Jupiter 21"]];

    $carros_db["SJN2010"]=["Auto"=>["Marca"=>"Nissan", "Modelo"=>2010, "Tipo"=>"Sentra"], 
    "Propietario"=>["Nombre"=>"Scarlet Johanson", "Ciudad"=>"Puebla", "Direccion"=>"Fracc Estrella, Saturno"]];

    $carros_db["JDC2020"]=["Auto"=>["Marca"=>"Chevrolet", "Modelo"=>2020, "Tipo"=>"Onix"], 
    "Propietario"=>["Nombre"=>"Johny Depp", "Ciudad"=>"Puebla", "Direccion"=>"El Moral, Limonero 20"]];

    $carros_db["AHM2018"]=["Auto"=>["Marca"=>"MG5", "Modelo"=>2018, "Tipo"=>"Coupe"], 
    "Propietario"=>["Nombre"=>"Amber Heard", "Ciudad"=>"Puebla", "Direccion"=>"El Moral, Naranjo 546"]];



    function buscarAuto($matricula){
        global $carros_db;
        foreach ($carros_db as $key => $value){
            if ($matricula==$key){
                print "<p>Registro $matricula encontrado: ";
                print_r($value);
                print "</p>";
            }
        }
    }

    function mostrarTodo(){
        global $carros_db;
        print "<pre>";
        print_r($carros_db);
        print "</pre>";
    }

?>