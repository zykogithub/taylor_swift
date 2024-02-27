<!DOCTYPE html>
<html>
<head>
    <title>Affichage des informations d'achat</title>
</head>
<body>
    <h1>Informations d'achat</h1>
    <p>
        <?php
        if(isset($_POST['nom']) && isset($_POST['produit']) && isset($_POST['prix'])){
            $nom = $_POST['nom'];
            $produit = $_POST['produit'];
            $prix = $_POST['prix'];

            echo "Nom : " . $nom . "<br>";
            echo "Produit : " . $produit . "<br>";
            echo "Prix : " . $prix . "<br>";
        }
        ?>
    </p>
</body>
</html>