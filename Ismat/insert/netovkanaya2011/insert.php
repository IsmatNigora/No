<?php
define('FOLDER_CERTS', '../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'bd_std';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try
{
$pdo = new PDO
("pgsql:host=$host;
  port=$port;
  dbname=$db;
  sslmode=verify-ca;
  sslrootcert=$sslrootcert;
  sslkey=$sslkey;
  sslcert=$sslcert",
'root',null,array
(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
'std_id' => 3,
'name' => 'Pavel',
'date_bth' =>'1994-01-09',
'number_z' => '164117',
'number_st' => '164118',
'caf_id' => 1,
'spec_id' => 1,
'gr_id' =>1
];

$sql = "INSERT INTO student(std_id,name,date_bth,number_z,number_st,caf_id,spec_id,gr_id) VALUES
(:std_id,:name,:date_bth,:number_z,:number_st,:caf_id,:spec_id,:gr_id)";
$stmt = $pdo -> prepare($sql);
$stmt -> execute($params);

foreach($pdo -> query('SELECT * FROM student', PDO::FETCH_ASSOC)as $row)
{
echo "<pre>";print_r($row);
echo "</pre>";
}
}
catch(Exception $e)
{
print $e -> getMessage()."\r\n";
exit(1);
}
?>
