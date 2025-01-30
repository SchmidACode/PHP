<?PHP

    $title = 'Arrays';

    $array0 = [];
    $array1 = array(3,5,8,13,21);
    $array1["14.13"] = 12;

    $array2 = [34, 55, 89, 144];


    $distance_to_sun = 
    [
        'Mercury' => 46000000,
        'Venus' => 108000000,
        'Earth' => 149000000
    ];

    $array2D =
    [
        [0,1,1,2],
        [3,4,8,13,21],
        [100, 22, 1]
    ];

    function print_array($array)
    {
        echo '<pre>';
        for($i=0;$i<count($array);$i++){
            echo "$array[$i]\t";
        }
        echo '</pre>';
    }

    function print_array_pre($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    require 'index.view.php';
?>