<?php
define('FOLDER_CERTS','../../cockroach/certs');
$host='77.95.133.210';
$port=26257;
$db='amorka99';
$sslrootcert=FOLDER_CERTS.'/root.crt';
$sslkey=FOLDER_CERTS.'/postgresql.key';
$sslcert=FOLDER_CERTS.'/posgresql.crt';

$uploaddir = '/var/www/uploads/amorka99';
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
 $lines = explode("\r\n", $res);
 //В цикле выводим и нумеруем 
 //строки нашего документа
try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
    'root', null, array(
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => true,
  ));

$delimiter=",";
$column_names=explode($delimiter,$lines[0]);
$base_query="insert into amorka99.student";
$base_query .=" (";
$first=true;
foreach($column_names as $column_name){
if ($first ===false){
$base_query .=", ";
}
$column_name=trim($column_name);
$base_query .="$column_name";
$first=false;
}
$base_query .=") ";
$last_data_row=count($lines)-1;
for ($counter=1; $counter < $last_data_row; $counter++) {
$value_query="values ('";
$first=true;
$data_row=explode($delimiter,$lines[$counter]);
$value_counter=0;
foreach($data_row as $data_value) {
if($first ===false) {
$value_query .="', '";
}
$data_value = trim($data_value);
$value_query .="$data_value";
$first =false;}
$value_query .= "')";
$query=$base_query .$value_query . ";";
echo "$query <br />";}
$sql .= $query . "\n";
}
/* foreach ($lines as $key=>$val)
 {
    echo "Строка $key:". $val . "<br/>";

 }*/


print "</pre>";
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}

?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="amorka99.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>