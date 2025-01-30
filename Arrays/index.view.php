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
        echo '<hr>';
        for($i=0;$i<count($array1);$i++){
            echo "$array1[$i]\t";
        }
        echo '<hr>';
    ?>
    <pre>
    <?=
        var_dump($array1);
        $array1[] = 233;
        unset($array1[4]);
        echo '<hr>';
        print_r($array1);

        echo '<hr>';
        foreach($array1 as $iterator)
        {
            echo "$iterator\t";
        }
        echo '<hr>';
        foreach($array1 as $key => $value)
        {
            echo "array1[$key]:\t$value;\n";
        }
        echo '<hr>';
    ?>
    </pre>
    <pre>
    <?=
        print_r($distance_to_sun)
    ?>
    </pre>
    <hr>
    <pre>
    <?php
        //print_r($array2D);
        
        foreach($array2D as $iterator){
            foreach($iterator as $iterator)
                echo "$iterator\t";
            echo '<br>';
        }
    ?>
    </pre>
    -->

    
    <?php
        array_unshift($array1, 2); // добавляет элемент в начало
        $array1[] = 340; // добавляет элемент
        array_push($array1, 550); // добавляет элемент
        print_array($array1);
        $keys = array_keys($array1);
        print_array($keys);
        echo array_key_exists(5, $array1);
        echo in_array('14.13', $array1);

        array_pop($array1); // удаляет элемент
        array_shift($array1); // удаляет элемент

        print_array($array1);
        echo '<hr>';
        $array0 = array_merge($array1, $array2); // Соединенные массивы
        print_array($array0);
        echo '<hr>';
        $array_spread = [...$array1, ...$array2];
        print_array($array_spread);

    ?>
    <h3>Arrays and viriables</h3>
    <?php
        list(
        'Mercury' => $Mercury,
        'Venus'   => $Venus,
        'Earth'   => $Earth
        ) = $distance_to_sun;

        [$zero, $first, $second, $third] = $array1;
        echo "$zero<br>";
        echo "$first<br>";
        echo "$second<br>";
        echo "$third<br>";
    ?>

    <?PHP
       rsort($array_spread);
       print_array($array_spread);
    ?>

</body>
</html>