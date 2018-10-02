<?php
require_once "codb.php";

class Requete extends Connexion {

    public function test3() {
        
        $this->connect();
        $req = $this->bdd->prepare("SELECT nom, prenom, mail, motdepasse FROM pageco WHERE id_user = 1");
        $req->execute();
        $recup = $req->fetch(PDO::FETCH_NUM);
        return $recup;
    }
}

?>