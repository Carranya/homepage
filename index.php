<DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wdth, initial-scale=1.0">
    <title>Karin Giang - Webentwicklerin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="head">
        Karin Giang - Webentwicklerin
</div>

<div id="main">

    <div id="menu">
        <p>
        <a href="index.php">Home</a><br>
        <a href="index.php?page=websites">Webseiten</a><br>
        <a href="index.php?page=about">Über mich</a><br>
        <a href="index.php?page=contact">Kontakt</a><br>
    </div>

    <div id="content">
        <?php

    require_once("function.php");
    
    if(isset($_GET['page'])){
        pages($_GET['page']);
    }
    else{
        include "pages/home.php";
    }

        ?>
    </div>

</div>

<?php
    include "pages/foot.php";
?>

</body>
</html>
