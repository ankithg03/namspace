<?php
namespace ankith;
use \PDO;
class p2 {
    public function connect(){
      try {
       $pdo = new \PDO("mysql:host=localhost;dbname=mvcSampleDB;charset=utf8","ankith","root");
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (\Throwable $th) {
          echo("SOMETHING WENT WRONG");
      }
    }
      public function query($query){
        $statement=$this->connect()->prepare($query);
        $statement->execute($params);
       if(explode(' ',$query)[0] == 'SELECT'){
           $data=$statement->fetchAll();
            return $data; 
        }
    }  
}