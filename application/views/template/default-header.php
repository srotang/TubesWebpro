<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<<<<<<< HEAD
            <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navbar-dev.css">
=======
            <link rel="stylesheet" href="<?= base_url();?>/assets/css/navbar-dev.css">
>>>>>>> b58a4b5dc519e9664c424be858db9257f6a1c423
            <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark uppernav d-flex">
            <a class="navbar-brand" href="<?=base_url('index.php/home')?>"><img src="<?= base_url('assets/img-css/logo-mark.png')?>"><img src="<?= base_url('assets/img-css/logo-type.png')?>"></a>
          
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
                  <a class="nav-link" href="#"><button class='btn tombolsubmit'>SUBMIT</button></a>
                </li>
              </ul>
              <ul class="navbar-nav make-it-right">
                  <li class="nav-item">
                      <a href="<?= base_url('index.php/register')?>" class="nav-link">Join</a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('index.php/login')?>" class="nav-link">Login</a>
                  </li>
              </ul>
            </div>
          </nav>
    </body>
</html>
