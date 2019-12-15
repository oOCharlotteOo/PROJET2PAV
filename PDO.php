<?php

 class BDD extends PDO
 {
     Private static $DB;

     public function __construct()
     {
         $DB_DSN = 'mysql:host =localhost;dbname=pav';
         $DB_USER = 'root';
         $DB_PASS = '';

         try {
             $option =
                 [
                     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                     PDO::ATTR_EMULATE_PREPARES => false];
             self::$DB = new PDO($DB_DSN, $DB_USER, $DB_PASS, $option);
         } catch (PDOException $pe) {
             echo 'ERREUR : ' . $pe->getMessage();
         }

     }


     Public function Read_Query($query, $paramtab = '') //ramène les résultats de plusieurs lignes
     {

         $rq = self::$DB->prepare($query);
         if (!empty($paramtab)) {
             foreach ($paramtab as $para) {

                 $rq->bindParam($para[0], $para[1]);
             }
         }
         $rq->execute();

         $rq->setFetchMode(PDO::FETCH_OBJ);
         $res = $rq->fetchAll();;
         return $res;
         $rq->closeCursor();
     }

     Public function Read_Queryone($query, $paramtab = '') //ramène les résultats d'une seule ligne
     {
         echo 'rq 1';
         $rq = self::$DB->prepare($query);
         if (!empty($paramtab))
             echo 'PAR 1';
         {
             foreach ($paramtab as $para) {
                 echo 'PAR 2';
                 $rq->bindParam($para[0], $para[1]);
             }
         }

         echo 'rq 2';
         $rq->execute();
         echo 'rq 3';
         $rq->setFetchMode(PDO::FETCH_OBJ);
         echo 'rq 4';
         $res = $rq->fetch();;
         return $res;
         $rq->closeCursor();
     }

     Public function Exec_Query($query, $paramtab = '')
     {

         $rq = self::$DB->prepare($query);
         if (!empty($paramtab)) {
             foreach ($paramtab as $para) {

                 $rq->bindParam($para[0], $para[1]);
             }
         }
         $rq->execute();


     }
 }



