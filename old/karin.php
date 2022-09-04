<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <style>
        body{
        font-family: 'Open Sans', sans-serif;
        background-color: #EAEBF8;
        margin: 0;
        }
        
        .footer{
            text-align: center;
            padding: 100px;
            margin: 300px;
        }
    
        .main {
            display: flex;
        }

        .menue {
            width: 20%;
            background-color: #746CF5;
            padding-top: 150px;
            height: 100vh;
        }

        .menue a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 8px;
            display: flex;
            align-items: center;
            
        }

        .menue img{
            margin: 8px;
        }

        .menue a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .content{
            width: 80%;
            margin-top: 150px;
            margin-right: 80px;
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.1);
        }

        .menubar{
            background-color: white;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 80px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
            padding-left: 50px;
            display: flex;
            justify-content: space-between;
        }

        .avatar{
            border-radius: 100%;
            background-color: yellowgreen;
            width: 16px;
            height: 16px;
            padding: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
            }

        .myname{
            display: flex;
            margin-right: 50px;
            align-items: center;
        }



    </style>
</head>


<body>

<div class="menubar">
    <h1>Meine Geschichten</h1>
    <div class="myname">
    <div class="avatar">KG</div>
    Karin Giang
    </div>
    </div>

<div class="main">

    <div class="menue">
        <a href="Index.php?page=start"><img src="img/home.png">Start</a>
        <a href="Index.php?page=contacts"><img src="img/book.png">Kontakte</a>
        <a href="Index.php?page=legal"><img src="img/legal.png">Impressum</a>
        <a href="Index.php?page=addcontact"><img src="img/add.png">Kontakte hinzufügen</a>
        <a href="Index.php?page=wheelchair"><img src="img/wheelchair.png">Rollstuhl Geschichten</a>
    </div>

    <div class="content">
        <?php

        $headline = "Herzlich Willkommen!";
        $contacts = [];

        if(file_exists('contacts.txt')){
            $text = file_get_contents('contacts.txt', true);
            $contacts = json_decode($text);
        }

        if(isset($_POST['name']) && isset($_POST['phone'])){
            echo 'Kontakt <b>' . $_POST['name'] . '</b> wurde hinzugefügt';
            $newContact = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone']
            ];
            array_push($contacts, $newContact);
            file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
        
        }

        if($_GET['page'] == 'contacts'){
        $headline = "Kontakte";
        }

        if($_GET['page'] == 'legal'){
        $headline = "Impressum";
        }

        if($_GET['page'] == 'addcontact'){
        $headline = "Kontakte hinzufügen";
        }

        if($_GET['page'] == 'wheelchair'){
        $headline = "Rollstuhl Geschichten";
        }

            echo '<h1>'.$headline.'</h1>';

        if($_GET['page'] == 'contacts'){
            echo "Das ist die <b>Kontaktseite</b>";
        }else if($_GET['page'] == 'legal'){
            echo "Das ist die <b>Impressumseite</b>";
        }else if($_GET['page'] == 'addcontact'){
            echo "
            
            <div>
                Hier kannst du <b>Kontakte</b> hinzufügen
            </div>

            <form action='?page=contacts' method='POST'>
            <div>
                <input placeholder='Namen eingeben' name='name'>
            </div>

            <div>
                <input placeholder='Telefonnummer eingeben' name='phone'>
            </div>

            <div>
                <button type='submit'>Absenden</button>
            </div>
            </form>
            ";



        }else if($_GET['page'] == 'wheelchair'){
            echo "Meine <b>Rollstuhlgeschichten</b>";
        }else
             echo "Das ist die <b>Startseite</b>.";

        ?>
    </div>
    
    <div class="footer">
        Copyright 2022
    </div>


</div>
</body>
</html>