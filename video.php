<!DOCTYPE html>
<head>
        <title>special gift</title>
        <link rel="stylesheet" href="mise_en_page_defaut.css">
        <link rel="stylesheet" href="page_reponse.css">
        <meta charset="UTF-8" />
</head>
<body>
    <header>The Taylor Swifft's website </header>
    <aside>This website is only made for the christmas's present of Taliaa.</aside>
    <nav>
        <a href="index.html"> Back to home page</a>
    </nav>
    <main>
        <?php
        $error = $date = "";
    
        ?>
        <p>The video has been test only on chrome,edge,firefox. It only works on chrome. Unecepted things can happen in another browner, and that's not my fault !!</p>
        <?php
        if (empty($_POST["video_1"])){
            $error = "a date is required";
            echo "<span>".$error."</span>";
          } else {
            $date =$_POST["video_1"];
            $format_date="/^(\d{2})\/(\d{2})\/(\d{4})$/";
            if (!preg_match($format_date,$date)) {
              $error = "Invalid date";
              echo "<span>".$error."</span>";
            }
            elseif ($date==="20/08/2006") {
                echo"<video width='640'height='360' controls><source src='video_taliaa.mp4' type='video/mp4'><source src='video_taliaa.webm' type='video/webm'></video>"."<p>You can download <a href='https://www.swisstransfer.com/d/9cb66d41-5e08-4ee6-9e7f-76dda68e2457'>here</a></p>";
            }
            else {
                echo"<video width='640'height='360' controls><source src='video_random.mp4' type='video/mp4'><source src='video_random.webm' type='video/webm'></video>"."<p>You can download <a href='https://www.swisstransfer.com/d/b5de466e-d772-451f-a8ca-5f624ad793d8'>here</a></p>";
            }
          }
         
        ?>
    <footer>
            <p id="null">Page non libre de droit</p>
                <nav>
                    <a href="https://www.taylorswift.com/"> her website</a> 
                    <a href="sitographie.html">All reference</a>
                </nav>
    </footer>
    </main>
</body>