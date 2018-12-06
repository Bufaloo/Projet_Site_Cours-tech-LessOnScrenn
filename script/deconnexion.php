<?php
session_start();
session_destroy();
$host  = $_SERVER['HTTP_HOST'];
                    $uri   = "/Projet/html";//rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $extra = 'inscription.php';
                    
                    setcookie('adresseMail', "", time() + 3600, "/", "localhost", false, true); 

                    header("Location: http://$host$uri/$extra");
                    exit;

?>