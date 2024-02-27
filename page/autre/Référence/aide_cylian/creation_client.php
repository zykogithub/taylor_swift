<DOCTYPE HTML>
<html>
 <head>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="css_client.css"/>
		<link rel="icon" type="image/jpg" href="alibobo2.png"/>

		<title>Le client a bien été enregistré !</title>
 </head>
 <body>
 <h1>Bonjour "Nom_client" </h1>
 <fieldset  style="width:250px;margin-left: auto;margin-right: auto;">
     <?php
            echo "Nom du client : " .$_POST['Nom_client'].'<br>';
            echo "Mail du client : " .$_POST['Mail_client'].'<br>';
            echo "Mot de passe du client : ".$_POST['Mdp_client'].'<br>';
        ?>
</fieldset>
<button onclick="window.location.href = 'site_acceuil.html';">Acceuil</button>
</br></br>






<?php
$servername="localhost";
$user="root";
$password="root";
$dbname="entreprise";

try {
     $base = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

     // définir le mode exception d'erreur PDO 
     $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     $sql = "INSERT INTO `client` ( `Nom_client` , `Mail_client` , `Mdp_client`)
   VALUES( ' $_POST[Nom_client]',' $_POST[Mail_client]','$_POST[Mdp_client]')";

   // Récupération de l'adresse e-mail à vérifier
  $email = $_POST["Mail_client"];

  // Requête SQL pour vérifier si l'adresse e-mail existe déjà dans la base de données
  $query = $base->prepare("SELECT * FROM Client WHERE Mail_client = ':$email'");
  $query->execute(array('Mail_client' => $email));

  // Si l'adresse e-mail existe déjà, rediriger l'utilisateur vers une page HTML spécifique
  if ($query->rowCount() > 0) {
    header('Location: erreur.html');
    exit;
  }

     // utiliser la fonction exec() car aucun résultat n'est renvoyé
     $base->exec($sql);
   } catch(PDOException $e) {
     echo $sql . "<br>" . $e->getMessage();
   }
   $base = null;
   
   ?>


 </body>
</html>