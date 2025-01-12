
<?php
echo "<strong>Manipulation des opérateurs arithmétiques : </strong>\n";
$nombre_1 = (int)readline("Donner le premier nombre : ");
$nombre_2 = (int)readline("Donner le second nombre : ");
//$nombre_1= 16;
//$nombre_2=5;
$somme=$nombre_1 + $nombre_2;
$difference=$nombre_1 - $nombre_2;
$produit=$nombre_1 * $nombre_2;
$quotient=$nombre_1 / $nombre_2;
$reste=$nombre_1 % $nombre_2;
echo "Premier nombre : $nombre_1\n";
echo "Second nombre : $nombre_2\n";
echo "Somme : $somme\n";
echo "Différence : $difference\n";
echo "Produit : $produit\n";
echo "Quotient : $quotient\n";
echo "Reste : $reste\n";
echo "<strong>Manipulation des opérateurs arithmétiques : </strong><br><br>";
?>  

