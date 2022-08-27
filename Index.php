<DOCTYPE html>
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
        <a href="Index.php">Home</a><br>
        <a href="Index.php?page=past">Karriere</a><br>
        <a href="Index.php?page=project">Projekte</a><br>
        <a href="Index.php?page=cv">Lebenslauf</a><br>
        <a href="Index.php?page=about">Über mich</a><br>
        <a href="Index.php?page=contact">Kontakt</a><br>
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
                include "pages/project.php";

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
