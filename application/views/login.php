<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Offline bootstrap-->
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Login</title>

    <style>
    body{
        background-color : #CDD8C8;
    }
    .form-login{
        background-color : #D8E4D6;
        border: 1px solid #D8E4D6;
        position: absolute;
        top: 80px;
        height : 180px;
        width : 460px;
        margin : 20px 359px 20px 359px;
        padding : 20px 20px 20px 20px;
        font-size: 12px;
        transform : none;
        border-top-left-radius : 5px;
        border-top-right-radius : 5px;
        border-bottom-left-radius : 5px;
        border-bottom-right-radius : 5px;
    }
    .table-label{
      display : table-cell;
      padding : 1px 10px 1px 1px;
      font-size : 12px;
      text-decoration : none solid rgb(0, 0, 0);
      text-align : right;
      vertical-align : middle;
      word-spacing : 0px;
      font-weight: bold;
    }
    .table-sign input{
      heigth: 20px;
      width : 85px;
      border : 1px solid  #1D4253;
      margin : 8px 0 8px 0;
      padding : 3px 3px 4px 4px;
      background-color :#1D4253;
      border-top-left-radius : 5px;
      border-top-right-radius : 5px;
      border-bottom-left-radius : 5px;
      border-bottom-right-radius : 5px;
      cursor : pointer;
      color: white;
    }
    </style>
    </head>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body>
    <form class="form-login" action="">
      <table>
        <tbody style="position: absolute; left: 70px">
          <tr>
            <td class="table-label">
                <label>Username or Email</label>
                <input class="text" type="text" id="login_username" name="username" value="" autofocus="autofocus"style="width:220px;">
            </td>
          </tr>
          <tr>
            <td class="table-label">
                <label>Password</label>
                <input class="text" type="password" id="login_password" name="password" style="width:220px;">
            </td>
          </tr>
          <tr>
             <td>
                <input type="checkbox" id="remember_me" checked="checked" name="remember_me"> Stay logged in
             </td>
         </tr>
         <tr>
            <td class="table-sign">                
              <input type="submit" value="Log In">
            </td>
         </tr>
         <tr>
            <td>
              <a href="#">Forgot Password or Username?</a>
            </td>
         </tr>
        </tbody>
      </table>
    </form>
</body>
</html>