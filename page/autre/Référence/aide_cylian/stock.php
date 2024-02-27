<html>
 <head>
		<meta charset="UTF-8" />
		<link rel ="stylesheet" href="stock.css"/>

		<title>L'article a bien été enregistré !</title>
 </head>
 <body>
     <?php
// on se connecte à notre base
$base = @mysql_connect ('localhost', 'root', 'root');
mysql_select_db ('entreprise', $base) ;
?>

     <h1>Voici les informations concernant l'article enregistré :</h1>
	 <div class="art">
     <?php 
	$Id_article = $POST["id_articles"];
	 
	$sqlstock =mysql_query( "SELECT stock_article FROM articles WHERE id_articles='$Id_article'");
	$sqlarticle =mysql_query( "SELECT Nom_article FROM articles WHERE id_articles='$Id_article'");
	while($tab_item= mysql_fetch_array($sqlstock)){
		$sqlstock=$tab_item[0];
		}
	while($tab_item= mysql_fetch_array($sqlarticle)){
		$sqlarticle=$tab_item[0];
		}
	?>
	      <?php echo "ID de l'article : " , $POST['id_articles'] ;?>
	 </br>
	      <?php echo "nom de l'article : " ;
	 echo "$sqlarticle";?> </br>
	      <?php echo "Stock restant de l'article :"; 
	 echo "$sqlstock"?> </br>
	 </br>

	 </div>

 </body>
</html>
