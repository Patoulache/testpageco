<?php

  class Connexion {

    protected  $bdd;

    protected function connect() {
      
      try { $this->bdd = new PDO("mysql:host=localhost;dbname=testpanel;charset=utf8", 'root', 'coda2018',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      //  echo "connexion réussi";  
    } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
      
    }

  }


  ?>