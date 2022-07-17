<?php

trait Validations {

    public function isValid($str) {
        if(strlen($str) <= 2 || !is_string($str)) {
            throw new Exception("Il testo inserito non è valido");
            
        }
    }
}