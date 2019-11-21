<?php
//session_start();
//$d=date('d-m-Y');
define('FOLDER_CERTS', '../../../../cockroach/certs');
$host = '77.95.133.211';
$port = 26257;
$db = 'nigora';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';
//echo 'lol';
//if(isset($_POST['ok'])) {
  // $login = $_POST['login'];
//   $pass = $_POST['pass'];
 //$_SESSION['login']=$login;
$token = $_GET['code'];
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));


//$sql = "SELECT a_t_s FROM n_ad_tec_stu WHERE login = ? AND password= ?";
$sql = "SELECT * FROM n_ota2 WHERE token = ? ";
$stmt = $pdo->prepare($sql); 
//$stmt->execute([$login,$pass]);
$stmt->execute([$token]);
//$sql = "SELECT * FROM n_ota2 WHERE token ='".$token."' ";

//$stmt=$pdo->query($sql);
//echo $sql;
$num_row=$stmt->rowCount();
//echo $num_row;
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}
if($num_row==1){

$row=$stmt->fetch();
//echo $row['uid'];

$sql = "SELECT e FROM n_ota2 WHERE token = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$token]);
//$stmt=$pdo->query($insert);


if($row['e']<strtotime("now"))
{
$sql = "DELETE  FROM n_ota2 WHERE token = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$token]);

} //else echo 'good';
//$_SESSION['check']=$row['a_t_s'];
/*
if($row['a_t_s']==0){
//header("Location: tab.php");

header("Location: tab_display_2.php");
//echo $row['a_t_s'];

}
elseif($row['a_t_s']==1){


header("Location: teach.php");
//header("Location: teacher.php");
//echo $row['a_t_s'];

}
else
{
header("Location: study_2.php");

//header("Location: study.php");

//header("Location: student.php");
//echo $row['a_t_s'];//=2
}
*/
/*$create="CREATE TABLE n_test.one_time_auth(
  token CHAR (32),
  user_id INT (11) UNSIGNED NOT NULL,
  expire DATETIME DEFAULT NULL,
  PRIMARY KEY (token)
);";
*/
/*try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$create="CREATE TABLE n_ota(
  token CHAR (32),
  uid integer,
  e integer ,
  PRIMARY KEY (token)
);";



$token = sha1(uniqid($username, true));
$tim=strtotime("now")+1800;//+30 минут
$insert="INSERT INTO n_ota (token,uid,e) VALUES ('".$token."',".$u.",".$tim.")";

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}
*/

}/*elseif($num_row==0){
echo $
}*/
else {
 header("token_valid.php");

echo $token;
//echo " ";
//echo $pass;
echo ' Wrong!!!';} // token has been removed
//else header("Location: PrTeacherAlterPg.php");
//}
?>