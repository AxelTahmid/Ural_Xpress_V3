<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/bootstrap4/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/fontawesome_icons_5.15.3/css/all.css">
  <title>Ural Xpress Apps Admin</title>

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
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
              <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/view_merchant">Merchant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/view_delivery">Delivery</a>
            </li>
          </ul>
          <div class="btn-group open">
            <button class="btn  btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-user fa-fw"></i> <?= session()->get('firstname') ?>
            </button>
            <ul class="dropdown-menu .dropdown-menu-right">
              <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
                <a class="dropdown-item" href="/profile"><i class="fa fa-pencil fa-fw"></i> Profile</a>
              </li>
              <li class="nav-item">
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