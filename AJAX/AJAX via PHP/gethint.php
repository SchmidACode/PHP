<?php
$names = ['Alex', 'Max', 'Artem', 'Kirsan', 'Sagid', 'Andrew'];

$query = $_REQUEST['q'];
$hint = "";

if ($query != '') {
    $query = strtolower($query);
    foreach ($names as $name) {
        // Используем stristr для проверки на вхождение, но сравниваем с запросом
        if (stristr(strtolower($name), $query) !== false) {
            if ($hint === "")
                $hint = $name;
            else 
                $hint .= ", $name";
        }
    }
}

echo $hint === "" ? "No suggestions" : $hint;
?>
