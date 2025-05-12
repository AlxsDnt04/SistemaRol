<?php

class database{
    public static function connect(){
        return new PDO('mysql:host=localhost;dbname=departamento', 'root', '');
    }
}
?>