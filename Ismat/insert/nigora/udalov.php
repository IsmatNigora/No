<?php
define('FOLDER_CERTS', '../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'nigora';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
    'root', null, array(
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => true,
  ));
  
  $params = [
//    'customer_id' => 1144, //установите своё значение
//    'name' => 'Pavel',
//    'address' => 'Moscow'
'FIO'=> 'nigora',
'record'=> '444055'
  ];

 $sql = "INSERT INTO n_2bpm ( FIO, record) VALUES (:FIO, :record)";//, :address)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);
  
  foreach ($pdo->query('SELECT * FROM n_2bpm', PDO::FETCH_ASSOC) as $row) {
      echo "<pre>"; print_r($row); echo "</pre>";
  }
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}


?>