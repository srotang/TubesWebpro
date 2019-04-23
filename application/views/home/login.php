<!doctype html>
<html lang="en">
  <head>
    
    <title>Log In | DeviantArt</title>

    <style>
    .container-form-login{
      width:100%;
    }
    body{
        background-color : #CDD8C8;
    }
    
    .container-form-login{
        width:100%;
        background-color:cyan;
    }
    .form-login{
        background-color : #D8E4D6;
        border: 1px solid #D8E4D6;
        margin:auto;
        margin-top:45px;
        height : 180px;
        width : 460px;
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
      box-shadow: rgb(241, 245, 239) 0px 1px 0px 0px;
      color: rgb(255, 255, 249);
      cursor: pointer;
      height: 26.6667px;
      min-width: 85px;
      text-align: center;
      text-decoration: none solid rgb(255, 255, 249);
      white-space: pre;
      width: 85px;
      column-rule-color: rgb(255, 255, 249);
      align-items: flex-start;
      perspective-origin: 42.5px 13.3333px;
      transform-origin: 42.5px 13.3333px;
      user-select: none;
      caret-color: rgb(255, 255, 249);
      background: rgba(0, 0, 0, 0) -webkit-linear-gradient(top, rgb(0, 136, 181), rgb(0, 93, 124)) repeat scroll 0% 0% / auto padding-box border-box;
      border: 1px solid rgb(29, 66, 83);
      border-radius: 5px 5px 5px 5px;
      border-spacing: 4.66667px 4.66667px;
      font: normal normal 400 normal 11px / normal Arial;
      margin: 8px 0px;
      outline: rgb(255, 255, 249) none 0px;
      padding: 6px 10px;
    }

    .tale-form-login{
      margin:auto;
    }
    .table-sign input:hover{
      background: -webkit-linear-gradient(top, #00a4c6, #00739a);
    }
    </style>
  </head>
  <body>
    <?= $this->session->flashdata("sukses")?>
    <center>
    <form class="form-login" action="<?= base_url('index.php/Login/asup') ?>" method="post">
        <table class="tale-form-login">
          <tbody style="">
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
  </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>