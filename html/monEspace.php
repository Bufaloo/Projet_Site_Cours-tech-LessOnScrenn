<!DOCTYPE html>
<html>
<head>
    <title>Mon espace - LessOnScreen</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/MonEspace.css" />
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">

</head>
<body>
<?php
 

    if (!isset($_COOKIE['adresseMail'])) {
        $host  = $_SERVER['HTTP_HOST'];
                    $uri   = "/Projet/html";//rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $extra = 'MonEspaceEchec.php';

                    header("Location: http://$host$uri/$extra");
                    exit;
    } 

       
    else {
        $host  = $_SERVER['HTTP_HOST'];
                    $uri   = "/Projet/html";//rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $extra = 'monEspaceVrai.php';
                     
                    header("Location: http://$host$uri/$extra");
                    exit;
                }

?>
