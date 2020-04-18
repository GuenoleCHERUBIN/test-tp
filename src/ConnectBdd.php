<?php
namespace App\src;

 use PDO;
 use PDOException;

 class ConnectBdd
 {
     private $host = "127.0.0.1:3306";
     private $user = "root";
     private $pass = "root";
     private $dbname = "testdb";
     public $db = "null";

     public function connect()
     {
         try {
             $this->db = new PDO('mysql:host='. $this->host .';dbname='. $this->dbname .';charset=utf8', $this->user , $this->pass);
         } catch (PDOException $e) {
             die('Erreur : ' . $e->getMessage());
         }
         return 0 ;
     }

     public function fetchAll($query)
     {
         $sth = $this->db->prepare($query);
         $sth->execute();
         $result = $sth->fetchALL();

         return $result ;
     }
 }

 ?>