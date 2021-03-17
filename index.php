<?php
  include_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>ContactAR</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <li class="nav-item">
        
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
          <div class="mx-3"><span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></span></div>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home" style="font-size: large;"></i>
          <span style="font-size: large;">Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" style="margin-top: -5px;">

      <!-- Heading -->
      <div class="sidebar-heading">
        Acciones
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-arrow-alt-circle-up" style="font-size: large;"></i>
          <span>Cargar datos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cargar.html">Nuevo usuario</a>
            <a class="collapse-item" href="search.html">Cambiar estado usuario</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-broadcast-tower" style="font-size: medium;"></i>
          <span>Trazabilidad</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="solicitar.html">Solicitar id</a>
            <a class="collapse-item" href="new.html">Generar trazabilidad</a>
          </div>
        </div>
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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <nav class="navbar navbar-light">
          <a href="index.php">
          <span class="navbar-brand mb-0 h1 link" style="padding-top: 7px;"><img src="img/recortado.png" style="width:280px;height:50px;"></span>
          </a>
          </nav>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="padding-right: 15px" class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario Ejemplo</span>
                <img class="img-profile rounded-circle" src="img/perfil.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dispositivos activos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                      $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
                      $result = $mysqli->query("SELECT cant_receptores FROM receptores ORDER BY cant_receptores DESC LIMIT 1");
                        $resultCheck = $result->num_rows;
                      if ($resultCheck > 0) {
                        $receptores = $result->fetch_assoc();
                        echo $receptores['cant_receptores'];
                      }else{
                        echo "0";
                      }
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rss fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pulseras funcionando</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $result = $mysqli->query("SELECT COUNT(*) AS cant_puls FROM usuarios");
                        $resultCheck = $result->num_rows;
                        if ($resultCheck > 0) {
                          $pulseras = $result->fetch_assoc();
                          echo $pulseras['cant_puls'];
                        }else{
                          echo "0";
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i  class="icon-logo fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Porcentaje infectados</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                        <?php
                        $result = $mysqli->query("SELECT COUNT(*) AS infect FROM usuarios WHERE infectado = 1");
                        $resultCheck = $result->num_rows;
                        if ($resultCheck > 0) {
                        $row = $result->fetch_assoc();
                        $porc = $row['infect']/$pulseras['cant_puls']*100;
                        $porc = round($porc);
                        echo $porc."%";
                        }else{
                          echo "0%";
                        }
                        ?>
                        </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $porc?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-head-side-cough fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Usuarios inmunes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-head-side-mask fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Curva de infectados</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Causas de aislamiento</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Covid
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Contacto directo
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Aislamiento preventivo
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              
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
            <span>Copyright &copy; ContactAR 2020</span>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
  function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
  }
  var ctx = document.getElementById("myAreaChart");
  var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php
    function semanaAtras($dia){
      $actual = $dia - 604800;
      $t1 = date('d/m', $actual);
      return array ($actual, $t1);
    }
      $hoy = getdate();
      $cero = date('d/m', $hoy[0]);
      $pri = semanaAtras($hoy[0]);
      $seg = semanaAtras($pri[0]);
      $ter = semanaAtras($seg[0]);
      $cua = semanaAtras($ter[0]);
      $cin = semanaAtras($cua[0]);
      echo '"'.$cua[1].'", "'.$ter[1].'", "'.$seg[1].'", "'.$pri[1].'", "'.$cero.'"';
      ?>],
    datasets: [{
      label: "Infectados",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [
        <?php
        $nueHoy = date('Y-m-d H:i:s', $hoy[0]);
        $nuePri = date('Y-m-d H:i:s', $pri[0]);
        $nueSeg = date('Y-m-d H:i:s', $seg[0]);
        $nueTer = date('Y-m-d H:i:s', $ter[0]);
        $nueCuar = date('Y-m-d H:i:s', $cua[0]);
        $nueCin = date('Y-m-d H:i:s', $cin[0]);
        $inter = $mysqli->query("SELECT COUNT(DISTINCT uid_contagiado) AS inf FROM contagios WHERE hora_contagio BETWEEN '".$nueCin."' AND '".$nueCuar."'");
        $uno = $inter->fetch_assoc();
        $inter = $mysqli->query("SELECT COUNT(DISTINCT uid_contagiado) AS inf FROM contagios WHERE hora_contagio BETWEEN '".$nueCuar."' AND '".$nueTer."'");
        $dos = $inter->fetch_assoc();
        $inter = $mysqli->query("SELECT COUNT(DISTINCT uid_contagiado) AS inf FROM contagios WHERE hora_contagio BETWEEN '".$nueTer."' AND '".$nueSeg."'");
        $tres = $inter->fetch_assoc();
        $inter = $mysqli->query("SELECT COUNT(DISTINCT uid_contagiado) AS inf FROM contagios WHERE hora_contagio BETWEEN '".$nueSeg."' AND '".$nuePri."'");
        $cuatro = $inter->fetch_assoc();
        $inter = $mysqli->query("SELECT COUNT(DISTINCT uid_contagiado) AS inf FROM contagios WHERE hora_contagio BETWEEN '".$nuePri."' AND '".$nueHoy."'");
        $cinco = $inter->fetch_assoc();
        echo $uno['inf'].", ".$dos['inf'].", ".$tres['inf'].", ".$cuatro['inf'].", ".$cinco['inf'];
        ?>
      ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
  });
  </script>
  <script>
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Covid", "Contacto directo", "Aislamiento preventivo"],
      datasets: [{
        data: [<?php
          $result_uno = $mysqli->query("SELECT COUNT(*) AS contact FROM usuarios WHERE infectado = 2");
          $checkU = $result->num_rows;
          if ($checkU > 0) {
            $directo = $result_uno->fetch_assoc();
          }else{
            $directo['contact'] = 0;
          }
          $result_dos = $mysqli->query("SELECT COUNT(*) AS aisl FROM usuarios WHERE infectado = 3");
          $checkD = $result_dos->num_rows;
          if ($checkD > 0) {
            $aisl = $result_dos->fetch_assoc();
          }else{
            $aisl['aisl'] = 0;
          }
          echo "[".$row['infect']."], [".$directo['contact']."], [".$aisl['aisl']."]";
          ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 0,
  },
  });
  </script>
</body>

</html>
