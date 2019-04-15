<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Offline bootstrap-->
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Register</title>

    <style>
    body{
        background-color : #F8F8F8;
    }
    .list ul li{
        font-family : Verdana, sans-serif;
        font-size : 14px;
        color :  #52615D;
        /* line-height : 17px; */
        margin : 10px 0 0 180px;
    }
    h2{
        font-family : Verdana, sans-serif;
        font-size : 14px;
        font-weight : bold;
        letter-spacing : -1px;
        color :  #EC1359;
        margin : 30px 0 0 190px;
    }
    .form-regis input{
        height : 34px;
        width : 429px;
        margin : 5px 0 0 180px;
    }
    .form-regis label{
        font-family : Verdana, Arial, sans-serif;
        font-size : 12px;
        font-weight : bold;
        line-height : 20px;
        text-align : right;
        margin : 22px 0 0 390px;
        display : table-cell;
        }
    </style>
</head>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <div>
                    <img src="regis1.png" style="width: 350px;margin : 0px 0 0 190px;">
                            <h2>As a FREE member you can:</h2>
                                <div class="list">
                                    <ul>
                                        <li>Browse over 375 million unique pieces of art</li>
                                        <li>Exhibit, promote and share your art with fellow artists and art enthusiasts</li>
                                        <li>Sell Prints and digital downloads of your work</li>
                                        <li>Actively participate in the largest art community in the world (over 48 million members)</li>
                                    </ul>
                                </div>
                                <form class="form-regis">
                                    <div>
                                        <label >Username</label>
                                        <input type="text" name="cusername" id="cusername" value="" class="text" size="30" maxlength="20">
                                    </div>
                                    <div>
                                        <label>Email Address</label>
                                        <input type="text" name="email1" id="email1" value="" class="text" size="30" maxlength="255">
                                    </div>
                                    <div>
                                        <label class="ll" for="email2">Retype Email Address</label>
                                        <input type="text" name="email2" id="email2" value="" class="text" size="30" maxlength="255">
                                    </div>
                                    <div>
                                        <label for="password1">Password</label>
                                        <input type="password" class="text" id="password1" name="password1" required="required" pattern=".{6,}" title="Please enter a password that is at least 6 characters long" value="" size="30">
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>