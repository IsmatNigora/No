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
  
 // $params = [
//    'customer_id' => 1144, //установите своё значение
//    'name' => 'Pavel',
//    'address' => 'Moscow'
//'FIO'=> 'nigora',
//'record'=> '444055'
 // ];
define('CSV_PATH','home/');
// path where your CSV file is located

$csv_file = CSV_PATH . "csvf.csv"; // Name of your CSV file
$csvfile = fopen($csv_file, 'r');
$theData = fgets($csvfile);
$i = 0;
while (!feof($csvfile)) {
$csv_data[] = fgets($csvfile, 1024);
$csv_array = explode(",", $csv_data[$i]);
$insert_csv = array();
$insert_csv['FIO'] = $csv_array[0];
$insert_csv['record'] = $csv_array[1];
//$insert_csv['email'] = $csv_array[2];
//$query = "INSERT INTO csvdata(ID,name,email)
//VALUES('".$insert_csv['ID']."','".$insert_csv['name']."','".$insert_csv['email']."')";
//$n=mysqli_query($conn,$query );
//echo $query;
//$i++;
//}
//fclose($csvfile);

//echo "File data successfully imported to database!!";
 $sql = "INSERT INTO n_2bpm ( FIO, record) VALUES (:insert_csv['FIO'], :insert_csv['record'])";//, :address)";
//$query = "INSERT INTO csvdata(ID,name,email)
//VALUES('".$insert_csv['ID']."','".$insert_csv['name']."','".$insert_csv['email']."')";
//$n=mysqli_query($conn,$query );
//echo $query;
$stmt=$pdo->prepare($sql);
//$stmt=execute();
$i++;
}
fclose($csvfile);

echo "File data successfully imported to database!!";
 // $stmt = $pdo->prepare($sql);
 // $stmt->execute($params);
  
  foreach ($pdo->query('SELECT * FROM n_2bpm', PDO::FETCH_ASSOC) as $row) {
      echo "<pre>"; print_r($row); echo "</pre>";
  }
} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    exit(1);
}


?>