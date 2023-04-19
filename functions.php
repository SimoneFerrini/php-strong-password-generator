<?php 
    function randomPSW($lenght){
        $password = [];
        $allChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*';
        for($i=0; $i < $lenght; $i++ ){
            $char = $allChar[rand(0,66)];
            $password[] = $char;
            }
        return implode($password);
    };