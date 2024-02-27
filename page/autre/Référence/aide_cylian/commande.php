<html>
 <head>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="commande.css"/>

		<title>La commande a bien été enregistré !</title>
 </head>
 <body>


     <?php
	 $servername="localhost";
	 $user="root";
	 $password="root";
	 $dbname="entreprise";
// on se connecte à notre base
$base = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


     <h1>Voici les informations concernant la commande enregistré :</h1>
	 <div class="art">


     <?php
		$Id_client =  $_POST['id_client'];
		$Id_articles = $_POST['id_articles'];
		$sqlnom =$base->prepare( "SELECT Nom_Client FROM Client WHERE id_client='$Id_client'");
		$sqlarticle =$base->prepare( "SELECT Nom_article FROM articles WHERE id_article='$Id_articles'");
		while($tab_item= $sqlnom->fetch()){
			$sqlnom=$tab_item[0];
			}
		while($tab_item= $sqlarticle->fetch()){
			$sqlarticle=$tab_item[0];
			}
		echo "Bonjour, "; 
		echo "$sqlnom " ;
		echo ",vous avez commandé cet article: ";
		echo "$sqlarticle" ;
			

$Id_client = ( $_POST['id_client']);
$Id_articles = ($_POST['id_articles']);
date_default_timezone_set('CET');
$Date = date('Y-m-d', time());
$prix2=$base->prepare("SELECT prix_article FROM articles WHERE id_articles='$Id_articles' ");
while($tab_item= mysql_fetch_array($prix2)){
	$prix4=$tab_item[0];
}
$sql = "INSERT INTO Commande (id_client,id_articles,date,Argent) VALUES ('$Id_client','$Id_articles','$Date','$prix4')";
//mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
$sql2 = "UPDATE articles SET stock_article= (stock_article)-1 WHERE id_articles = '$Id_articles'";
//mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br />'.mysql_error());
$base = null;
?>
		
 </body>
</html>
