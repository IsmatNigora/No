<?php
define('FOLDER_CERTS', '../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'Proekt';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
    'root', null, array(
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => true,
  ));
  
 // $params = [
//    'zachet_id' => 72, //установите своё значение
//    'name' => 'Pavel',
//    'birth' => '2232222',
//    'group_number' => 'umots'
 // ];

  $sql = "INSERT INTO Proekt.student (zachet_id, name, birth, group_number) VALUES (:zachet_id, :name, :birth, :group_number)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);
  
  foreach ($pdo->query('SELECT * FROM Proekt.student', PDO::FETCH_ASSOC) as $row) {
      echo "<pre>"; print_r($row); echo "</pre>";
  }
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}


?>