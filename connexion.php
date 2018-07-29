<?php

function connect(){
    try{
        // $bdd = new PDO('mysql:host=localhost;dbname=formationbd','root','');
        return $bdd;

    }catch(PDOException $e){
        echo "erreur conncetion";
        return null;
    }
}