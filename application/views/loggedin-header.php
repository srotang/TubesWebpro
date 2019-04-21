<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/navbar-dev.css">
            <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark uppernav d-flex">
            <a class="navbar-brand" href="#"><img src="logo-mark.png"><img src="logo-type.png"></a>
          
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
                    <div class="profile-dropdown">
                      <button class="profile-dropbtn">
                          <img class="avatar" src="https://a.deviantart.net/avatars/default.gif" width="20" height="20" alt="">
                        <!-- Tambahin Username orang yang login -->Username
                      </button>
                      <div class="profile-dropdown-content dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item prf" href="#" >Profile</a><!-- Tambahin link ke profie user -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="#">Logout</a><!-- ke Logout session -->
                      </div>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>

            <!--JS-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <script>
                window.onscroll = function() {myFunction()};
                
                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;
                
                function myFunction() {
                  if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                  } else {
                    header.classList.remove("sticky");
                  }
                }
        </script> -->
    </body>
</html>