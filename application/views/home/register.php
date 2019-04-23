<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign up for FREE access to Deviantart</title>

    <style>
    body{
        background-color : #F8F8F8;
    }
    .list ul li{
        font-family : Verdana, sans-serif;
        font-size : 14px;
        color :  #52615D;
        list-style: url("<?= base_url();?>assets/img-css/signup-star.png");
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
    .button input{
        border: none;    background-color: #05cc47;
        border-radius: 3px;color: #fff;
        background-image: none;
        padding: 10px 30px;
        height: 50px;
        width: auto;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: bold;
        text-align : center;
        margin : 20px 0 0 300px;
        font: 17px Trebuchet MS,sans-serif;
    }
    </style>
  </head>
  <body>
  <div class="container">
            <div class="row">
                <div class="col-md-8 col">
                    <div>
                    <img src="<?= base_url('assets/img-css/regis1.png')?>" style="width: 350px;margin : 0px 0 0 190px;">
                            <h2>As a FREE member you can:</h2>
                                <div class="list">
                                    <ul>
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
                        <table style="" border="1">
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
                                        <p class="pw-meter-inline-text" style="margin : 30px 0 0 190px;font-size: 12px;">
                                            Keep your account safe by using a strong password. Including uppercase and lowercase letters, 
                                            as well as numbers and symbols, can help make a password stronger. 
                                            <a href="#" class="password-stength-tips" onclick="PasswordInfo.showInfoModal();if (window.event) event.cancelBubble = true;return false;">More information</a>
                                        </p>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                    <!-- top: 275px; -->
                                        <label style="color: #53625E;font-size: 12px;font-weight: bold;margin : 0 0 0 250px;font-family: Verdana, Arial, sans-serif;">Date of Birth</label>
                                        <a href="#" style="color: #3B5A4A;font-size: 9px;position: absolute;top: 275px;left: 315px;">Why is this required?</a>                        
                                        <label class="gender" style="color:#53625E;font-size: 12px;font-weight: bold;font-family: Verdana, Arial, sans-serif;">Sex</label>                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select style="font-size: 12px;font-weight: bold;margin : 0 0 0 190px;">            
                                            <option value="">Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select id="dobday" name="dobday" style="font-size: 13px;margin : 0 0 0 10px;">            
                                            <option value="">Day</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select id="dobyear" name="dobyear" style="font-size: 13px;">            
                                            <option value="">Year</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                            <option value="1904">1904</option>
                                            <option value="1903">1903</option>
                                            <option value="1902">1902</option>
                                            <option value="1901">1901</option>
                                            <option value="1900">1900</option>
                                     </select>
                                     <select id="gender" name="gender" style="font-size: 13px;position: relative;left: 110px;">            
                                        <option value="">Select an option</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option value="o">Other</option>
                                     </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="" style="margin : 30px 0 0 190px;font-size: 12px;"><input type="checkbox" class="icheckbox" id="agreeterms" name="agreeterms[]" value="1" data-sigil="click-event-tracker" data-meta="0.0">
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
                                    <td class="button" style="margin : 30px 0 0 300px;">
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