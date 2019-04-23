<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark fixednav bg-dark" id="myHeader">
            <div class="" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link browses-active browses" href="<?= base_url('index.php/home')?>">BROWSE</a>
                </li>
                <li class="nav-item">
                  <img class="strokee" src=<?= base_url("assets/img-css/fixednav-stroke.png")?> width="22px" height="41px">
                </li>
                <li class="nav-item">
                    <a class="nav-link browses" href="<?= base_url('index.php/Watch')?>">WATCH</a>
                </li>
                <li class="nav-item browses">
                    <a class="nav-link browses" href="#">NOTIFICATION</a>
                </li>
                <li class="nav-item browses">
                    <a class="nav-link browses" href="#">NOTES</a>
                </li>
              </ul>
            </div>
          </nav>
        <div class="contentsss">&nbsp;</div>
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
      </script>
    </body>
</html>