<?php
define('FOLDER_CERTS', '../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'amorka99';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
    'root', null, array(
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => true,
  ));
 $rows=array(
array(1,2,'бПМ'),
array(2,1,'бПМ')
);
$params=implode(",",array_fill(0,count($rows[0]), "?"));
  $sql = "INSERT INTO amorka99.group VALUES ($params)";
  $stmt = $pdo->prepare($sql);
  foreach ($rows as $row) {
$stmt ->execute($row);
      echo "<pre>"; print_r($row); echo "</pre>";
  }
$rows1=array(
array(1,'Прикладная математика')
);
$params1 = implode(",", array_fill(0, count($rows1[0]), "?"));
$sql1 = "INSERT INTO amorka99.spec VALUES ($params1)";
$stmt1 = $pdo->prepare($sql1);
foreach ($rows1 as $row) {
    $stmt1->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows2 = array(
array(1, 'Высшая математика', '8(499)155-04-36')
);
$params2 = implode(",", array_fill(0, count($rows2[0]), "?"));
$sql2 = "INSERT INTO amorka99.kf VALUES ($params2)";
$stmt2 = $pdo->prepare($sql2); 
foreach ($rows2 as $row) {
    $stmt2->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows3 = array(
              array(1, 'Иванова И.В.', '-','ivanova.inna.teacher@yandex.ru'), 
              array(2, 'Самородов В.А.', '-','5594937@gmail.com')
);
$params3 = implode(",", array_fill(0, count($rows3[0]), "?"));
$sql3 = "INSERT INTO amorka99.prep VALUES ($params3)";
$stmt3 = $pdo->prepare($sql3);
foreach ($rows3 as $row) {
    $stmt3->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows4 = array(
              array(1,1)
);
$params4 = implode(",", array_fill(0, count($rows4[0]), "?"));
$sql4 = "INSERT INTO amorka99.fk VALUES ($params4)";
$stmt4 = $pdo->prepare($sql4);
foreach ($rows4 as $row) {
    $stmt4->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows5 = array(
              array(1,'был',5,'12.03.2019',1)
);
$params5 = implode(",", array_fill(0, count($rows5[0]), "?"));
$sql5 = "INSERT INTO amorka99.marks VALUES ($params5)";
$stmt5 = $pdo->prepare($sql5);
foreach ($rows5 as $row) {
    $stmt5->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows6 = array(
array(1, 'Моргацкая', 'Ангелина','Анатольевна',178596,'amorka99@mail.ru',1,1,1,1),
array(2, 'Нетовканая', 'Анастасия','Сергеевна',178962,'netovkanaya2011@yandex.ru',1,1,1,1), 
array(3, 'Сусоев', 'Николай','Павлович',178695,'susoev.nikolay@mail.ru',1,1,1,1) 
);
$params6 = implode(",", array_fill(0, count($rows6[0]), "?"));
$sql6 = "INSERT INTO amorka99.student VALUES ($params6)";
$stmt6 = $pdo->prepare($sql6); 
foreach ($rows6 as $row) {
    $stmt6->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows7 = array(
              array(1, 'Базы данных', 144,1,2)
);
$params7 = implode(",", array_fill(0, count($rows7[0]), "?"));
$sql7 = "INSERT INTO amorka99.disp VALUES ($params7)";
$stmt7 = $pdo->prepare($sql7);
foreach ($rows7 as $row) {
    $stmt7->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
$rows8 = array(
              array(1,2,2,1)
);
$params8 = implode(",", array_fill(0, count($rows8[0]), "?"));
$sql8 = "INSERT INTO amorka99.usp VALUES ($params8)";
$stmt8 = $pdo->prepare($sql8); 
foreach ($rows8 as $row) {
    $stmt8->execute($row);
echo "<pre>"; print_r($row); echo "</pre>";
}
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}


?>