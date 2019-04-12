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
    </style>
    </head>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body>
    
    <div>
        <img src="regis1.png" style="width: 300px;">
        <h2>As a FREE member you can:</h2>
        <ul>
            <li>Browse over 375 million unique pieces of art</li>
            <li>Exhibit, promote and share your art with fellow artists and art enthusiasts</li>
            <li>Sell Prints and digital downloads of your work</li>
            <li>Actively participate in the largest art community in the world (over 48 million members)</li>
        </ul>
    </div>
      <form action="">
      <div>
        <label >Username</label>
        <input type="text" name="cusername" id="cusername" value="" class="text" size="30" maxlength="20"></span>
      </div>            
      <div >
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
</body>
</html>