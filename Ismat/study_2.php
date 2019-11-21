<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Успеваемость студента</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="study_2.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Группа Хайталиева <sup>Студент</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard 
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider 
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

      <!-- Divider -->
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
            <h6 class="collapse-header">Страницы:</h6>
            <a class="collapse-item" href="login.php">Авторизация</a>
    <!--
            <a class="collapse-item" href="register.php">Register</a>
    
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>

            <a class="collapse-item" href="tab_create_and_insert.php">tab_create_and_insert</a>
            <a class="collapse-item" href="tab.php">Tab_1</a>
            <a class="collapse-item" href="tab_2.php">Tab_2</a>
            <a class="collapse-item" href="tab_3.php">Tab_3</a>
            <a class="collapse-item" href="tab_4.php">Tab_4</a> -->


            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Другие страницы:</h6>
            <a class="collapse-item" href="schedule_2.php">Расписание</a>
        <!--    <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
-->        <!--    <a class="collapse-item" href="schedule_2.php">Расписание</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts 
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="study_2.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Таблицы с успеваемостью</span></a>
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
                    Spending Alert: We've noticed unusually high spending for your account.
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
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
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
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
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
              <!-- Dropdown - User Information 
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Таблицы с успеваемостью</h1>
          <p class="mb-4"><!--DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.--></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Таблицы</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
            
    <?php
session_start();
if($_SESSION['check']==2){



            define('FOLDER_CERTS', '../../../../cockroach/certs');
           $host = '77.95.133.210';
          $port = 26257;
          $db = 'nigora';
           $sslrootcert = FOLDER_CERTS.'/root.crt'; 
          $sslkey = FOLDER_CERTS.'/postgresql.key';
        $sslcert = FOLDER_CERTS.'/postgresql.crt';

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));
} catch (Exception $e) {
$host = '77.95.133.211';

}

$_SESSION['e']=1;
$k=0;
if(isset($_POST['sub']))
$k++;
echo '<form action="study_2.php" method="post">';

       try {
       $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
         'root', null, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_EMULATE_PREPARES => true,
          ));
//echo '<form action="teach.php" method="post">';
//echo '<form  method="post">';
//$log='te_l@yandex.ru';

//$stmt=$pdo->query("SELECT id FROM n_teachers WHERE login=".$log."");

/*  <label for="action">Options:</label>
  <select name="action" id="action">
    <option value="help">Help</option>
    <option value="reset">Reset</option>
    <option value="submit">Submit</option>
  </select> */
if($k==0)
 echo '<button type="submit" class="btn btn-primary"  name="sub" value="1">Вывести выбранное </button>';
else //if($k==1) 
echo '<button type="submit" class="btn btn-primary"  name="addme" value="1">Вывести выбранное</button>';
//echo '<button type="submit" class="btn btn-primary"  name="sub" value="1">Add </button>';

//</form>   
echo '<select class="custom-select" name="tabtab">';
// echo ' <option selected>Open this select menu</option>';
echo ' <option selected></option>';

//$name = "n";
//$query = "SHOW TABLES  LIKE ? ";

/*
$stmt = $pdo->prepare('SHOW TABLES LIKE ?');/*
$stm->execute(array($name));
$data = $stm->fetchAll();
*/
/*
$params = array("%$name%", "%$var2%");
$stmt = $handle->prepare($query);
$stmt->execute($params);
foreach ($stmt->execute($params) as $row){ */

/*

foreach ($pdo->query("SHOW TABLES  ", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query("dt", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query('SELECT  gro FROM n_tec_gro_sub GROUP BY gro', PDO::FETCH_ASSOC) as $row) {
if(strstr($row['Table'], '_',true)=='n'){

echo'<option value="';
// print_r($row['gro']);
print_r($row['Table']);
  echo '">';
 echo "<pre>";// print_r($row['gro']);
print_r($row['Table']);
 echo'</option>'; echo "</pre>";
} //это strstr
}
*/
$log=$_SESSION['login'];
//echo $log;

//$stmtp = $pdo->query('SELECT id FROM n_teachers WHERE login='.$log.'');
//$stmt=$pdo->query("SELECT id FROM n_teachers WHERE login='".$log."'");

//$stmt=$pdo->query("SELECT *  FROM n_teachers WHERE login='lo'");



//$p_id=$stmt;
//echo 'SELECT id FROM n_teachers WHERE login='.$log.'';
//$p_id=1; 

//$stmt = $pdo->query('SELECT * FROM n_tec_gro_sub WHERE p_id='.$p_id.'');

//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE p_id=(SELECT id FROM n_stu_gro_sub WHERE login='".$log."')");
//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE p_id=(SELECT id FROM n_stu_gro_sub WHERE login='".$log."')");
//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE gro=(SELECT gro FROM n_stu_gro_sub WHERE login='".$log."') AND  sub=(SELECT sub FROM n_stu_gro_sub WHERE login='".$log."')");


//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE gro=(SELECT gro FROM n_stu_gro_sub WHERE login='".$log."') AND  sub=(SELECT sub FROM n_stu_gro_sub WHERE login='".$log."')");
$stmt = $pdo->query("SELECT * FROM n_students WHERE login='".$log."' ");// WHERE gro=(SELECT gro FROM n_stu_gro_sub WHERE login='".$log."') AND  sub=(SELECT sub FROM n_stu_gro_sub WHERE login='".$log."')");

//$substmt = $pdo->query("SELECT * FROM n_new_2bpm ");//".$row['gro']." ");
//$substmt = $pdo->query("SELECT * FROM n_new_".$stmt['gro']." ");

//$zz='2bpm';
/*foreach ($stmt as $row){
$zz=''.$row['gro'].'';
}*/
//$substmt = $pdo->query("SELECT * FROM n_new_".$stmt['gro']." ");

//$substmt = $pdo->query("SELECT * FROM n_new_".$zz." ");


//$p_id=1; //это, чтобы только от определенного учителя
//$stmt = $pdo->query("SELECT * FROM n_tec_gro_sub WHERE p_id=(SELECT id FROM n_teachers WHERE login='".$log."')");
//$row=$stmt;
foreach ($stmt as $row) {
$substmt = $pdo->query("SELECT * FROM n_new_".$row['gro']." ");


foreach ($substmt as $subrow){//and ($stmt as $row) ) {
//foreach ($stmt as $row){

//foreach ($pdo->query("SHOW TABLES  ", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query("dt", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query('SELECT  gro FROM n_tec_gro_sub GROUP BY gro', PDO::FETCH_ASSOC) as $row) {
//if(strstr($row['Table'], '_',true)=='n'){
// if(strstr($row['gro'], '_',true)=='n'){


echo'<option value="';
//print_r($row['gro']);
//print_r($row['Table']);
//print_r('n_2018_2019_'.$row['gro'].'_'.$row['sub']);

//print_r('n_2018_2019_'.$row['gro'].'_math');
//print_r('n_2018_2019_'.$row['gro'].'_'.$subrow['gro'].'');
//print_r('n_2018_2019__'.$subrow['gro'].'');
//print_r('n_2018_2019_'.$row['gro'].'_'.$subrow['sub'].'');
print_r('n_'.(date('Y')-1).'_'.date('Y').'_'.$row['gro'].'_'.$subrow['sub']);




//echo '1';//echo $row;
  echo '">';
 echo "<pre>";// print_r($row['gro']);
//if($row['Table']=='n_2bpm')
//print_r($row['gro']);
//print_r('2018-2019-'.$row['gro'].'-'.$row['sub']);

//print_r('n_2018_2019_'.$row['gro'].'_math');
//print_r('n_2018_2019_'.$row['gro'].'_'.$subrow['gro'].'');
//print_r('n_2018_2019__'.$subrow['gro'].'');
print_r('n_2018_2019_'.$row['gro'].'_'.$subrow['sub'].'');





//echo '2';
//print_r($row['Table']);
 echo'</option>'; echo "</pre>";
// } //это strstr
} //foreachsubrow
} //foreachrow

echo '</select>';
//echo '</form>';
//$_POST['tabtab']='n'+$_POST['tabtab'];
//$nametab=$_POST['tabtab'];
//echo '<a class="btn btn-primary" href="#" role="button">Link</a>';
//echo '<input name="okok" type="button" '; 
if(isset($_POST['okok'])) header("Location: login.php");
/*echo '<form>
  <div class="form-group">
 '; echo '<button   name="okok">Submit</button>';
//<button type="submit" class="btn btn-primary" name="okok">Submit</button>
echo '
</form>'; */ /*
if(isset($_POST['okok'])){
$nametab='oll'+$_POST['tabtab']+'l';}
*/
$colcounter=0;
$h='';//'n_';
if(isset($_POST['tabtab'])){
$n_2bpm=$h.$_POST['tabtab'];//'n_2bpm';
$forFi=$row['gro'];
if($n_2bpm!='n_'){// echo $n_2bpm;
//$p_id=2;
$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC); //это отвечает за столбцы названия

//$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." WHERE p_id='".$p_id."' ");///(SELECT id FROM n_stu_gro_sub WHERE login='".$log."') ");//, PDO::FETCH_ASSOC);
$colcount = $stmt->columnCount();

for ($counter = 0; $counter <$colcount; $counter++) {
    $meta = $stmt->getColumnMeta($counter);
    $column[] = $meta['name'];
}
//$namecol= $stmt->getColumnMeta($colcount); -это даст одно имя, вставь цифру

//$keys = array_keys($stmt[0]);
 }
//if(isset($_POST['okok']))
//echo $_POST['tabtab'];

//echo $nametab;
 //if(isset($_POST['okok'])&isset($_POST['tabtab'])){
echo '  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
//$nana='n_2bpm';
echo "  <thead>
                    <tr>
                ";//      <th>";// echo $_POST['tabtab'];
for($i=0;$i<$colcount;$i++)
{// $stmt->getColumnMeta($counter);
echo " <th>"; //echo '1';
//print_r($column[$i]);
$coldot=str_replace('n_','',$column[$i]);
if($i!=0)
$coldot=str_replace('_','.',$coldot);
//echo $coldot;
echo substr($coldot,0,5);


 echo "</th>";
}
$da=date('d_m');
$n='n_';
$da=$n.$da;
//echo " <th>"; echo $da;  echo "</th>";

/*
echo" id</th>
                      <th>FIO</th>
                      <th>record</th>";
*/
echo "                    </tr>
                  </thead>
                  <tfoot>
                    <tr>";
for($i=0;$i<$colcount;$i++)
{// $stmt->getColumnMeta($counter);
echo " <th>"; //echo '1';
//print_r($column[$i]);
$coldot=str_replace('n_','',$column[$i]);
if($i!=0)
$coldot=str_replace('_','.',$coldot);
//echo $coldot;
//echo 'df';
echo substr($coldot,0,5);
 echo "</th>";
}
//echo " <th>"; echo $da; echo "</th>";


        //              <th>id</th>
        //              <th>fio</th>
        //              <th>record</th>

        echo"            </tr>
                  </tfoot>";
echo "    <tbody>"; }
    //     foreach ($pdo->query('SELECT * FROM n_2bpm', PDO::FETCH_ASSOC) as $row) {
/*
$h='';//'n_';

$n_2bpm=$h.$_POST['tabtab'];//'n_2bpm';
if($n_2bpm!='n_'){ echo $n_2bpm;
$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);
} 
$colcount = $stmt->columnCount();
*/
//$npo=$_POST[tabtab];
//$nn='n_'+'s2bpm';//$npo;//+$_POST['tabtab'];//'n_2bpm';
 //foreach ($pdo->query('SELECT * FROM n_2bpm', PDO::FETCH_ASSOC) as $row) {

/*
$stmt = $pdo->prepare('SELECT * FROM ?');
$stmt->execute($_POST['tabtab']);
foreach ($stmt as $row)
{*/
//$n_2bpm='n_2bpm';
//if(isset($_POST['tabtab'])){
//if(isset($_POST['tabtab'])){
//$n_2bpm=$_POST['tabtab'];
//echo $n_2bpm;

$h='';//'n_';
if(isset($_POST['tabtab'])){

$n_2bpm=$h.$_POST['tabtab'];//'n_2bpm';
if($n_2bpm!='n_'){ echo $n_2bpm;
//$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);
$stmt=$pdo->query("SELECT * FROM ".$n_2bpm." WHERE p_id=(SELECT id FROM n_stu_gro_sub WHERE login='".$log."')  ");//, PDO::FETCH_ASSOC);
$stmtFi=$pdo->query("SELECT * FROM n_".$forFi." WHERE id=(SELECT p_id  FROM ".$n_2bpm." WHERE p_id=(SELECT id FROM n_stu_gro_sub WHERE login='".$log."')  ) ");///, PDO::FETCH_ASSOC);
echo'</br>';
foreach ($stmtFi as $rowFi)
{
echo $rowFi[1];
}



$colcount = $stmt->columnCount();

foreach ($stmt as $row)
{


echo " <tr>";
        //    echo"          <td>";print_r($row[0]); echo "</td>
// <td>";print_r($row[1]); echo "</td>";

//foreach ()
for($i=0;$i<$colcount ;$i++)
{
echo "<td>";
if($row[$i]=='-2')
echo '';
elseif($row[$i]=='-3')
echo 'н';
else
print_r($row[$i]);
 echo "</td> ";


}
/*echo "<td>";

print_r('
<select name="Color[][]">
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="н">н</option>


'); */
//$my=0;
//echo '';
//if($k!=0)//
/*if(isset($_POST['Color[0][0]'])&&($_SESSION['e']!=0)){
*/
//if(!empty($_POST['Color'])) {
//$my++;
//$l=$_POST['Color'];
//}
/*$_SESSION['e']=0;
}*/
// echo "</td> ";


        echo "</tr>";


  }}
} // это для if
//}
    echo "         </tbody>";

 echo "</pre>";
//}
               } catch (Exception $e) {
              print $e->getMessage() . "\r\n";
    exit(1);
                }
/*
//if(isset($_POST['sub'])){
if(isset($_POST['addme'])){

//echo $my;
//echo $l[0][0];
//echo $_SESSION['e'];
//echo 'Pro';

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;sslmode=verify-ca;sslrootcert=$sslrootcert;sslkey=$sslkey;sslcert=$sslcert",
'root', null, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => true,
));

 //echo $n_2bpm;


$sqA="ALTER TABLE ".$n_2bpm." ADD COLUMN IF NOT EXISTS ".$da." INTEGER";
$stmt=$pdo->query($sqA);
//echo $sqA;

$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);

$colcount = $stmt->columnCount();
$i=0;

foreach ($stmt as $row)
{

//echo $l[$i][0];
if($l[$i][0]=='')
$in=-2;
elseif($l[$i][0]=='н')
$in=-3;
else
$in=$l[$i][0];

//echo $in; //это наши значения 012н
//echo "SELECT id FROM n_teachers WHERE login='".$log."'";

//echo $_SESSION['login'];
//$stmt=$pdo->query("SELECT id FROM n_teachers WHERE login='".$log."'");
//echo $stmp;
//$sqA="ALTER TABLE ".$n_2bpm." ADD ".$da." INTEGER";
//$sqU="UPDATE ".$n_2bpm." SET ".$da."='".$in."' WHERE p_id='".$row[0]."'";
//echo $sqU;
//$stmt=$pdo->query($sqU);

$i++;


}

} catch (Exception $e) {
print $e->getMessage() . "\r\n";
exit(1);
}



} //это к if sub/addme
*/

echo '</form>';

}// else echo 'You are not a student';
 else echo 'Вы не студент!';



 ?>
                </table>
              </div>
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
            <span> nigora &copy; Haitaliev's Website <?php echo date('d-m-Y');?></span>
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
