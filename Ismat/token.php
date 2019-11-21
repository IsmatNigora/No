<?php
define('FOLDER_CERTS', '../../../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'nigora';
$sslrootcert = FOLDER_CERTS.'/root.crt';.
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';

echo 's';
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(.
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$create="CREATE TABLE n_test.one_time_auth(
  token CHAR (32),
  user_id INT (11) UNSIGNED NOT NULL,
  expire DATETIME DEFAULT NULL,
  PRIMARY KEY (token)
);";

   $login = $_GET['login'];
   $pass = $_GET['pass'];
echo $login;
$create="CREATE TABLE n_ota(
  token CHAR (32),
  uid integer,
  e integer ,
  PRIMARY KEY (token)
);";


$sql = "SELECT a_t_s FROM n_ad_tec_stu WHERE login = ? AND password= ?";
$stmt = $pdo->prepare($sql);.
$stmt->execute([$login,$pass]);
$num_row=$stmt->rowCount();

if($num_row==1){

$row=$stmt->fetch();

//$_SESSION['check']=$row['a_t_s'];

//if($row['a_t_s']==0){
//header("Location: tab.php");

//header("Location: tab_display_2.php");
//echo $row['a_t_s'];
$token = sha1(uniqid($username, true));
$tim=strtotime("now")+1800;//+30 минут
$insert="INSERT INTO n_ota (token,uid,e) VALUES ('".$token."',".$u.",".$tim.")";

}
}else {
 header("login.php");

echo $login;
echo " ";
echo $pass;
echo ' Wrong!!!';}

//$stmt=$pdo->query($create);

//$token = sha1(uniqid($username, true));
//$tim=strtotime("now")+1800;//+30 минут
//$insert="INSERT INTO n_ota (token,uid,e) VALUES ('".$token."',".$u.",".$tim.")";
echo $insert;
//echo $token.'<br>';
//echo $tim;
/*
$header= json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
$payload = json_encode(['iss' => 'lite.code4b.ru', 'alg' => 'HS256', 'aud' => 'id1234', 'exp' => 1552416300, 'lite.code4b.ru/is_Teacher' => true]);
$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

// Encode Payload to Base64Url String
$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

// Create Signature Hash
$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);


// Encode Signature to Base64Url String
$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

// Create JWT
$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
*/


/*
// Create token header as a JSON string
$header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

// Create token payload as a JSON string
$payload = json_encode(['user_id' => 123]);

// Encode Header to Base64Url String
$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

// Encode Payload to Base64Url String
$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

// Create Signature Hash
$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

// Encode Signature to Base64Url String
$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

// Create JWT
$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
*/
echo $jwt;

} catch (Exception $e) {
print $e->getMessage()."\r\n";
exit(1);
}

function json_encode_($string) {
    $arrayUtf = array('\u0410', '\u0430', '\u0411', '\u0431', '\u0412', '\u0432', '\u0413', '\u0433', '\u0414', '\u0434', '\u0415', '\u0435', '\u0401', '\u0451', '\u0416', '\u0436', '\u0417', '\u0437','\u0418', '\u0438', '\u0419', '\u0439', '\u041a', '\u043a', '\u041b', '\u043b', '\u041c', '\u043c', '\u041d', '\u043d', '\u041e', '\u043e', '\u041f', '\u043f', '\u0420', '\u0440', '\u0421', '\u0441', '\u0422','\u0442', '\u0423', '\u0443', '\u0424', '\u0444', '\u0425', '\u0445', '\u0426', '\u0446', '\u0427', '\u0447', '\u0428', '\u0448', '\u0429', '\u0449', '\u042a', '\u044a', '\u042b', '\u044b', '\u042c', '\u044c','\u042d', '\u044d', '\u042e', '\u044e', '\u042f', '\u044f','\\/'); // \\/ -это \/
    $arrayCyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С','с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш',  'Щ', 'щ', 'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я','/');
    return str_replace($arrayUtf,$arrayCyr,json_encode($string));
}
?>