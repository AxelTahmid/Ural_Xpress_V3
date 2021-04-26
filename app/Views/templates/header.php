<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Ural Xpress Apps Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/fontawesome_icons_5.15.3/css/all.css">
  <link rel="stylesheet" href="/assets/css/bootstrap4/css/bootstrap.css">
  <script src="/assets/DataTables/datatables.js"></script>
  <link rel="stylesheet" href="/assets/DataTables/datatables.css">
  <link rel="stylesheet" href="/assets/css/style.css">


  <script type="text/javascript">
    function delete_confirtmation() {
      var check = confirm('Are you sure you want to delete this? This action cannot be undone');
      if (check) {
        return true;
      } else {
        return false;
      }
    }
  </script>

</head>

<body>
  <?php
  $uri = service('uri');
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Ural Xpress Apps</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if (session()->get('isLoggedIn')) : ?>
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
              <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'view_merchant' ? 'active' : null) ?>">
              <a class="nav-link" href="/view_merchant">Merchant</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'view_delivery' ? 'active' : null) ?> ">
              <a class="nav-link" href="/view_delivery">Delivery</a>
            </li>
          </ul>
          <div class="btn-group open">
            <button class="btn  btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-user fa-fw"></i> <?= session()->get('firstname') ?>
            </button>
            <ul class="dropdown-menu .dropdown-menu-right">
              <li>
                <a class="dropdown-item" href="/profile"><i class="fa fa-pencil fa-fw"></i> Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
              </li>
            </ul>
          </div>
        <?php else : ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
              <a class="nav-link bg-dark" href="/">Login</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
              <a class="nav-link" href="/register">Register</a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <?php if (session()->get('isLoggedIn')) : ?>

    <div class="container">
      <br>
      <?php
      if (session()->getFlashdata('status')) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hello <?= session()->get('firstname') ?>!</strong> <?= session()->getFlashdata('status'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
    </div>

  <?php endif; ?>