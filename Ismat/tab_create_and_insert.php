

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Панель управления администратора - Таблицы</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Группа Хайталиева <sub>администратор</sub></div>
      </a>

      <!-- Divider
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard 
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider 
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Панель управления
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Страницы</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Основные страницы:</h6>
            <a class="collapse-item" href="login.php">Авторизация</a>
            <a class="collapse-item" href="register.php">Регистрация</a>
            <a class="collapse-item" href="examplescsv.php">Примеры файлов csv</a>
             <a class="collapse-item" href="json_examples.php"><pre>Примеры вывода json-данных</pre></a>
            <a class="collapse-item" href="json_examples_im_watching_you.php"><pre>Просмотр API деятельности на json</pre></a>
        <!--    <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
            <a class="collapse-item" href="tab_create_and_insert.php"><pre>Вставить в таблицы  данные и/или создать таблицы со  вставкой в них данных</pre> <!-- // ученики и их данные</a> 
            <a class="collapse-item" href="tab_2.php">Tab_2 // день и  3,4,5,н, присутствовал = путсое место</a>
            <a class="collapse-item" href="tab_3.php">Tab_3 // загузка учителей и их паролей -пожоже на таблицу a_t_s, но здесь только полная информация об учителе + нет об студентах (у них другая) и администаторах</a>
            <a class="collapse-item" href="tab_4.php">Tab_4 // учитель-группа-предмет</a> -->

            <div class="collapse-divider"></div>
        <!--    <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
    -->    <!--    <a class="collapse-item" href="create_tab.php">create_tab_1</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts_3.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Диаграммы</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tab_display_2.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Таблицы для просмотра</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar 
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) 
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar 
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS)
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages 
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts 
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts 
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts 
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We have noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages 
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages 
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages 
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I have been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month is report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they are  not good...</div>
                    <div class= " small text-gray-500" >Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information 
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Таблицы</h1>
          <p class="mb-4">Загружайте таблицы <a target="_blank" href="examplescsv.php"> по примеру названий csv-файлов</a>. Система сама определяет по названию вашего файла, какую таблицу создать и/или вставить значение в таблицу<!--из  таблице--> <!--с названием вашего файла-->. Название вашего файла должно определяться по правилам, указанныx  <a target="_blank" href="examplescsv.php"> в примерах.</a> <!--<DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.--></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Таблицы</h6>
            </div>
            <div class="card-body">
<?php
session_start();
if($_SESSION['check']==0){
define('FOLDER_CERTS', '../../../../cockroach/certs');
$host = '77.95.133.210';
$port = 26257;
$db = 'nigora';
$sslrootcert = FOLDER_CERTS.'/root.crt';
$sslkey = FOLDER_CERTS.'/postgresql.key';
$sslcert = FOLDER_CERTS.'/postgresql.crt';
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
} catch (Exception $e) {
$host = '77.95.133.211';

}

$uploaddir = '/var/www/uploads/';

$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "Файл корректен и был успешно загружен.\n";
} else {
echo "Загрузка файлов!\n";
}
echo 'Некоторая отладочная информация:';
print_r($_FILES);
//$res = $uploadfile;
$res = file_get_contents($_FILES['userfile']['tmp_name']);
//Разбиваем на массив использую
//как разделитель символы переноса строки
$lines = explode("\r\n", $res);
//В цикле выводим и нумеруем
//строки нашего документа
$i=0;
$p=array();
$namedivfile= $_FILES['userfile']['name'];
$str=strstr($namedivfile,'.',true);
//echo $str.'<br/>'; //имя файла до точки
$m=array();
$m[]=explode('_',$str);
foreach($m as $lol){
//echo $m[0][0];
/*
foreach($lol as $loll){

echo $loll.'<br/>';} это верно: выводит все элементы lol*/ 
}
//echo $lol[0];
// $ch -проверяет на формат : начинаются файлы с n
if(isset($_POST['send'])){

if($lol[0]=='n'){
//echo 'good';
 $ch=1;}
else {echo $str.'- Это должно начинаться так: '.$lol[0].'<br/>'; $ch=0;
// echo $str.'- it should not start like this: '.$lol[0].'<br/>'; $ch=0;
}
} // if send
foreach ($lines as $key=>$val)
{
//echo "Строка $key:". $val . "<br/>";
$p[$i]=explode(';',$val);
//echo $p[0][$i];// -столбцы
//echo $p[$i][0];
//$i++;
//}
//echo $p[$i][0];

//echo $p[$i][0];
//foreach($i as $ii){
//for($ii=0;$ii<$i;$ii++){
//echo $p[$i][0];
//if($i==0) contnue;
//if($i!=0){
//echo $p[$i][0];
//if(!is_null($p[$i][0])){
//if(!($i==0)){
//if($i==0) continue;
//1else {
$i++;
}
/*if(isset($_POST['send'])){
if($lol[0]=='n'){

$ssql='INSERT INTO '.$str.' (';
//$sq=' id, FIO';
$sq='fio';
for($z=2;$z<count($p[0]);$z++){
$add= ',n_'.$p[0][$z].'';
$sq=$sq.''.$add;
}
$ssql=$ssql.''.$sq.') VALUES ';
//echo $ssql;


}
}*/
//$z=0;
/*for($zz=2;$zz<$ii;$zz++){
for($ii=0;$ii<2;$ii++){

echo $p[$zz][$ii];
echo ',';
}
echo '<br/>';
}*/


/*

if(isset($_POST['send'])){
if($lol[0]=='n'){

for($zz=1;$zz<$i-1;$zz++){
$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1)$li="'".$p[$zz][$ii]."'";

else $li= ','.$p[$zz][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo '),';
$ssql=$ssql.'),';
//echo '<br/>';
}

$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1) $li="'".$p[$i-1][$ii]."'";

else  $li=','.$p[$i-1][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo ');';
$ssql=$ssql.');';
//echo ';';
//echo $ssql;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($ssql);
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}
}
*/

for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
//$params = [
////'customer_id' => 1142, //установите своё значение
///'name' => 'Pavel',
///'FIO'=>$p[$ii][1],
///'record'=>$p[$ii][2]
/*
'pass'=>$p[$ii][2],
'secret'=>$p[$ii][3],
'secretanswer'=>$p[$ii][4],
'job'=>$p[$ii][5],
'departament'=>$p[$ii][6]*/

//];
//echo $p[$ii][0];
/*
$sql = "INSERT INTO n_2bpm(FIO,record) VALUES(:FIO,:record)";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
*/

//$ssql='INSERT INTO '.$str.'() VALUES';
//$add2=''.$p[$ii][1].'';
//echo $add2;
//while($z!=count($p[0])){
//echo $p[$ii][$z];
//$z++;
//}

//echo $p[$ii][$z];

/*
$nn='n_';
$nstr=$nn.$str;
$sql='CREATE SEQUENCE IF NOT EXISTS '.$nstr.'';
$stmt = $pdo->query($sql);
if(count($lol)==2){
$sqll='CREATE TABLE IF NOT EXISTS '.$str.' (
    id SERIAL PRIMARY KEY,
    FIO CHAR(64) NOT NULL UNIQUE, ';
for($z=2;$z<count($lol);$z++){
$add= $p[$z].'  INTEGER ,';
$sqll=$add.$sqll;
}
 echo $sqll;

}

*/

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
//}
//} //if i
//}
//$i++;
}


try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",

'root', null, array(

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_EMULATE_PREPARES => true,

));
//echo $str ;
if(isset($_POST['send'])){
if($lol[0]=='n'){
$nn='n_';
$nstr=$nn.$str;
$sql='CREATE SEQUENCE IF NOT EXISTS '.$nstr.'';
$stmt = $pdo->query($sql);


if($str=='n_teachers'){

//if($str=='n_tec_gro_sub'){ 
//echo $str;// только вставляем данные:

for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
'FIO'=>$p[$ii][0],
'login'=>$p[$ii][1],
'pass'=>$p[$ii][2],
'secret'=>$p[$ii][3],
'secretanswer'=>$p[$ii][4],
'job'=>$p[$ii][5],
'departament'=>$p[$ii][6]
];
//echo $p[$ii][0];

$sql = "INSERT INTO n_teachers(FIO,login,pass,secret,secretanswer,job,departament) VALUES(:FIO,:login,:pass,:secret,:secretanswer,:job,:departament)";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}

}

}

elseif($str=='n_stu_gro_sub'){

//if($str=='n_tec_gro_sub'){.
//echo $str;// только вставляем данные:

for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
'id'=>$p[$ii][0],
'FIO'=>$p[$ii][1],
'login'=>$p[$ii][4],
'pass'=>$p[$ii][5],
///'secret'=>$p[$ii][3],
'gro'=>$p[$ii][3],
'sub'=>$p[$ii][2],
'year'=>$p[$ii][6]
];
//echo $p[$ii][0];

$sql = "INSERT INTO n_stu_gro_sub(id,fio,gro,sub,login,pass,year) VALUES(:id,:FIO,:gro,:sub,:login,:pass,:year)";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}

}

}

elseif($str=='n_students'){

for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
'id'=>$p[$ii][0],
'FIO'=>$p[$ii][1],
'login'=>$p[$ii][2],
'pass'=>$p[$ii][3],
///'secret'=>$p[$ii][3],
'gro'=>$p[$ii][4]
//'sub'=>$p[$ii][2],
//'year'=>$p[$ii][6]
];
//echo $p[$ii][0];

$sql = "INSERT INTO n_students(id,fio,login,pass,gro) VALUES(:id,:FIO,:login,:pass,:gro)";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}

}

}



elseif($str=='n_tec_gro_sub'){

//elseif($str=='n_teachers'){ 
//echo $str; //только вставляем данные:
for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
'p_id'=>$p[$ii][0],
///'p_id'=>'DEFAULT',
'gro'=>$p[$ii][1],
'sub'=>$p[$ii][2]
];
echo $p[$ii][0];
$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(:p_id,:gro,:sub)";
//$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(DEFAULT,:gro,:sub)";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
}




}

elseif($str=='n_ad_tec_gro'){

//elseif($str=='n_teachers'){.
//echo $str; //только вставляем данные:
for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
//'p_id'=>$p[$ii][0],
///'p_id'=>'DEFAULT',
'gro'=>$p[$ii][0]
//'sub'=>$p[$ii][2]
];
echo $p[$ii][0];
$sql = "INSERT INTO n_ad_tec_gro(gro) VALUES(:gro)";
//$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(DEFAULT,:gro,:sub)";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
}




}




elseif(count($lol)==5){ //echo $str; // это , к примеру, n_2018_2019_2bpm_math
if(isset($_POST['send'])){
if($lol[0]=='n'){

$ssql='INSERT INTO '.$str.' (';
//$sq=' id, FIO';
$sq='p_id';
for($z=1;$z<count($p[0]);$z++){
$add= ',n_'.$p[0][$z].'';
$sq=$sq.''.$add;
}
$ssql=$ssql.''.$sq.') VALUES ';
//echo $ssql;


}
}


$n='n_';
$nstr=$n.''.$str;

$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll." ";
//echo $p[0][3];
for($z=1;$z<count($p[0]);$z++){
$add= ',  n_'.$p[0][$z].'  INTEGER ';
$sqll=$sqll.''.$add;
}
$sqll=$sqll.')';
//echo $sqll;
$stmt = $pdo->query($sqll);


if(isset($_POST['send'])){
if($lol[0]=='n'){

for($zz=1;$zz<$i-1;$zz++){
$ssql=$ssql.'(';

$li='DEFAULT'; //p_id
$ssql=$ssql.''.$li;

for($ii=1;$ii<count($p[0]);$ii++){
//if($ii==1)//echo //$li="'".$p[$zz][$ii]."'";

//else //echo //
$li= ','.$p[$zz][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo '),';
$ssql=$ssql.'),';
//echo '<br/>';
}

$ssql=$ssql.'(';

$li='DEFAULT'; //p_id
$ssql=$ssql.''.$li;

for($ii=1;$ii<count($p[0]);$ii++){
//if($ii==1)//echo// $li="'".$p[$i-1][$ii]."'";

//else //echo// 
$li=','.$p[$i-1][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo ');';
$ssql=$ssql.');';
//echo ';';
echo $ssql;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($ssql);
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}
}






}


elseif((count($lol)==3)&&($lol[2]=='schedule')){



//$n='n_';
//$nstr=$n.''.$str;
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
*/
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
 id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll.", fio  CHAR(64) NOT NULL UNIQUE ";
*/
$sqln="CREATE TABLE if not Exists ".$str." ( time CHAR(32), sub CHAR(128),occupation CHAR(128),frequency CHAR(64),audience  CHAR(32),teacher CHAR(128),day_of_week CHAR(32))";


try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($sqln);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}



for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
//'p_id'=>$p[$ii][0],
///'p_id'=>'DEFAULT',
'time'=>$p[$ii][0],
'sub'=>$p[$ii][1],
'occupation'=>$p[$ii][2],
'frequency'=>$p[$ii][3],
'audience'=>$p[$ii][4],
'teacher'=>$p[$ii][5],
'day_of_week'=>$p[$ii][6]

];
//echo $p[$ii][0];
$sql = "INSERT INTO ".$str."(time,sub,occupation,frequency,audience,teacher,day_of_week) VALUES(:time,:sub,:occupation,:frequency,:audience,:teacher,:day_of_week)";
//$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(DEFAULT,:gro,:sub)";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
}


}


elseif((count($lol)==4)&&($lol[3]=='schedule')&&($lol[1]=='tec')){



//$n='n_';
//$nstr=$n.''.$str;
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
*/
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
 id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll.", fio  CHAR(64) NOT NULL UNIQUE ";
*/


$sqln="CREATE TABLE if not Exists ".$str." ( time CHAR(32), gro CHAR(32),sub CHAR(128),occupation CHAR(128),frequency CHAR(64),audience  CHAR(32),day_of_week CHAR(32))";


try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($sqln);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}



for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
//'p_id'=>$p[$ii][0],
///'p_id'=>'DEFAULT',
'time'=>$p[$ii][0],
'gro'=>$p[$ii][1],
'sub'=>$p[$ii][2],
'occupation'=>$p[$ii][3],
'frequency'=>$p[$ii][4],
'audience'=>$p[$ii][5],
///'teacher'=>$p[$ii][5],
'day_of_week'=>$p[$ii][6]

];
//echo $p[$ii][0];
$sql = "INSERT INTO ".$str."(time,gro,sub,occupation,frequency,audience,day_of_week) VALUES(:time,:gro,:sub,:occupation,:frequency,:audience,:day_of_week)";
//$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(DEFAULT,:gro,:sub)";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
}


}

elseif((count($lol)==3)&&($lol[1]=='new')){



//$n='n_';
//$nstr=$n.''.$str;
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
*/
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
 id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll.", fio  CHAR(64) NOT NULL UNIQUE ";
*/
$sqln="CREATE TABLE if not Exists ".$str." ( sub CHAR(32))";


try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($sqln);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}



for($ii=1;$ii<$i;$ii++){

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
$params = [
//'customer_id' => 1142, //установите своё значение
//'name' => 'Pavel',
//'p_id'=>$p[$ii][0],
///'p_id'=>'DEFAULT',
'sub'=>$p[$ii][0]
//'sub'=>$p[$ii][2]
];
//echo $p[$ii][0];
$sql = "INSERT INTO ".$str."(sub) VALUES(:sub)"; // должно было быть sub, но просто сделали так
//$sql = "INSERT INTO n_tec_gro_sub(p_id,gro,sub) VALUES(DEFAULT,:gro,:sub)";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}
}


}




else{
/*$nn='n_';
$nstr=$nn.$str;
$sql='CREATE SEQUENCE IF NOT EXISTS '.$nstr.'';
$stmt = $pdo->query($sql);
*/
/*
if(count($lol)==2){

if(isset($_POST['send'])){
if($lol[0]=='n'){

$ssql='INSERT INTO '.$str.' (';
//$sq=' id, FIO';
$sq='fio';
for($z=2;$z<count($p[0]);$z++){
$add= ',n_'.$p[0][$z].'';
$sq=$sq.''.$add;
}
$ssql=$ssql.''.$sq.') VALUES ';
//echo $ssql;


}
}


$n='n_';
$nstr=$n.''.$str;
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
*//*
$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
 id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll.", fio  CHAR(64) NOT NULL UNIQUE ";


//echo $p[0][3];
for($z=2;$z<count($p[0]);$z++){
$add= ',  n_'.$p[0][$z].'  INTEGER ';
$sqll=$sqll.''.$add;
}
$sqll=$sqll.')';
//echo $sqll;
$stmt = $pdo->query($sqll);

}
*/
if(count($lol)==2){

if(isset($_POST['send'])){
if($lol[0]=='n'){

$ssql='INSERT INTO '.$str.' (';
//$sq=' id, FIO';
$sq='fio,email,phone_number,date_of_birth';
for($z=5;$z<count($p[0]);$z++){
$add= ',n_'.$p[0][$z].'';
$sq=$sq.''.$add;
}
$ssql=$ssql.''.$sq.') VALUES ';
//echo $ssql;


}
}


$n='n_';
$nstr=$n.''.$str;
/*$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
    p_id  integer NOT NULL DEFAULT nextval('".$nstr."')";
*/
$sqll="CREATE TABLE IF NOT EXISTS ".$str." (
 id  integer NOT NULL DEFAULT nextval('".$nstr."')";
 $sqll=$sqll.", fio  CHAR(128)  ,email char(128),phone_number char(64), date_of_birth char(32) ";


//echo $p[0][3];
for($z=5;$z<count($p[0]);$z++){
$add= ',  n_'.$p[0][$z].'  INTEGER ';
$sqll=$sqll.''.$add;
}
$sqll=$sqll.')';
//echo $sqll;
$stmt = $pdo->query($sqll);

}



if((count($lol)==2)&&(($str!='n_teachers')||($str!='n_students'))){
if((isset($_POST['send']))){
if($lol[0]=='n'){

for($zz=1;$zz<$i-1;$zz++){
$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1||$ii==2||$ii==3)//echo //
$li="'".$p[$zz][$ii]."',";
elseif($ii==4)//echo //
$li="'".$p[$zz][$ii]."'";

else // echo //
$li= ','.$p[$zz][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo '),';
$ssql=$ssql.'),';
//echo '<br/>';
}

$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1||$ii==2||$ii==3)//echo//
 $li="'".$p[$i-1][$ii]."',";
elseif($ii==4)//echo //
$li="'".$p[$zz][$ii]."'";

else // echo// 
$li=','.$p[$i-1][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo ');';
$ssql=$ssql.');';
//echo ';';
//echo $ssql;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
//echo $ssql;
$stmt = $pdo->query($ssql);
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}
}

}
else{




if(isset($_POST['send'])){
if($lol[0]=='n'){

for($zz=1;$zz<$i-1;$zz++){
$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1)//echo //
$li="'".$p[$zz][$ii]."'";

else // echo //
$li= ','.$p[$zz][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo '),';
$ssql=$ssql.'),';
//echo '<br/>';
}

$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1)//echo//
 $li="'".$p[$i-1][$ii]."'";

else // echo// 
$li=','.$p[$i-1][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo ');';
$ssql=$ssql.');';
//echo ';';
//echo $ssql;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
//echo $ssql;
$stmt = $pdo->query($ssql);
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}
}


}






}


}
}
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);

}


/*
if(isset($_POST['send'])){
if($lol[0]=='n'){

for($zz=1;$zz<$i-1;$zz++){
$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1)//echo //$li="'".$p[$zz][$ii]."'";

else //echo //$li= ','.$p[$zz][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo '),';
$ssql=$ssql.'),';
//echo '<br/>';
}

$ssql=$ssql.'(';
for($ii=1;$ii<count($p[0]);$ii++){
if($ii==1)//echo// $li="'".$p[$i-1][$ii]."'";

else //echo// $li=','.$p[$i-1][$ii].'';
$ssql=$ssql.''.$li;
//echo ',';
}
//echo ');';
$ssql=$ssql.');';
//echo ';';
//echo $ssql;
try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

$stmt = $pdo->query($ssql);
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}


}
}
*/

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",

'root', null, array(

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_EMULATE_PREPARES => true,

));
//echo $str ;
if(isset($_POST['send'])){
$n_2bpm=$str;
foreach ($pdo->query('SELECT * FROM '.$nstr.'') as $row){//, PDO::FETCH_ASSOC) as $row) 
echo "<pre>"; print_r($row); echo "</pre>";

}


foreach ($pdo->query('SELECT * FROM '.$n_2bpm.'') as $row){//, PDO::FETCH_ASSOC) as $row) 
echo "<pre>"; print_r($row); echo "</pre>";

}
}//if
} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}
//echo $p[$i][1];
//$i++;
//}

print "</pre>";
 
} //else echo 'You are not an administrator';
 else echo 'Вы не администратор!';


?>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="tab_create_and_insert.php" method="POST">
<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
<!-- Название элемента input определяет имя в массиве $_FILES -->
Отправить этот файл: <input name="userfile" type="file" />
<input type="submit" name="send"  value="Отправить файл" />
</form>


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> nigora &copy; Haitaliev&#39s Website <?php echo date("d-m-Y");?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
