<?php
define('FOLDER_CERTS', '../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'alanali';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
    'root', null, array(
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => true,
  ));

 $dbh->exec('INSERT INTO accounts (id, balance) VALUES (1, 1000), (2, 250)');

  print "Account balances:\r\n";
  foreach ($dbh->query('SELECT id, balance FROM accounts') as $row) {
      print $row['id'] . ': ' . $row['balance'] . "\r\n";
  }
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}
/*
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.
 
$uploaddir = '/var/www/uploads/';
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
 foreach ($lines as $key=>$val)
 {
    echo "Строка $key:". $val . "<br/>";
 }


print "</pre>";
*/
?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="updd.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>