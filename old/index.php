<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Karin's Homepage</title>
    <link rel="stylesheet" href="format.css">
</head>
<body>

<div class="head">
        Karin Giang
</div>

<div class="main">

    <div class="menu">
        <p>
        <a href="index.php">Home</a><br>
        <a href="index.php?page=past">Karriere</a><br>
        <a href="index.php?page=project">Projekte</a><br>
        <a href="index.php?page=cv">Lebenslauf</a><br>
        <a href="index.php?page=about">Über mich</a><br>
        <a href="index.php?page=contact">Kontakt</a><br>
    </div>

    <div class="content">
        <?php
    

        $headline = "Herzlich Willkommen";  
        $text = "";

        // Text Home
        for($i=1; $i<=500; $i++)
            {
            $text.= "Home ";
            }


        if(isset($_GET['page']))
        {

            if($_GET['page'] == 'past')
            {
                $headline = "Karriere";

                // Text Past
                $text = "";
                for($i=1; $i<=100; $i++)
                {
                   $text.= "Karriere ";
                }
            }

            if($_GET['page'] == 'project')
            {
                $headline = "Meine Projekte";

                //Text Project

                /* 
                 <a href='project/volki7.zip'><b><u>Voki 7</u></b></a><br>
                <p>Ein Programm zum Vokabular lernen.<br>
                200 Wörter deutsch/japanisch sind vorinstalliert.<br>
                Man kann auch eigene Listen erstellen.<br>
                <i>Hinweis: Es handelt sich um eine Alpha-Version. Es wird nicht mehr aktualisiert.</i>
                </p>

                <br>
                */

                $text = "";
                $text="<p>In meiner Freizeit programmiere ich sehr gerne.<br>
                Schon seit ich ein Kind war, interessiere ich mich für das Programmieren.<br>
                Bisher habe ich PYTHON, PERL, PHP, MySQL, HTML, CSS und Javascript angeeignet.
                <br><br>
                Klicken Sie auf den <b><u>Titel</u></b>, um die Programme herunter zu laden.<br>
                Zum Ausführen der Programme müssen Sie zuerst <b><a href='https://www.apachefriends.org/de/index.html'>XAMMP</a></b> installieren.
                </p>

                <h3>Meine aktuellen Projekte:</h3>

                <a href='project/voki.zip'><b><u>Voki (MySQL Version)</u></b></a><br>
                <p>Ein Programm zum Vokabular lernen.<br>
                200 Wörter deutsch/japanisch sowie Demo Version mit 20 Wörter deutsch/englisch sind vorinstalliert.<br>
                Weitere Wörter-Pakete folgen erscheinen in Kürze.<br>
                Zum Installieren, führen Sie bitte die Dateien installjap.php oder installengdemo.php aus.<br>
                <i>Aktuelle Version: 0.5</i>
                </p>
                
                <br>

                <a href='project/kopfrechnen.zip'><b><u>Kopfrechnen</u></b></a><br>
                <p>Ein Tool zum Kopfrechnen üben für Kinder und Erwachsene.<br>
                4 Stufen einstellbar.<br>
                <i>Aktuelle Version: 1.0</i>
                </p>

                <br>

                <h3>GitHub</h3>

                <p>Alle Codes von meinen Projekten sind in meiner <b><a href='https://github.com/Carranya'>GitHub Seite</a></b> einsehbar.</p>

                ";

            }

            if($_GET['page'] == 'cv')
            {
                $headline = "Lebenslauf";

                //Text cv
                $text = "";
                for($i=1; $i<=100; $i++)
                {
                   $text.= "Lebenslauf ";
                }
            }

            if($_GET['page'] == 'about')
            {
                $headline = "Über mich";

                //Text about
                $text = "";
                for($i=1; $i<=100; $i++)
                {
                   $text.= "about ";
                }
            }

            if($_GET['page'] == 'contact')
            {
                $headline = "Kontakt";

                //Text contact
                $text = "";
                for($i=1; $i<=100; $i++)
                {
                   $text.= "Kontakt ";
                }
            }
        }
        else
        {
            $_GET['page'] = "";
        }

        echo "<h2>" . $headline . "</h2>";
        echo $text;

        ?>
    </div>

</div>

<div class = "foot">
        <p>Last Update: 09. August 2022</p>
</div>


</body>
</html>
