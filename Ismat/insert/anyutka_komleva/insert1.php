<?php
define('FOLDER_CERTS', '../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'bd_std';
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
    'std_id' => 32, //установите своё значение
    'name' => 'Pavel',
    'date_bth' => '1998-12-06',
    'number_z' => 123423,
    'number_st' =>123462,
    'caf_id' => 'Higher mathematics',
    'spec_id'=> 'Prikladnaya mathematics',
    'gr_id'=> '1bPM'
  ];

  $sql = "INSERT INTO bd_std.student(std_id, name, date_bth, number_z, number_st, caf_id, spec_id, gr_id) VALUES (:std_id, :name, :date_bth, :number_z, :number_st, :caf_id, :spec_id, :gr_id)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);
  
  foreach ($pdo->query('SELECT * FROM bd_std.student', PDO::FETCH_ASSOC) as $row) {
      echo "<pre>"; print_r($row); echo "</pre>";
  }
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}


?>