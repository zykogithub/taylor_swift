<html>
 <head>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="style_site.css"/>


		<title>L'article a bien été enregistré !</title>
 </head>
 <body>
 <h1>Voici les informations concernant l'article enregistré :</h1>
 <fieldset  style="width:250px;margin-left: auto;margin-right: auto;">
     <?php echo "Nom de l'article : " . $_POST['Nom_article']; ?></br>
     <?php echo "Stock : ". $_POST['stock_article']; ?></br>
     <?php echo "Prix de l'achat : " . $_POST['prix_article']; ?></br>
     <?php echo "Prix de vente : "  . $_POST['prix_vente']; ?> </br>
     <!--<?php echo "Image : ". $_POST['image'];?> </br>-->
     <button onclick="window.location.href = 'site_acceuil.html';">Acceuil</button>
</fieldset>
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
     
     $sql = "INSERT INTO `articles` ( `Nom_article`, `stock_article`, `prix_article`, `prix_vente`)
   VALUES( '$_POST[Nom_article]','$_POST[stock_article]','$_POST[prix_article]','$_POST[prix_vente]')
   ";
     // utiliser la fonction exec() car aucun résultat n'est renvoyé
     $base->exec($sql);
   } catch(PDOException $e) {
     echo $sql . "<br>" . $e->getMessage();
   }
   $base = null;
   
   ?>
<?php
  $host = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'entreprise';
    
  $conn = mysqli_connect($host ,$username, $password, $dbname); 

  if (!$conn){
    die("Connexion interrompue : ".mysqli_connect_error());
  }

  // récupération de tous les articles

  $sql ="SELECT * FROM articles";
  $result=mysqli_query($conn,$sql);
  
  echo "<table>";
  echo "<tr>";
  echo "<th>_____Nom_article _____</th>";
  echo "<th>Stock_article _____</th>";
  echo "<th>prix_article _____</th>";
  echo "<th>prix_vente_____</th>";
  echo "</tr>";


  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Nom_article"]. "</td>";
        echo "<td>" . $row["stock_article"]. "</td>";
        echo "<td>" . $row["prix_article"]. "</td>";
        echo "<td>" . $row["prix_vente"]. "</td>";
        echo "</tr>";
      }
    } else {
        echo "0 results";
    }
    
    echo "</table>";
    
    mysqli_close($conn);
?>

<?php
$Nom = $_POST['Nom_article'];
$Stock = intval($_POST['stock_article']);
$Revient = $_POST['prix_article'];
$Vente = $_POST['prix_vente'];

?>

 </body>
</html>
