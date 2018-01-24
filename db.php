<?php
    define("DBNAME",'id4006609_zee');
    define("DBUSER", 'root');
    define("DBPASS", '');

        try{

          $conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);
              #SET verbose error mb_encoding_aliases
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        } catch(PDOException $e) {
                echo $e->getMessage();

        }
