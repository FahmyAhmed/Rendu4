<?php

function my_password_hash(string $password){

    $password = "Fahmy";
    $salt = uniqid();
    $hash = md5($password. $salt);
    
return [
    "hash" => $hash,
    "salt" => $salt,
];
    echo $hash;
};    

var_dump(my_password_hash("coucou"));