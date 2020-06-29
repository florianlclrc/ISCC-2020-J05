<html>
    <head>
        <title>PHP - EX_3</title>
    </head>

    <body>
        <?php
            $nom_produit = "T-shirt simple";
            $couleur = "Blanc";
            $prix = "10.50";
            $disponible = "true";
            $quantite = "10";
        ?>
    
     <h3>
        Le nom du produit est <?php echo $nom_produit ?>.
        <br>
        Il reste <?php echo $quantite ?> produits en stock.
        <br>
        Le produit <?php $nom_produit ?> est de couleur <?php echo $couleur ?>.
     </h3>

        <h4>
            Acheter 3 produits coûterait <?php echo $prix*3 ?>
            <br>
            Acheter la totalité des produits coûterait <?php echo $prix*$quantite ?>
            <br>
            Si trois produits sont vendus
        </h4>

        <p>
            <?php if ($disponible == "true") {
                echo ("Le produit " . $nom_produit . " est disponible en ligne.");
            } else {
                echo ("Le produit " . $nom_produit . " n'est malheureusement plus disponible.");
            } ?>
        </p> <br>
        <p>
            <?php if($quantite ==0) {
                echo ("Il ne reste plus de produits en magasin.");
            } else if($quantite ==1) {
                echo ("Il ne reste plus qu'un produit en magasin.");
            } else if ($quantite >=5) {
                echo ("Il reste $quantite produit en magasin.");
            } else if($quantite <=5) {
                echo ("Il ne reste plus que $quantite produit en magasin.");
            }
            ?>
        </p>
    </body>
</html>