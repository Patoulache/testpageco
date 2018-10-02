<?php

class Check {


    public function test2($str, $hash) {
        $checkedVar = password_verify($str, $hash);
        return $checkedVar;
    }
}

?>