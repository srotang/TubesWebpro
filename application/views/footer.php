<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Offline bootstrap-->
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Footer</title>

    <style>
    .footer-page{
        background-color :#4E5F55;
        
                <div class="col-md-1">
    }
    .col p{
        font-size: 11px;
    }
    .col ul li{
        display: inline;
        margin: 5px;
        font-size: 11px;
        color: white;
        height: 50px;
    }
    </style>
</head>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body>
<footer class="footer-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <ul>
                        <li>©2019 DeviantArt. All rights reserved</li>
                        <li>About</li>
                        <li>Contact</li>
                        <li>Help & FAQ</li>
                        <li>Privacy Policy</li>
                        <li>Copyright Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
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
	        var x = document.getElementsByClassName("watch-values-active");
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = "Watching";
            }
</script>
<!-- 	Nambahin JS biar ga dipanggil berkali2 -->
</body>
</html>
