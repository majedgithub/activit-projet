<?php

function connect(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=livrebd','root','');
        return $bdd;

    }catch(PDOException $e){
        echo "erreur conncetion";
        return null;
    }
}