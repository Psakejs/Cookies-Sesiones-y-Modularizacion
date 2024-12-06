<?php 

$page= $_GET["page"] ?? null;

switch ($page) {
    case "home":
        require_once "./pages/home.php";
        break;
    case "services":
        require_once "./pages/services.php";
        break;
    case "contact":
        require_once "./pages/contact.php";
        break;
    default:
        require_once "./pages/home.php";
        break;
}