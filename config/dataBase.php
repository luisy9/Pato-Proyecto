<?php
    class DataBase {
        public static function connect($host='localhost',$user='root',$pwd='',$db='luisdeharo4'){
            
            $conec = new mysqli($host,$user,$pwd,$db);
            
            if($conec === false){
                die("ERROR: Could not connect. " . $conec->connect_error);
            }
            return $conec;
        }
    }
