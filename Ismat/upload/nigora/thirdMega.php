<?php
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.
define('FOLDER_CERTS', '../../cockroach/certs');

$host = '77.95.133.210';

$port = 26257;

$db = 'nigora';

$sslrootcert = FOLDER_CERTS.'/root.crt';

$sslkey = FOLDER_CERTS.'/postgresql.key';

$sslcert = FOLDER_CERTS.'/postgresql.crt';

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
//    echo "Строка $key:". $val . "<br/>";
$valfio=substr($val,0,strpos($val,','));
echo $valfio;
$vallog=substr($val,strpos($val,',')+1);
echo $vallog;

try {

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",

'root', null, array(

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_EMULATE_PREPARES => true,

));

$params = [

//'customer_id' => 1142, //установите своё значение

//'name' => 'Pavel',

//'address' => 'Moscow'
'FIO'=> $valfio,
'login'=> $vallog,
'pass'=>$vapass,
'secret'=>$valsec,
'secretanswer'=>$valsecans,
'job'=>$valljob,
'departament'=>$valdep

];

//$sql = "INSERT INTO n_teachers (FIO,login,pass,secret,secretanswer,job,departament) VALUES (:FIO,:login,:pass,:secret,:secretanswer,:job,:departament)";
//
//$stmt = $pdo->prepare($sql);

//$stmt->execute($params);

} catch (Exception $e) {

print $e->getMessage() . "\r\n";

exit(1);

}




 }

try {

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",

'root', null, array(

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_EMULATE_PREPARES => true,

));

foreach ($pdo->query('SELECT * FROM n_teachers', PDO::FETCH_ASSOC) as $row) {
echo "<pre>"; print_r($row); echo "</pre>";

}

} catch (Exception $e) {

print $e->getMessage() . "\r\n";

exit(1);

}

print "</pre>";

?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="thirdMega.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>