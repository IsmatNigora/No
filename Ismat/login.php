<?php
session_start();
$d=date('d-m-Y');
define('FOLDER_CERTS', '../../../../cockroach/certs');
//if($_SESSION['i_211']==true){//false){
$host = '77.95.133.210';
//}
//else $host = '77.95.133.211';

$port = 26257;
$db = 'nigora';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';
//echo 'lol';
if(isset($_POST['ok'])) {
   $login = $_POST['login'];
   $pass = $_POST['pass'];
 $_SESSION['login']=$login;
//echo $login;
//echo 'll';
//echo $d;

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
} catch (Exception $e) {
$host = '77.95.133.211';

}
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

//$sql = "SELECT `a_t_s` FROM `admim_teacher_student ` WHERE `login` = '$login' AND `password` = '$pass'";
//$sql = "SELECT a_t_s FROM admin_teacher_student WHERE login = ? AND password= ?";
$sql = "SELECT a_t_s FROM n_ad_tec_stu WHERE login = ? AND password= ?";

$stmt = $pdo->prepare($sql); 
$stmt->execute([$login,$pass]);
//$pdo->query("SELECT `a_t_s` FROM `admim_teacher_student ` WHERE `login` = '$login' AND `password` = '$pass'", PDO::FETCH_ASSOC)
 //header("Location: PrTeacherAlterPg.php");
$num_row=$stmt->rowCount();//fetchColumn();

} catch (Exception $e) {
print $e->getMessage()."\r\n";

exit(1);
//$_SESSION['i_211']=true;


//header("login.php");

}
if($num_row==1){

$row=$stmt->fetch();

$_SESSION['check']=$row['a_t_s'];

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
}

else {
 header("login.php");

echo $login;
echo " ";
echo $pass;
echo ' Wrong!!!';}
//else header("Location: PrTeacherAlterPg.php");
}
// ?>
<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Авторизация. Группа Хайталиева</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- <link rel="stylesheet" href="docs.min.css.map"; -->
  </head>

  <body class="text-center">
    <form class="form-signin"action="login.php" method="POST">
     <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
       <img class="mb-4" src="https://cs8.pikabu.ru/post_img/2016/03/30/7/1459335471159744122.jpg" alt="" width="82" height="82">
      <h1 class="h3 mb-3 font-weight-normal">Пожалуйста, войдите</h1>
      <label for="inputEmail" class="sr-only">Адрес электронной почты</label>
      <input type="email" id="inputEmail" name="login" class="form-control" placeholder="Адрес электронной почты" required autofocus>
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Пароль" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="ok" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">&copy;<?php echo  $d;?> <!-- 2017-2018 --> </p>
    </form>
  </body>
</html>