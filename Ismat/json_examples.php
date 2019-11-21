

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JSON</title>

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
        <div class="sidebar-brand-text mx-3"> Группа Хайталиева  <sub> администратор</sub></div>
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
            <h6 class="collapse-header">Страницы для администратора:</h6>
            <a class="collapse-item" href="login.php">Авторизация</a>
            <a class="collapse-item" href="register.php"><pre>Регистрация пользователей</pre></a>
            <a class="collapse-item" href="examplescsv.php">Примеры файлов csv</a>
            <a class="collapse-item" href="json_examples.php"><pre>Примеры вывода json-данных</pre></a>
            <a class="collapse-item" href="json_examples_im_watching_you.php"><pre>Просмотр API деятельности на json</pre></a>
<!--            <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
            <a class="collapse-item" href="tab_create_and_insert.php"><!--tab_create_and_insert</a>-->Вставка данных и/или <p>создание таблицы</p></a>

    <!--    <a class="collapse-item" href="tab.php">Tab_1 // ученики и их данные</a> 
            <a class="collapse-item" href="tab_2.php">Tab_2 // день и  3,4,5,н, присутствовал = путсое место</a>
            <a class="collapse-item" href="tab_3.php">Tab_3 // загузка учителей и их паролей -пожоже на таблицу a_t_s, но здесь только полная информация об учителе + нет об студентах (у них другая) и администаторах</a>
            <a class="collapse-item" href="tab_4.php">Tab_4 // учитель-группа-предмет</a> 
-->

            <div class="collapse-divider"></div>
    <!--        <h6 class="collapse-header">Другие страницы:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        -->  </div>
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
          <h1 class="h3 mb-2 text-gray-800">Ссылки</h1>
          <p class="mb-4"><!--DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.--></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Примеры запросов<!--таблиц--> в формате 'json'</h6>
            </div>
            <div class="card-body">



<?php
session_start();
if($_SESSION['check']==0){
//    echo   "<td>";
//echo 'Эти ссылки возвращают данные в json.';
/*
echo " <a href='token2.php?login=te_l@yandex.ru&pass=te_p'>token2.php?login=te_l@yandex.ru&pass=te_p - это передает токен, его время жизни вам  по вашему логину и паролю. Эта первая ссылка, при помощи которой вы получите токен и вы сможете выполнять свои операции 30-ть минут. (Для нижних эта ссылка дает code - то, что вместо логина и пароля позволяет выполнять действия )</a> </br>";
echo '<br>';

echo " <a href='json_2_tec_schedule.php?code=3377bb9a2ab1fcbac36ac58641e07d8b8f6c26ca'>json_2_tec_schedule.php?code=3377bb9a2ab1fcbac36ac58641e07d8b8f6c26ca - это передает расписание учителя по его токену(Я обозначил не как token, а как code).</a> </br>";
echo " <a href='json_teach_2.php?code=3377bb9a2ab1fcbac36ac58641e07d8b8f6c26ca&gro=2bpm&sub=DB'>json_teach_2.php?code=3377bb9a2ab1fcbac36ac58641e07d8b8f6c26ca&gro=2bpm&sub=DB - успеваемость студентов, которую видит учитель. Передается логин и пароль учителя, а также группа и ее предмет (дает просмотр только в этом году). Эта ссылка даст нетолько успеваемость студентов с днями посещения, но и их ФИО, которые последние элементы в подмассивах.</a> </br>";
echo " <a href='json_teach_2_get_one.php'>json_teach_2_get_one.php -ее я оставил без параметров, иначе вы введете данные, т.к. она для вставки данныx в таблицу по логину и паролю учителя с вводом группы и ее предмета, а также var[p_id]=значение  - вместо  p_id ставим цифру-номер(, но не обязательно нужную, т.к. система может все исправить - главное, чтобы они были по порядку и число переменных равнялось числу студентов в группе по предмету), а вместо значения ставим 0,1,2,-2,-3 - здесь -2 это '' - присутсвие, а -3 - это 'н' - отсутствие на паре. Выглядит это так: json_teach_2_get_one.php?code=2d82aae2860a670c7e481af8f592a5f41bfb734e&gro=2bpm&sub=DB&var[0]=0&var[1]=1&var[2]=2&var[3]=-2&var[4]=-3&var[5]=-2&var[6]=-2&var[7]=-2&var[8]=-2&var[9]=-2&var[10]=-2&var[11]=-2&var[12]=-2&var[13]=-2&var[14]=-2&var[15]=-2&var[16]=-2&var[17]=-2&var[18]=-2&var[19]=-2&var[20]=-2&var[21]=-2&var[22]=-2&var[23]=-3 . Система сама определить не только то, что можете ли, но и можете ли вы сейчас это сделать(согласно расписанию), если 'да', то вы вставите данные за сегодня за эту пару.</a> </br>";
echo " <a href='json_schedule_2.php?code=c856cd16d03fa4596e4916885901f2068b1bd3cb'>json_schedule_2.php?code=c856cd16d03fa4596e4916885901f2068b1bd3cb - расписание студента по его токену.(Напомню, что сначал нужно использовать первую ссылку, передав в нее логин и пароль, получив свой code(token -токен, но назвал code), а потом остальные). </a> </br>";
echo "<hr>Система проверяет полученные данные из HTTP запроса и отправляет результат в формате json. Для получения запроса из ссылки система использует GET.  </hr>";


*/// *
echo " <a href='json_2_tec_schedule.php?login=te_l@yandex.ru&password=te_p'>json_2_tec_schedule.php?login=te_l@yandex.ru&password=te_p - это передает расписание учителя по его логину и паролю.</a> </br>";
echo " <a href='json_teach_2.php?login=te_l@yandex.ru&password=te_p&gro=2bpm&sub=DB'>json_teach_2.php?login=te_l@yandex.ru&password=te_p&gro=2bpm&sub=DB - 
 успеваемость студентов, которую видит учитель. Передается логин и пароль учителя, а также группа и ее предмет (дает просмотр только в этом году). Эта ссылка даст не 
только успеваемость студентов с днями посещения, но и их ФИО, которые последние элементы в подмассивах.</a> </br>";
echo " <a href='json_teach_2_get_one.php'>json_teach_2_get_one.php -ее я оставил без параметров, иначе вы введете данные, т.к. она для вставки данныx в таблицу по логину
 и паролю учителя с вводом группы и ее предмета, а также var[p_id]=значение  - вместо  p_id ставим цифру-номер(, но не обязательно нужную, т.к. система может все исправить
 - главное, чтобы они были по порядку и число переменных равнялось числу студентов в группе по предмету), а вместо значения ставим 0,1,2,-2,-3 - здесь -2 это '' - присутсвие,
 а -3 - это 'н' - отсутствие на паре. Выглядит это так: json_teach_2_get_one.php?login=55577@gmail.ru&password=123&gro=2bpm&sub=DB&var[0]=0&var[1]=1&var[2]=2&var[3]=-2&var[4]
=-3&var[5]=-2&var[6]=-2&var[7]=-2&var[8]=-2&var[9]=-2&var[10]=-2&var[11]=-2&var[12]=-2&var[13]=-2&var[14]=-2&var[15]=-2&var[16]=-2&var[17]=-2&var[18]=-2&var[19]=-2&var[20]=-2
&var[21]=-2&var[22]=-2&var[23]=-3 . Система сама определить не только то, что можете ли, но и можете ли вы сейчас это сделать(согласно расписанию), если 'да', то вы вставите данные за сегодня за эту пару.</a> </br>";
echo " <a href='json_schedule_2.php?login=st_l@yandex.ru&password=st_p'>json_schedule_2.php?login=st_l@yandex.ru&password=st_p - расписание студента по его логину и студенту. </a> </br>";
echo "<hr>Система проверяет полученные данные из HTTP запроса и отправляет результат в формате json. Для получения запроса из ссылки система использует GET.  </hr>";
// * /
/*
header("Content-Disposition: attachment; filename='examples/n_teachers.txt'");  
header("Content-type: application/octet-stream");  
echo file_get_contents('examples/n_teachers.txt');
*/
/*
// Имя скачиваемого файла
$file = "examples/n_teachers.txt";

// Контент-тип означающий скачивание
header("Content-Type: application/octet-stream");

// Размер в байтах
header("Accept-Ranges: bytes");

// Размер файла
header("Content-Length: ".filesize($file));

// Расположение скачиваемого файла
header("Content-Disposition: attachment; filename=".$file);  

// Прочитать файл
readfile($file);
*/
/*$file = 'study.php';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}*/

/*
$attachment_location = "examples/n_teachers.txt";
//header("Location: examples/n_teachers.txt");

if (file_exists($attachment_location)) {

    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public"); // needed for internet explorer
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($attachment_location));
    header("Content-Disposition: attachment; filename=filePath");
    readfile($attachment_location);
    die();
} else {
    die("Error: File not found.");
}*/
/*
$file = 'examples/n_teachers.txt';

if(isset($_POST['fi'])){
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
}
*/
/*
$size = filesize("examples/n_teachers.txt");

header('Content-Description: File Transfer');
//header('Content-Type: image/png');
header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment; filename="n_teachers.txt"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
//header('Cache-Control: must-revalidate, post-check=0, pre-check=0');   
 header('Cache-Control: must-revalidate');

header('Pragma: public');
header('Content-Length: ' . $size);
readfile("examples/n_teachers.txt");
*/
/* $f='csvexample/'.'n_2bpm';
//$f='examples/n_teachers.txt';
if(file_exists($f)){

echo	 "<!--<a  href='C:/wamp64/www/upload/$row[5]' download> Download $row[5] </a>
<a  href='http://localhost/upload/'.row[5].' download> Download $row[5] </a> --!>
<a  href='http://localhost/downloaduser/$row[9]' download> Download $row[9] </a>

    "; 
    $lq='http://localhost/downloaduser/'.$row[9].'';

 $f='C:/wamp64/www/downloaduser/'.$row[9];
if(file_exists($f)&&(isset($_POST[$lq]))){ //((isset($_GET['C:/wamp64/www/upload/$row[5]'])))){   
  header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($f));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($f));
readfile($f);	}
else echo '<p>'.$lq.'</p>';


}
else echo 'Файл : '.$row[9]' - не существует больше';
//    echo "</td>";

*/ 
}// else echo 'You are not an administrator';
 else echo 'Вы не администратор!';


?> 

<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="examplescsv.php" method="POST">
<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
<!-- Название элемента input определяет имя в массиве $_FILES -->
<!--Отправить этот файл: <input name="userfile" type="file" />
<input type="submit"name="fi" value="Отправить файл" />  -->
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
            <span> nigora &copy; Haitaliev&#39s website <?php echo date('d-m-Y');?></span>
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
