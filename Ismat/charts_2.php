<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Панель управления администратора -Диаграммы</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tab_display_2.php">
       <div class="sidebar-brand-icon rotate-n-15">
    <!--     <img class="mb-4" src="https://cs8.pikabu.ru/post_img/2016/03/30/7/1459335471159744122.jpg" alt="" width="60" height="60"> -->
 <i class="fas fa-laugh-wink"></i>
        </div> 
        <div class="sidebar-brand-text mx-3">группа Хайталиева <sup>администратор</sup></div>
      </a>

      <!-- Divider 
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
    Панель управления    <!--Приборная панель-->
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
            <a class="collapse-item" href="examplescsv.php"><pre>Примеры файлов csv для вставки данных</pre></a>
            <a class="collapse-item" href="json_examples.php"><pre>Примеры вывода json-данных</pre></a>
            <a class="collapse-item" href="json_examples_im_watching_you.php"><pre>Просмотр API деятельности на json</pre></a>
    <!--        <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
            <a class="collapse-item" href="tab_create_and_insert.php">Вставка данных и/или <p>создание таблицы</p></a>
<!--
            <a class="collapse-item" href="tab.php">Tab_1</a>
            <a class="collapse-item" href="tab_2.php">Tab_2</a>
            <a class="collapse-item" href="tab_3.php">Tab_3</a>
            <a class="collapse-item" href="tab_4.php">Tab_4</a> -->


            <div class="collapse-divider"></div>
        <!--    <h6 class="collapse-header">Другие страницы:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
    -->      </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts_2.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Диаграммы</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tab_display_2.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Таблицы</span></a>
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
    <!--     End of Topbar

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Успеваемость</h1>
          <p class="mb-4">Выберете таблицу с группой и ее предметом. Выберете дату показа в формате "мм/дд/гггг".  </a> <!--DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Диаграмма с областями</h6>
            </div>
            <div class="card-body">
           <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
            
<!--  <h4 class="card-title">Area chart</h4>
  <canvas id="areaChart" style="height:250px"></canvas> -->
  <script src="chartsjs/vendor.bundle.base.js"></script>  <!-- StarAdmin-Free-Bootstrap-Admin-Template-master -это второй пример-->
  <script src="chartsjs/vendor.bundle.addons.js"></script>
<?php $var = "201"; ?>

<?php $varb[] = [3 ,3]; ?>

<!--
 <script>

$(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: ["2012", "20124", "2014", "2015", "2016", "2017"],
    datasets: [{
      label: '# of Votes',
      data: [<?php echo '10';?>, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };
  var multiLineData = {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2, 3],
        borderColor: [
          '#587ce4'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 2',
        data: [5, 23, 7, 12, 42, 23],
        borderColor: [
          '#ede190'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 3',
        data: [15, 10, 21, 32, 12, 33],
        borderColor: [
          '#f44252'
        ],
        borderWidth: 2,
        fill: false
      }
    ]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  var doughnutPieData = {
    datasets: [{
      data: [30, 40, 30],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Pink',
      'Blue',
      'Yellow',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var browserTrafficData = {
    datasets: [{
      data: [20, 20, 10, 30, 20],
      backgroundColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(75, 192, 117, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(75, 192, 117, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Firefox',
      'Safari',
      'Explorer',
      'Chrome',
      'Opera Mini'
    ]
  };
var a = "<?php echo $var; ?>";
var b = "<?php echo $varb; ?>";
    var arr = [ "'Sarray,'", "elements,", "here" ];


  var areaData = {
labels: [<?php for($i=0;$i<3;$i++) echo '20,';?>],
 /*  labels: ["201", arr, a, "2015", "2016", "2017"],*/
/*   labels: [<?php echo '2011'; ?>,"2014", "2015", "2016", "2017"],*/
/*    labels: [<?php for($i=0;$i<4;$i++){ echo '201'.$i,',';}?>],*/
    
    datasets: [{
      label: 'Присутствовали',
///      data: [/*<?php echo '1,2,3,1,2';?>*/<?php for($i=1;$i<5;$i++){$z=''.$i.'';echo $z.',';/*echo '3,2';*/}?>/*<?php echo '11';?>,19, 3,5,2*/],
     // data: [12, 19, 3, 5, 2, 3],
 data: [b, 19, 3, 5, 2, 3], // 0-для того,которого нет в графике, чтобы было с меньшего


      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: 'origin', // 0: fill to 'origin'
    /*  fill: '+2', // 1: fill to dataset 3
      fill: 1, // 2: fill to dataset 1
      fill: false, // 3: no fill
      fill: '-2' // 4: fill to dataset 2
*/    }]
  };

  var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var multiAreaData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Facebook',
        data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
        borderColor: ['rgba(255, 99, 132, 0.5)'],
        backgroundColor: ['rgba(255, 99, 132, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Twitter',
        data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
        borderColor: ['rgba(54, 162, 235, 0.5)'],
        backgroundColor: ['rgba(54, 162, 235, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Linkedin',
        data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
        borderColor: ['rgba(255, 206, 86, 0.5)'],
        backgroundColor: ['rgba(255, 206, 86, 0.5)'],
        borderWidth: 1,
        fill: true
      }
    ]
  };

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: 'First Dataset',
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Second Dataset',
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom'
      }]
    }
  }
  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }

  if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
  }

  if ($("#linechart-multi").length) {
    var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
    var lineChart = new Chart(multiLineCanvas, {
      type: 'line',
      data: multiLineData,
      options: options
    });
  }

  if ($("#areachart-multi").length) {
    var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
    var multiAreaChart = new Chart(multiAreaCanvas, {
      type: 'line',
      data: multiAreaData,
      options: multiAreaOptions
    });
  }

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#areaChart").length) {
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaData,
      options: areaOptions
    });
  }

  if ($("#scatterChart").length) {
    var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
    var scatterChart = new Chart(scatterChartCanvas, {
      type: 'scatter',
      data: scatterChartData,
      options: scatterChartOptions
    });
  }

  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }
});

 </script>

-->

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<!--<input class="daterangepicker-field"  name="mytime"></input> //после формы вставляй
<script>$(".daterangepicker-field").daterangepicker({
  forceUpdate: true,
 callback: function(startDate, endDate, period){
   var title = startDate.format('L') + ' – ' + endDate.format('L');
$(this).val(title) 


  }

});
</script>
-->
<!--<input class="form-control" name='mytime' type="text" placeholder="Введите в формате: 05.04-06.07">
-->

    <?php
session_start();
$diarr=array();
$sum=array();
if($_SESSION['check']==0){
//echo '<input  class="form-control"  name="mytime" type="text" placeholder="Введите в формате: 05.04-06.07">';

//$pd=$_POST["mytime"];
//echo $pd;
//if(isset($_POST['mytime'])){$pd=$_POST['mytime'];
//echo $pd;}
/* $pd='<script>alert($(".daterangepicker-field").daterangepicker({
  forceUpdate: true,
 callback: function(startDate, endDate, period){
   var title = startDate.format("L")  + endDate.format("L");
$(this).val(title).


  }

});
)</script>'
;echo $pd;*///} else echo 's';
// echo '<script>alret(title)</script>';
//echo '<script>  document.write($(this).val(title));
//</script>';
if(isset($_POST['mytime'])) echo $_POST['mytime'].'</br>';
//echo '<input type="date" class="form-control" class="mydate" name="date" placeholder="Дата">';
//echo '<input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>';
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
echo '<form action="charts_2.php" method="post">';
//echo '<form  method="post">';
//echo '<input  class="form-control"  name="mytime" type="text" placeholder="Введите в формате: 05.04-06.07">';

echo '<input  class="daterangepicker-field" size="53%" name="mytime"></input> 
<script>$(".daterangepicker-field").daterangepicker({
  forceUpdate: true,
 callback: function(startDate, endDate, period){
 var title = startDate.format("L") + " – " + endDate.format("L");
$(this).val(title)


  }

});
</script> ';

echo '<div class="radio">
  <label><input type="radio" name="optradio"> Вывести за все время</label>
</div>';


/*echo '<div class="form-group" name="calendar">
    <label for="inputDate">Введите дату:</label>
    <input type="date" class="form-control">
  </div>';
*/
/*  <label for="action">Options:</label>
  <select name="action" id="action">
    <option value="help">Help</option>
    <option value="reset">Reset</option>
    <option value="submit">Submit</option>
  </select> */
 echo '<button type="submit" class="btn btn-primary"  name="sub" value="1">Вывести выбранное</button>';
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


foreach ($pdo->query("SELECT * FROM n_tec_gro_sub  "/*, PDO::FETCH_ASSOC*/) as $row) {
//foreach ($pdo->query("SHOW TABLES  ", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query("dt", PDO::FETCH_ASSOC) as $row) {
//foreach ($pdo->query('SELECT  gro FROM n_tec_gro_sub GROUP BY gro', PDO::FETCH_ASSOC) as $row) {
//if(strstr($row['Table'], '_',true)=='n'){

echo'<option value="';
// print_r($row['gro']);
//print_r($row['Table']);
print_r('n_2018_2019_'.$row['gro'].'_'.$row['sub']);


  echo '">';
 echo "<pre>";// print_r($row['gro']);
//print_r($row['Table']);
print_r('n_2018_2019_'.$row['gro'].'_'.$row['sub']);

 echo'</option>'; echo "</pre>";
//} //это strstr
}
echo '</select>';
echo '</form>';
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

if($n_2bpm!='n_'){// echo $n_2bpm;
$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);
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
echo $coldot;
/*if($coldot>'28.04')//$_POST['suc'])
echo 'd';
else echo 'n';*/
//if(isset($_POST['calendar'])) echo $_POST['calendar'];
 echo "</th>";
}
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
$coldot=substr($coldot,0,5);


echo $coldot;
if($i!=0)
$diarr[]=$coldot;
/*if($coldot<'28.04')
echo 'd';
else echo 'n';*/

 echo "</th>";
}

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
if(isset($_POST['tabtab'])||(isset($_POST['tabtab'])&&isset($_POST['mytime']))){

$n_2bpm=$h.$_POST['tabtab'];//'n_2bpm';
if($n_2bpm!='n_'){ echo $n_2bpm; if(isset($_POST['mytime'])) {//echo $_POST['mytime'];
$mytime=$_POST['mytime'];
$myfi=strstr($mytime,' - ',true);
//echo $myfi;
$mytw=strstr($mytime,' - ');
$myfim=substr($myfi,0,2);
$myfid=substr($myfi,3,2);

$mytwd=substr($mytw,6,2);
$mytwm=substr($mytw,3,2);
echo '</br>'.$myfid.'.'.$myfim.'</br>';

echo $mytwd.'.'.$mytwm;

$first=$myfid.'.'.$myfim;

$two=$mytwd.'.'.$mytwm;


}

$stmt=$pdo->query('SELECT * FROM '.$n_2bpm.' ');//, PDO::FETCH_ASSOC);



$colcount = $stmt->columnCount();
$adso=array();
foreach ($stmt as $row)
{


echo " <tr>";
        //    echo"          <td>";print_r($row[0]); echo "</td>
// <td>";print_r($row[1]); echo "</td>";

//foreach ()
for($i=0;$i<$colcount ;$i++)
{$sun[$i]=0;
echo "<td>";

print_r($row[$i]);/*echo $i;*/ ;echo "</td> ";
$adso[$i]=$adso[$i]+1;
if($i!=0){
//if(($row[$i]!='0')){ // почему-то ноль он считает
if((($row[$i]=='н')||($row[$i]=='-3'))&&($row[$i]!='0'))
$sum[$i]=$sum[$i]-1;
elseif((($row[$i]=='')||($row[$i]=='-2')||($row[$i]=='2')||($row[$i]=='1')||($row[$i]=='0'))||(($row[$i]!='н')||($row[$i]!='-3')))
$sum[$i]=$sum[$i]+1;//}
//echo $sum[$i];
/* }else {
if(($row[$i]=='н')||($row[$i]=='-3'))
$sum[$i]=$sum[$i]-1;
elseif(($row[$i]=='')||($row[$i]=='-2'))
$sum[$i]=$sum[$i]+1;
*/
}
} //echo $sum[4];


        echo "</tr>";


  }}// echo $sum;
} // это для if
//}
    echo "         </tbody>";

 echo "</pre>";
//}
echo '
 <script>

$(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  "use strict";
  var data = {
    labels: ["2013", "2012", "2014", "2015", "2016", "2017"],
    datasets: [{
      label: "# of Votes",
      data: [10, 19, 3, 5, 2, 3],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(255,99,132,1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)"
      ],
      borderWidth: 1
    }]
  };
  var multiLineData = {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: "Dataset 1",
        data: [12, 19, 3, 5, 2, 3],
        borderColor: [
          "#587ce4"
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: "Dataset 2",
        data: [5, 23, 7, 12, 42, 23],
        borderColor: [
          "#ede190"
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: "Dataset 3",
        data: [15, 10, 21, 32, 12, 33],
        borderColor: [
          "#f44252"
        ],
        borderWidth: 2,
        fill: false
      }
    ]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  var doughnutPieData = {
    datasets: [{
      data: [30, 40, 30],
      backgroundColor: [
        "rgba(255, 99, 132, 0.5)",
        "rgba(54, 162, 235, 0.5)",
        "rgba(255, 206, 86, 0.5)",
        "rgba(75, 192, 192, 0.5)",
        "rgba(153, 102, 255, 0.5)",
        "rgba(255, 159, 64, 0.5)"
      ],
      borderColor: [
        "rgba(255,99,132,1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)"
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      "Pink",
      "Blue",
      "Yellow",
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var browserTrafficData = {
    datasets: [{
      data: [20, 20, 10, 30, 20],
      backgroundColor: [
        "rgba(255,99,132,1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(75, 192, 117, 1)",
        "rgba(255, 159, 64, 1)"
      ],
      borderColor: [
        "rgba(255,99,132,1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(75, 192, 117, 1)",
        "rgba(255, 159, 64, 1)"
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      "Firefox",
      "Safari",
      "Explorer",
      "Chrome",
      "Opera Mini"
    ]
  };
  var areaData = {
    labels: [
 
'; 
//$diarr=[1,2,3];
//$diarr[]=4;
//$diarr[]=$coldot;
$dd=0;
$ddd=array();
foreach ($diarr as $di)
{//if(isset($_POST['mytime']))
$dim=substr($di,3,2);
$did=substr($di,0,2);
$dd++;
if(!isset($_POST['optradio'])){
//if(($myfim<$dim)&&($mytwm>$dim)){ //смотреть только для одного года, иначе ошибки - у нас таблицы и так, для одного
//if(($myfid<$did)&&($mytwd>$did)){
if((($myfim<=$dim)&&($mytwm>=$dim))){
if(($first-1<=$did)&&($two>=$did)){
echo '"'.$di.'",';
$ddd[]=$dd; //это даст номер тех, кто прошел
}}
} else  echo '"'.$di.'",';

}
//echo '3';
//echo ',4,5';
//for($i=0;$i<3;$i++)
//echo '200'.$i.',';
 echo' ],
    datasets: [{
      label: "Присутствовали",
      data: [';
//12, 19, 3, 5, 2, 3
//for($i=1;$i<5;$i++){
//for($i=0;$i<$colcount ;$i++){
//for($ii=1;$ii<$colcount ;$ii++){ //требует дополнительный  столбец
for($ii=1;$ii<$colcount ;$ii++){ //требует дополнительный  столбец
if(!isset($_POST['optradio'])){
foreach($ddd as $dddd)
if($ii==$dddd){
//if($ii=$ddd[$ii]){
//echo '"'.$sum[1].'",';
//echo '3,';
//echo $adso[1].',';
if($sum[$ii]>0){
echo ''.$sum[$ii].','; }
else echo '0,';
//echo '-5,16';
//echo ''.$ii.',';
}//ddd
}else{
if($sum[$ii]>0){
echo ''.$sum[$ii].','; }
else echo '0,';
}
}
 if(count($ddd)==0)echo '0,0'; if(count($ddd)>=2){ echo '0,'; echo $adso[1];} //этих не видно, но они от нуля до всего количества студентов группы

echo '],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(255,99,132,1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)"
      ],
      borderWidth: 1,
     //fill: "origin", // 0: fill to "origin"
     // fill: "+2", // 1: fill to dataset 3
     // fill: 1, // 2: fill to dataset 1
      //fill: false, // 3: no fill 
      //fill: "-2" // 4: fill to dataset 2
    }]
  };

  var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var multiAreaData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: "Facebook",
        data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
        borderColor: ["rgba(255, 99, 132, 0.5)"],
        backgroundColor: ["rgba(255, 99, 132, 0.5)"],
        borderWidth: 1,
        fill: true
      },
      {
        label: "Twitter",
        data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
        borderColor: ["rgba(54, 162, 235, 0.5)"],
        backgroundColor: ["rgba(54, 162, 235, 0.5)"],
        borderWidth: 1,
        fill: true
      },
      {
        label: "Linkedin",
        data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
        borderColor: ["rgba(255, 206, 86, 0.5)"],
        backgroundColor: ["rgba(255, 206, 86, 0.5)"],
        borderWidth: 1,
        fill: true
      }
    ]
  };

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: "First Dataset",
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)"
        ],
        borderColor: [
          "rgba(255,99,132,1)"
        ],
        borderWidth: 1
      },
      {
        label: "Second Dataset",
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          "rgba(54, 162, 235, 0.2)",
        ],
        borderColor: [
          "rgba(54, 162, 235, 1)",
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: "linear",
        position: "bottom"
      }]
    }
  }
  // Get context with jQuery - using jQuery"s .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: "bar",
      data: data,
      options: options
    });
  }

  if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data,
      options: options
    });
  }

  if ($("#linechart-multi").length) {
    var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
    var lineChart = new Chart(multiLineCanvas, {
      type: "line",
      data: multiLineData,
      options: options
    });
  }

  if ($("#areachart-multi").length) {
    var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
    var multiAreaChart = new Chart(multiAreaCanvas, {
      type: "line",
      data: multiAreaData,
      options: multiAreaOptions
    });
  }

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: "doughnut",
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: "pie",
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#areaChart").length) {
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: "line",
      data: areaData,
      options: areaOptions
    });
  }

  if ($("#scatterChart").length) {
    var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
    var scatterChart = new Chart(scatterChartCanvas, {
      type: "scatter",
      data: scatterChartData,
      options: scatterChartOptions
    });
  }

  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: "doughnut",
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }
}); 
 </script>
';

               } catch (Exception $e) {
              print $e->getMessage() . "\r\n";
    exit(1);
                }
}// else echo 'You are not an administrator';
 else echo 'Вы не администратор!';


 ?>
             <h4 class="card-title"><!--Area chart --></h4>
 <canvas id="areaChart" style="height:250px"></canvas>
 <!-- <h4 class="card-title">Line chart</h4>-->
    <!--     <canvas id="lineChart" style="height:250px"></canvas> -->


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
