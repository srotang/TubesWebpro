<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar-dev.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/submit.css">
            <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark uppernav d-flex">
        <a class="navbar-brand" href="<?=base_url('index.php/Loggedin')?>"><img src="<?= base_url('assets/img-css/logo-mark.png')?>"><img src="<?= base_url('assets/img-css/logo-type.png')?>"></a>
          
            <div class="navbar collapse navbar-collapse" >
              <ul class="navbar-nav mr-auto">
                <li class="nav-item itemlain">
                    <form class="form-inline formsss">
                        <input class="cariform" type="search" placeholder="" aria-label="Search">
                        <input class="suubbmiitt" type="submit" value="">
                    </form>
                </li>
                <li class="nav-item itemlain">
                  <a class="nav-link" href="#">SHOP <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item itemlain">
                  <a class="nav-link" href="#">FORUM</a>
                </li>
                <li class="nav-item itemlain">
                    <a class="nav-link" href="#">MORE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('index.php/profile/submit');?>"><button class='btn tombolsubmit'>SUBMIT</button></a>
                </li>
              </ul>
              <ul class="navbar-nav make-it-right">
                  <li class="nav-item">
                    <div class="profile-dropdown">
                      <button class="profile-dropbtn">
                          <img class="avatar" src="https://a.deviantart.net/avatars/default.gif" width="20" height="20" alt="">
                        <!-- Tambahin Username orang yang login --><?php echo  $this->session->userdata('username') ?>
                      </button>
                      <div class="profile-dropdown-content dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item prf" href="<?= base_url('index.php/Profile')?>" >Profile</a><!-- Tambahin link ke profie user -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('index.php/login/logout')?>">Logout</a><!-- ke Logout session -->
                      </div>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>
    </body>
</html>
