<!DOCTYPE html>
<html>
    <head>
    <style>
    #back-to-top {
    bottom: 0.333333px;
    color: rgb(152, 170, 150);
    cursor: pointer;
    height: 35px;
    left: 960px;
    position: relative;
    /* float: right; */
    text-decoration: none solid rgb(152, 170, 150);
    text-rendering: optimizelegibility;
    /* margin-top: 5px; */
    white-space: nowrap;
    width: 47.5729px;
    column-rule-color: rgb(152, 170, 150);
    perspective-origin: 28.7813px 17.5px;
    transform-origin: 28.7865px 17.5px;
    caret-color: rgb(152, 170, 150);
    border: 0px none rgb(152, 170, 150);
    font: normal normal 400 normal 14px / 35px "Helvetica Neue", Arial, sans-serif;
    outline: rgb(152, 170, 150) none 0px;
    padding: 0px 10px 0px 0px;
    }
</style>
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark fixednav bg-dark" id="myHeader">
            <div class="" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link browses-active browses" href="<?= base_url()?>/home">BROWSE</a>
                </li>
              <li class="nav-item" id="back-to-top">
                  <input onclick="topFunction()" id="back-to-top-icon" type="Image" src="<?= base_url('assets/img-css/icon.jpg')?>" style="height:20px;position: relative; top: 8px;right: 5px;">Top
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
<<<<<<< HEAD
      <script>
        $(document).ready(function(){
                $(window).scroll(function(){
                  if($(this).scrollTop() > 40){
                    $('#back-to-top-icon').fadeIn();
                  }else{
                    $('#back-to-top-icon').fadeOut();
                  }
                });
                $("#back-to-top-icon").click(function(){
                  $('html ,body').animate({scrollTop : 0}, 700);
                });
              });
        </script>
=======
       <script>
      // $(document).ready(function(){
      //         $(window).scroll(function(){
      //           if($(this).scrollTop() > 40){
      //             $('#back-to-top').fadeIn();
      //           }else{
      //             $('#back-to-top').fadeOut();
      //           }
      //         });
      //         $("#back-to-top").click(function(){
      //           $('html ,body').animate({scrollTop : 0}, 700);
      //         });
      //       });
      function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
          </script> 
>>>>>>> 8f01d4ac36da5cda11966a90b4d284388fae7e68
    </body>
</html>