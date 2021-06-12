<?php 
$relativePath = $_SERVER['REQUEST_URI'];
$relativePathArray = explode('/', $relativePath);
$rootPath = '/'.$relativePathArray[1];
$webPath = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$rootPath;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$rootPath."/css/style.css"?>" />
    <script src="<?= $rootPath."/js/main.js"?> "></script>
    <title>rs</title>
</head>
<body>
    <nav id="menu">
        <img src="<?= $rootPath."/assets/img/logo.png"?>" alt="" height="50">
        <ul>
            <li><a href="<?= $webPath."/index.php?page=inscription"?>">inscription</a></li>
            <li><a href="<?= $webPath."/index.php?page=connexion"?>">connexion</a></li>
        </ul>
    </nav>