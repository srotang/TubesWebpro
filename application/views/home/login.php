<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log In | DeviantArt</title>

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
  <body>
    <?= $this->session->flashdata("sukses")?>
    <form class="form-login" action="<?= base_url('index.php/Login/asup') ?>" method="post">
        <table>
          <tbody style="position: absolute; left: 70px">
            <tr>
              <td class="table-label">
                  <label>Username or Email</label>
                  <input class="text" type="text" id="login_username" name="cusername" value="" autofocus="autofocus"style="width:220px;">
              </td>
            </tr>
            <tr>
              <td class="table-label">
                  <label>Password</label>
                  <input class="text" type="password" id="login_password" name="password1" style="width:220px;">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>