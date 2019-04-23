<!doctype html>
<html lang="en">
  <head>
    <title>Sign up for FREE access to Deviantart</title>

    <style>
    body{
        background-color : #F8F8F8;
    }
    .list ul{
        font-family : Verdana, sans-serif;
        font-size : 14px;
        color :  #52615D;
        list-style: url('<?php echo base_url();?>assets/img-css/signup-star.png');
        margin : 10px 0 0 270px;

    }
    h2{
        font-family : Verdana, sans-serif;
        font-size : 14px;
        font-weight : bold;
        letter-spacing : -1px;
        color :  #EC1359;
        margin : 30px 0 0 290px;
    }
    .table-label input{
        height : 34px;
        width : 429px;
        margin : 5px;
        padding : 3px 3px 4px 4px;
        border: 1px solid  #CCCCCC;
        border-top-left-radius : 3px;
        border-top-right-radius : 3px;
        border-bottom-left-radius : 3px;
        border-bottom-right-radius: 3px;
    }
    .table-label{
        font-family : Verdana, Arial, sans-serif;
        font-size : 12px;
        font-weight : bold;
        display : table-cell;
        cursor: default;
        display : table-cell;
        padding : 1px 10px 1px 1px;
        text-decoration : none solid rgb(0, 0, 0);
        text-align : right;
        vertical-align : middle;
        word-spacing : 0px;
        font-weight: bold;
        color :  #53625E;
        }
    .btn input{
        border: none;    
        background-color: #05cc47;
        border-radius: 3px;
        color: #fff;
        background-image: none;
        padding: 10px 30px;
        height: 50px;
        width: auto;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: bold;
        text-align : center;
        margin : 20px 0 0 60px;
        font: 17px Trebuchet MS,sans-serif;
    }
    </style>
  </head>
  <body>
  <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <div>
                    <img src="<?= base_url('assets/img-css/regis1.png')?>" style="width: 350px;margin : 0px 0 0 290px;">
                            <h2>As a FREE member you can:</h2>
                                <div class="list">
                                    <ul class="signup-lists">
                                        <li>Browse over 375 million unique pieces of art</li>
                                        <li>Exhibit, promote and share your art with fellow artists and art enthusiasts</li>
                                        <li>Sell Prints and digital downloads of your work</li>
                                        <li>Actively participate in the largest art community in the world (over 48 million members)</li>
                                    </ul>
                                </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <form class="form-regis" action="<?= base_url('index.php/register/daftarRegister')?>" method="post">
                        <table style="" >
                            <tbody>
                                <tr>
                                    <td class="table-label">
                                        <label>Username</label>
                                        <input type="text" name="cusername" id="cusername" value="" class="text" size="30" maxlength="20">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label">
                                        <label>Email Address</label>
                                        <input type="text" name="email1" id="email1" value="" class="text" size="30" maxlength="255">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label">
                                        <label class="ll" for="email2">Retype Email Address</label>
                                        <input type="text" name="email2" id="email2" value="" class="text" size="30" maxlength="255">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label">
                                        <label for="password1">Password</label>
                                        <input type="password" class="text" id="password1" name="password1" required="required"  title="Please enter a password that is at least 6 characters long" value="" size="30">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" >
                                        <p class="pw-meter-inline-text" style="margin : 30px 0 0 290px;font-size: 12px;">
                                            Keep your account safe by using a strong password. Including uppercase and lowercase letters, 
                                            as well as numbers and symbols, can help make a password stronger. 
                                            <a href="#" class="password-stength-tips" onclick="PasswordInfo.showInfoModal();if (window.event) event.cancelBubble = true;return false;">More information</a>
                                        </p>                                    
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" style="margin : 30px 0 0 290px;font-size: 12px;"><input type="checkbox" class="icheckbox" id="agreeterms" name="agreeterms[]" value="1" data-sigil="click-event-tracker" data-meta="0.0">
                                        I have read and agree to the DeviantArt 
                                        <a href="https://about.deviantart.com/policy/service/" target="blank" class="u">Terms of Service</a>
                                        and
                                        <a href="https://about.deviantart.com/policy/etiquette/" target="blank" class="u">Etiquette Policy</a>
                                        and acknowledge that I have read the
                                        <a href="https://about.deviantart.com/policy/privacy/" target="blank" class="u">Privacy Policy</a>
                                        </label>
                                    </td>
                                </tr>  
                                <tr>
                                    <td class="btn" style="margin : 30px 0 0 300px;">
                                        <input id="becomeDevButton" class="join-button continue" type="submit" value="BECOME A DEVIANTART" style=";">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </form>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>