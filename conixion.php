<?php 
    try {
        $con = new PDO("mysql:host=localhost;dbname=prakritirecords", "localhost", "6f^NG#7U7@(e@0Z=");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
       catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>