<?php include "./header.php"  ?>
<?php

// fonction qui font des operations.
function affiche_bonjour( string $prenom, string $nom){
    echo "bonjour ".$prenom." ".$nom."";
    echo "<hr>";
  } 
  affiche_bonjour("Yoel","Melki");
  affiche_bonjour("Deezy","avecunnom");
  affiche_bonjour("Greta","Bula");
  affiche_bonjour("Airje","Aymane");
  


?>
<?php include "./footer.php"  ?>