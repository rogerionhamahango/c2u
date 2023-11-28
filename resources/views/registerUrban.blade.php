<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C2U | Cadastro Único Urbano</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C2U</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/logoSUR.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Logged name</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Functions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="search" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Find Urban by name</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Find Urban by document number</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Find Urban by telephone</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Regist Urban</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">C2U </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="Enter full name">
                  </div>
                  <label >
                        <b>Gender<b>
                        </label>
                  <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="male">
                    <label class="form-check-label" for="male">
                        Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="famele" checked>
                        <label class="form-check-label" for="famele">
                            Famele
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other">
                        <label class="form-check-label" for="other">
                            Other
                        </label>
                        </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Place of birth</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Place of birth">
                  </div>
                  <div class="card-body">

                  <div class="form-group">
                    <label for="birthday">Birth day</label>
                    <input type="date" name="birthday" class="form-control" id="birthday" requied>
                  </div>
                  <div class="form-group">
                        <label>Marital status</label>
                        <select class="form-control">
                          <option>Select marital status</option>
                          <option>SINGLE</option>
                          <option>MARRIED</option>
                          <option>DIVORCED</option>
                          <option>WIDOWER</option>
                          <option>WIDOW</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Document type</label>
                        <select class="form-control">
                          <option>Select document type</option>
                          <option>B.I</option>
                          <option>PASSPORT</option>
                          <option>DIRE</option>
                          <option>DRIVING LICENCE</option>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="docnumber">Number of document</label>
                    <input type="password" name="docnumber" class="form-control" id="docnumber" placeholder="Insert document number">
                  </div>
                  <div class="form-group">
                    <label for="nuit">NUIT</label>
                    <input type="password" name="nuit" class="form-control" id="nuit" placeholder="Insert NUIT">
                  </div>
                  <div class="form-group">
                    <label>Academic degre complete</label>
                    <div class="form-group">
                        <select class="form-control">
                          <option>Whats your acedemic degre</option>
                          <option>Basic level SNE</option>
                          <option>Basic level Technical education</option>
                          <option>High school SNE</option>
                          <option>High school technical education</option>
                          <option>Higher level degree</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="cellphone1">Cellphone number</label>
                    <input type="text" name="cellphone1" class="form-control" id="cellphone1" placeholder="Insert cellphone number">
                  </div>
                  <div class="form-group">
                    <label for="cellphone2">Altenative cellphone</label>
                    <input type="text" name="cellphone2" class="form-control" id="cellphone2" placeholder="Insert an altenative cellphone number">
                  </div>
                  <div class="form-group">
                    <label for="father">Father's full name</label>
                    <input type="text" name="fathername" class="form-control" id="father" placeholder="Insert Full father's name">
                  </div>
                  <div class="form-group">
                    <label for="mother">Full mother's name</label>
                    <input type="text" name="mothername" class="form-control" id="mother" placeholder="Insert full mother's name">
                  </div>
                  <div class="form-group">
                    <label for="profission">Profission</label>
                    <input type="text" name="profission" class="form-control" id="profission" placeholder="Inform your profission">
                  </div>
                  <div class="form-group">
                    <label for="worksplace">Work's place</label>
                    <input type="password" name="password" class="form-control" id="worksplace" placeholder="Inform your work place">
                  </div>
                  <div class="form-group">
                    <label for="residence">Residence</label>
                    <select class="form-control">
                          <option>Neighborhood</option>

                        </select>
                  </div>
                  <div class="form-group">
                    <label>your block</label>
                    <select class="form-control">
                          <option>Block</option>

                        </select>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="reset" class="btn btn-primary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.0
    </div>
    <strong>Copyright &copy; 2023-2028 <a href="/">Cadastro Único Urbano | C2U</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
