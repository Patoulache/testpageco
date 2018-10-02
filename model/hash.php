<?php

class HashPass {

    public function test1($smth) {
        $hashVar = password_hash($smth, PASSWORD_DEFAULT);
        return $hashVar;
    }
}

?>