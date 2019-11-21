<?php
define('FOLDER_CERTS','../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'bd_std';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try{
   $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
  'root',null,array(
   PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_EMULATE_PREPARES => true,
));


$stud=[
'std_id'=>2,
'name'=>'Волков Владимир Викторович',
'date_bth'=>14.11.1999,
'number_z'=>432142,
'number_st'=>432213,
'cafedra'=1,
'special'=1,
'grp'=1
];

$sql="INSERT INTO bd_std.student (std_id,name,date_dth,number_z,number_st,cafedra,special,grp) VALUES (:std_id,:name,:date_dth,:number_z,:number_st,:cafedra,:special,:grp)";
$stmt=$pdo->prepare($sql);
$stmt->execute($stud);

foreach($pdo->query('SELECT * FROM bd_std.student',PDO::FETCH_ASSOC)as $row){
echo "<pre>";
print_r($row);
echo"</pre>";
}
}

catch(Exception $e){
print $e->getMessage()."\r\n";
exit(1);
}

}
?>