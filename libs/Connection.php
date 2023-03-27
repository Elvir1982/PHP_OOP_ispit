<?php
namespace Core;
use PDO;

class Connection extends PDO{
    private static ?PDO $instance=null;
    
    private function __construct($dns,$user,$password){
        
    }

    public static function getInstance($dns,$user,$password):PDO {
        if (self::$instance==null){
            self::$instance=new PDO($dns,$user,$password);
        }
        return self::$instance; 
    }
}


?>