<!DOCTYPE html>
<html>
    <head>
        <title>page reponse</title>
        <link rel="stylesheet" href="mise_en_page_defaut.css">
        <link rel="stylesheet" href="page_reponse.css">
        <meta charset="UTF-8" />
    </head>
<body>
<main>
    <header>The Taylor Swifft's website </header>
    <aside>This website is only made for the christmas's present of Taliaa.</aside>
    <nav>
        <a href="index.html"> Back to home page</a>
    </nav>
    <?php
    $nb_point=0;
    
    error_reporting(0);
    $bonne_reponse_1=$_POST["proposition_1"];
    $bonne_reponse_2=$_POST["proposition_2"];
    $bonne_reponse_3=$_POST["proposition_3"];
    $bonne_reponse_4=$_POST["proposition_4"];
    $bonne_reponse_5=$_POST["proposition_5"];
    $bonne_reponse_6=$_POST["proposition_6"];
    $bonne_reponse_7=$_POST["proposition_7"];
    $bonne_reponse_8=$_POST["proposition_8"];
    $bonne_reponse_9=$_POST["proposition_9"];
    $bonne_reponse_10=$_POST["proposition_10"];
        
            if ($bonne_reponse_1 === "vraie_1") {
                $nb_point+=2;
            }
            if ($bonne_reponse_2 === "vraie_2") {
                $nb_point+=2;
            }
            if ($bonne_reponse_3 === "vraie_3") {
                $nb_point+=2;
            }
            if ($bonne_reponse_4 === "vraie_4") {
                $nb_point+=2;
            }
            if ($bonne_reponse_5 === "vraie_5") {
                $nb_point+=2;
            }
            if ($bonne_reponse_6 === "vraie_6") {
                $nb_point+=2;
            }
            if ($bonne_reponse_7 === "vraie_7") {
                $nb_point+=2;
            }
            if ($bonne_reponse_8 === "vraie_8") {
                $nb_point+=2;
            }
            if ($bonne_reponse_9 === "vraie_9") {
                $nb_point+=2;
            }
            if ($bonne_reponse_10 === "vraie_10") {
                $nb_point+=2;
            }
        

    $nb_point=20;        

    if ($nb_point  ===  20) {
          ?>
          <form  action='video.php' method='post' >
            <input id='video' type = 'password' placeholder="form : DD/MM/YYYY" name='video_1'><label for='video'>Type your date of birth here </label><br>
            <input type='submit'>
            <input type='reset'>
          </form>
        <?php
        echo "<h1 id = 'parfait'>Perfect" . "\n You're mark is : ". $nb_point . "on 20";
        echo"<img src='image_20_sur_20.gif'>";
    }
    elseif ($nb_point >= 15) {
        echo "<h1 id = 'presque'>Almsot but not perfect. You miss some song I think". "\nYou're mark is : ". $nb_point . "on 20";
        echo"<img src='presque.gif'>";
    }
    elseif ($nb_point >= 10) {
        echo "<h1 id = 'moyenne'>You are average, Be happy because the majority of people haven't average like you" . "\n You're mark is : ". $nb_point . "on 20";
        echo"<img src='moyenne.gif'>";
    }
    elseif ($nb_point >= 5) {
        echo "<h1 id = 'interessant'>Intresing, you know some classics but there are a few classic on this blind-test" . "\n You're mark is : ". $nb_point . "on 20";
        echo"<img src='interressant.gif'>";
    }
    elseif ($nb_point < 5 && $nb_point > 1) {
        echo "<h1 id = 'un_bon_debut'>A good beginning" . "\nYou're mark is : ". $nb_point . "on 20";
        echo"<img src='un_bon_debut.jpg'>";
    }
    elseif ($nb_point  ===  0) {
        
        echo"<h1 id = 'dommage'> Sadly, you have 0 good answer . Try again later" . "\n You're mark is : ". $nb_point . " on 20 ";
        echo"<img src='image_0_sur_20.jpg'>";

    }

    ?>
    </main>
    <footer>
            <p id="null">Page non libre de droit</p>
                <nav>
                    <a href="https://www.taylorswift.com/"> her website</a> 
                    <a href="sitographie.html">All reference</a>
                </nav>
    </footer>
 
</body>
</html>