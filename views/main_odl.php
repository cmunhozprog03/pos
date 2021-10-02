<?php
include('modules/header.php');
?>

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed dark-mode">
  <div class="wrapper">

    <?php
    include("modules/nav.php");
    ?>

    <?php
      include("modules/sidebar.php");
    ?>
    
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">




          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include("modules/footer.php"); ?>

    <?php include("modules/sidebarControl.php"); ?>


  </div>
  <!-- ./wrapper -->

  <!-- SCRIPTS ADMINLTE -->
  <?php
  include("modules/scripts.php");
  ?>

</body>

</html>