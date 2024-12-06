<?php

setcookie(
    name:"subdomain_cookie",
    value:"solo esta disponible en /configuracion 🦢",
    expires_or_options:time() + 60 * 60 * 24,
    path:"/cookies/configuracion/",
    domain:"localhost",
    secure:false,
    httponly:false
);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";