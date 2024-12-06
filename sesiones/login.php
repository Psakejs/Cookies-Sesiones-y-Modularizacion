<?php 
session_start();

$users=[
    [   
        'user'=>1,
        'password'=>'admin',
        'name'=>'admin 🐳'
    ],
    [
        'user'=>2,
        'password'=>'user',
        'name'=>'user 💩'
    ]
];


$user=$_GET['user'] ?? "";

echo "hello ".$users[$user]['name'];

$_SESSION['id']=$user;
$_SESSION['name']=$users[$user]['name'];


echo "<pre>";
print_r($_SESSION);
echo "</pre>";