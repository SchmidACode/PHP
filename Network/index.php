<?php 
$src_filename = __DIR__ . "/files/201 RAW.txt";

// Открытие файла для чтения
$handle = fopen($src_filename, 'r');
$content = file($src_filename);
fclose($handle);

// Создание '201 ready.txt'
$dst_filename = __DIR__ . '/files/201 ready.txt';
$dst_file = fopen($dst_filename, 'w');

// Создание '201.dhcpd'
$dhcpd_filename = __DIR__ . '/files/201.dhcpd';
$dhcpd_file = fopen($dhcpd_filename, 'w');

foreach ($content as $line) {
    // Разделение данных на IP и MAC | на любое кол-во пробелов \s+
    $IPandMACs = preg_split('/\s+/', $line);
    
    // Запись '201 ready.txt'
    $string_to_write = $IPandMACs[1] . "        " . $IPandMACs[0];
    fwrite($dst_file, $string_to_write . PHP_EOL);

    // Запись '201.dhcpd' в формате DHCP
    $dhcpd_string = "host " . $IPandMACs[1] . " { hardware ethernet " . $IPandMACs[0] . "; }\n";
    fwrite($dhcpd_file, $dhcpd_string);
}

fclose($dst_file);
fclose($dhcpd_file);

// Вывод содержимого файла '201 ready.txt' в виде таблицы
$handle = fopen($dst_filename, 'r');
$lines = array_values(file($dst_filename));

echo '<table border="1">';
echo '<tr><th>MAC address</th><th>IP address</th></tr>';
foreach ($lines as $line) {
    $IPandMACs = preg_split('/\s+/', $line);
    echo '<tr><td>' . $IPandMACs[1] . '</td><td>' . $IPandMACs[0] . '</td></tr>';
}
echo '</table>';
fclose($handle);

// 4. Работа с изображением
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $uploaded_image_name = $_FILES['image']['name'];
    $uploaded_image_tmp_name = $_FILES['image']['tmp_name'];
    $destination = __DIR__ . "/files/" . $uploaded_image_name;
    // Перемещаем файл в нужную директорию
    if (move_uploaded_file($uploaded_image_tmp_name, $destination)) {
        // Выводим картинку
        echo '<img src="/files/' . $uploaded_image_name . ' " alt="Uploaded Image">';
    } else {
        echo "<p>Ошибка при загрузке изображения</p>";
    }
}

//required
?>
 
<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Загрузить картинку: </label>
    <input type="file" name="image" id="image">
    <input type="submit" value="Загрузить файл">
</form>