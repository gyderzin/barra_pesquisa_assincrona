<?php

namespace App;

class Connection {
    
    public static function getDB() {    
        try{
            $conexao = new \PDO (
                "mysql:host=localhost;dbname=test;charset=utf8",
                'root', 
                '');    
            return $conexao;
        }
        catch(\PDOException $e) {
            // .....
        }

    }
}
   
?>