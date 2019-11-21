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
  // $pass = $_POST['pass'];
 $login = $_GET['login'];
   $pass = $_GET['pass'];

// $_SESSION['login']=$login;
//echo $login;
//echo 'll';
//echo $d;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
//удаление всех истекших
$sql="SELECT e FROM n_ota2";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{
//    echo $row['e'] . "\n";
if($row['e']<strtotime("now"))
{
$e=$row['e'];
$sql = "DELETE  FROM n_ota2 WHERE e = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$e]);
}

}



//$sql = "SELECT `a_t_s` FROM `admim_teacher_student ` WHERE `login` = '$login' AND `password` = '$pass'";
//$sql = "SELECT a_t_s FROM admin_teacher_student WHERE login = ? AND password= ?";
$sql = "SELECT id FROM n_ad_tec_stu WHERE login = ? AND password= ?";
//$sql = "SELECT id FROM n_ad_tec_stu WHERE login ='ad_l@yandex.ru' AND password='ad_p'";


$stmt = $pdo->prepare($sql); 
$stmt->execute([$login,$pass]);

//$pdo->query("SELECT `a_t_s` FROM `admim_teacher_student ` WHERE `login` = '$login' AND `password` = '$pass'", PDO::FETCH_ASSOC)
 //header("Location: PrTeacherAlterPg.php");
$num_row=$stmt->rowCount();//fetchColumn();
//echo $stmt;
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}
if($num_row==1){

$row=$stmt->fetch();
//echo $row['id'];
//$_SESSION['check']=$row['a_t_s'];
/*
if($row['a_t_s']==0){
//header("Location: tab.php");
*/
//header("Location: token2.php");
//echo 'sssssss';
//echo $stmt;
//header("Location: tab_display_2.php");
//echo $row['a_t_s'];
/*
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
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
/*
$create="CREATE TABLE if not exists n_ota2(
  token CHAR (256) unique,
  uid integer ,
  e integer ,
  PRIMARY KEY (token)
);";
uid no unique - пришлось бы отправить еще раз  - лучше сделать много для одного пароля на 30 минут постоянно
$stmt=$pdo->query($create);

echo $create;
*/
$u=$row['id'];
$token = sha1(uniqid($username, true));
$tim=strtotime("now")+1800;//+30 минут
$insert="INSERT INTO n_ota2 (token,uid,e) VALUES ('".$token."',".$u.",".$tim.")";
//echo $insert;
$stmt=$pdo->query($insert);
//$row=$stmt->fetch();


$colcount = $stmt->columnCount();
$json_data=array();
$data=array(array());
$data=array();

foreach ($stmt as $row)
{


for($i=0;$i<1 ;$i++)

{

//$json_data[$i] = array ('token'=>''.$row[0].'',/* 'uid'=>''.$row[1].'',*/'expire'=>''.$row[2].'');
$json_data[$i] = array ('token'=>''.$token.'',/* 'uid'=>''.$row[1].'',*/'expire'=>''.$tim.'');


//$data[$i][]=$json_data[$i];
$data[$i]=$json_data[$i];



}


}

foreach ($data as $d)

$en=array(json_encode_($d));

foreach($en as $e)
echo $e;


} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}else {
 header("toke2.php");

echo $login;
echo " ";
echo $pass;
echo ' Wrong!!!';}
//}

function json_encode_($string) {
    $arrayUtf = array('\u0410', '\u0430', '\u0411', '\u0431', '\u0412', '\u0432', '\u0413', '\u0433', '\u0414', '\u0434', '\u0415', '\u0435', '\u0401', '\u0451', '\u0416', '\u0436', '\u0417', '\u0437','\u0418', '\u0438', '\u0419', '\u0439', '\u041a', '\u043a', '\u041b', '\u043b', '\u041c', '\u043c', '\u041d', '\u043d', '\u041e', '\u043e','\u041f', '\u043f', '\u0420', '\u0440', '\u0421', '\u0441', '\u0422','\u0442', '\u0423', '\u0443', '\u0424', '\u0444', '\u0425', '\u0445', '\u0426', '\u0446', '\u0427', '\u0447', '\u0428', '\u0448', '\u0429', '\u0449', '\u042a', '\u044a', '\u042b', '\u044b', '\u042c', '\u044c','\u042d', '\u044d', '\u042e', '\u044e', '\u042f', '\u044f','\\/'); // \\/ -это \/
    $arrayCyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С','с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш',  'Щ', 'щ', 'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я','/');
    return str_replace($arrayUtf,$arrayCyr,json_encode($string));
}



 ?>