<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apprendre php</title>

</head>
<body>
    <?php
    // phpinfo() // afficher les informations sur php
    echo "<h1>Hello World</h1>";
    $str = "motdepasse";
    $y=123;
    echo PHP_INT_MAX; // Affiche une chaîne de 32 caractères hexadécimaux
    echo "<br>";
    echo PHP_INT_SIZE; // Affiche la taille d'un entier en octets
    echo "<br>";
    echo var_dump(is_int($str)); // Vérifie si une variable est un entier
    echo var_dump(is_int($y)); // Vérifie si une variable est un entier
    if (is_int($y)) {
        echo "$y est un entier";
    } else {
        echo "$y n'est pas un entier";
    }
    // integer , real, string
    //null , object, array
    // $x=123.34;
    // echo "value of x : $x";
    // echo "<br>";
    // var_dump($x);
    // $y="salam mariem";
    // echo "value of y : $y";
    // echo "<br>";
    // var_dump($y);
    // echo "<br>";
    // echo "La longueur de cette chaine de caractère est : ".strlen($y);
    
    // $z=array("MBW","FIAT","Golf");
    // echo "$z";
    // echo "<br>";
    // echo $z[1];
    // echo "<br>";
    // var_dump($z);
        
    ?>
    
</body>
</html>