<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta chqarset="utf-8" />
    <title><?= $title ?></title>
</head>
<body>
    <h2><?= $title?></h2>
    
    <!--
    <?php
       [$a, $b] = [2,3];
       print_values($a, $b);
       exchange($a, $b);
       print_values($a, $b);

       $array = array();
       //FillArr($array, maxRand:1000);
       //FillArr(maxRand:1000, $array);
       PrintArr($array);
       echo '<pre>';
	   print_r($_SERVER);
       $_GET;
       $_POST;
       $_COOKIE;
       $_FILES;
       $_ENV;

       echo increment() . "\n";
       echo increment() . "\n";
       echo increment() . "\n";
       echo increment() . "\n";

       echo '</pre>';

    ?>
    -->

    <?php
        echo sum((int)2.7 + (int)3.14);
    ?>

</body>
</html>