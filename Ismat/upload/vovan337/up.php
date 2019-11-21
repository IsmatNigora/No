<?php
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.

$uploaddir = '/var/www/uploads/vovan337/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Загрузка файлов!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

//$res = $uploadfile;
 $res = file_get_contents($_FILES['userfile']['tmp_name']); 
 //Разбиваем на массив использую 
 //как разделитель символы переноса строки 
 $lines = explode("\n", $res);
 //В цикле выводим и нумеруем 
 //строки нашего документа
if(!empty($lines)){
//echo 'Не пустой 100% <br/>';
//Загружаем в SQL

 $delimiter=";";
 $column_names = explode($delimiter, $lines[0]);

    $base_query = "INSERT INTO animesquad.studentstmp";
    $base_query .= " (";
    $first      = true;
    foreach ($column_names as $column_name) {
        if ($first === false) {
            $base_query .= ", ";
        }
    $column_name = trim($column_name);
    $base_query .= "$column_name";
    $first = false;
    }

      $base_query .= ") ";
//echo "$base_query <br/>";
 $last_data_row = count($lines) - 1;

for ($counter = 1; $counter < $last_data_row; $counter++) {
        $value_query = "VALUES ('";
        $first = true;
        $data_row = explode($delimiter, $lines[$counter]);
        $value_counter = 0;
        foreach ($data_row as $data_value) {
            if ($first === false) {
                $value_query .= "', '";
            }
            $data_value = trim($data_value);
            $value_query .= "$data_value";
	    //echo"$data_value <br/>";
            $first = false;
        }
        $value_query .= "')";
        // Combine generated queries to generate final query
        $query = $base_query .$value_query . ";";
    echo "$query <br />";

}
    $sql .= $query . "\n";

}
print "</pre>";

?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="up.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>