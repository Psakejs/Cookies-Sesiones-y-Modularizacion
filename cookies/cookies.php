<?php

if(!isset($_COOKIE["example_cookie"])){
    setcookie(
        name:"example_cookie",
        value:"Un 🐶",
        expires_or_options: time() + (40 * 30),
        path: "/",
        domain: "",
        secure: false,
        httponly: true
    );
    
    echo "Cookie set successfully 🤖";
    exit;
}

echo "Cookie already set 🤖";

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";