<?php
require_once (dirname(__DIR__)."/model/hash.php");
require_once (dirname(__DIR__)."/model/check.php");
require_once (dirname(__DIR__)."/model/requete.php");

class Controller {

    private $nom;
    private $prenom;
    private $mail;
    private $pass;
    private $tbl1 = [];
    
    public function __construct() {

        $tutu;
        $this->nom = htmlspecialchars($_POST[0], ENT_QUOTES);
        $this->prenom = htmlspecialchars($_POST[1], ENT_QUOTES);
        $this->mail = htmlspecialchars($_POST[2], ENT_QUOTES);
        $this->pass = htmlspecialchars($_POST[3], ENT_QUOTES);
        array_push($this->tbl1, $this->nom, $this->prenom, $this->mail, $this->pass);
        $rep = $this->testReq();
        for ($i = 0; $i < count($rep); $i++) {
            $tutu = $this->testCheck($this->tbl1[$i], $rep[$i]);
        };
        if ($tutu == true) {
            echo "./vue/connecter.php";
        } else {
            echo "mauvais identifiants";
        }
    }

    private function testHash($var) {
        $testHash = new HashPass();
        $bouh = $testHash->test1($var);
        return $bouh;
    }

    private function testCheck($var1, $var2) {
        $testCheck = new Check();
        $champi = $testCheck->test2($var1, $var2);
        return $testCheck;
    }

    private function testReq() {
        $testReq = new Requete();
        $tata = $testReq->test3();
        return $tata;
    }
};

$tata = new Controller();

?>