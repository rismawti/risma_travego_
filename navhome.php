<?php
include "bot.php";
include "config.php";
$data="SELECT tanggal_pergi, passenger, kelas_penerbangan"
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary text-white bg-dark ms-auto">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        <div class="btn btn-outline-secondary"><a href="index.php" style="text-decoration: none; color:white;">sign in</a></div>
        <div class="btn btn-outline-secondary"><a href="induser.php" style="text-decoration: none; color:white;">sign up</a></div>
      </span>
    </div>
  </div>
</nav>