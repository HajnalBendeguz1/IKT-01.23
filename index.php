<?php
  setcookie("username", '');
  setcookie("userpassword", '');
  setcookie("logged", 'false');
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
      .div1 {
        text-align: center;
      }
      .div2,
      .div3,
      .div4,
      .div5,
      .div6,
      .div7 {
        display: inline-block;
        margin: 10px;
        
      }
      body{
        background-color: grey;
      }
  .div1 {
    text-align: center;
    color: white;
  }
  .img {
    height: 200px;
    width: 200px;
    margin: 20px;
    border: 2px solid black;
    box-shadow: 5px 5px 10px black;
    transition: transform 0.3s;
  }
  .img:hover {
    transform: scale(1.2);
  }
  h2 {
    font-family: Arial, sans-serif;
    text-shadow: 2px 2px 10px black;
  }
  #login{
    z-index: +1;
    background-color: rgba(255, 255, 255, 0.2);
    float: left;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }
    </style>
  </head>
  <body>
  <div id="login">
  <?php
      require('phpfunctions.php');
      if($_COOKIE['logged']=='true'){
        echo "működik ez a szar";
        echo '<script>document.getElementById("login").style.height = "0%";</script>';
      }
      else{
        echo `<script>document.getElementById("login").style.height = "100%";</script>`;
        // include('indexlogin.php');
        ?>
        <form action="loggingin.php" method="POST" target="hiddenFrame">
        Felhasználónév: <input type="text" name="felhasznalonev"/> <br/>
        Jelszó: <input type="password" name="jelszo"/> <br/>
        <input type="button" name="submit_button" value="submit_button" class="button"/>
        </form>

        <?php

        if(array_key_exists('submit_button', $_POST)){
          $uname = test_input($_POST["felhasznalonev"]);
          $upass = test_input($_POST["jelszo"]);
          if(query($conn, $uname, $upass)===true){
              echo `<script>
              document.getElementById("login").style.height = 0%;
              document.getElementById("content-holder").style.pointerEvents = all;
              </script>`;
          }
        }
      }
      mysqli_close($conn);
    ?>
  </div>
  <iframe name="hiddenFrame" class="hide" style="position:absolute; top:-2px; left:-2px; width:1px; height:1px;"></iframe>
    
    <div id="content-holder">
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
      <div><a href="index-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
      <div class="div2">
        <a href="információ.php">
          <img src="d.jpeg" alt="informácó gyűjtés" title="információ gyűjtés" class="img">
        </a>
      </div>
      <div class="div3">
        <a href="harver.php">
          <img src="retzui.jpg" alt="hardver" title="hardver" class="img">
        </a>
      </div>
      <div class="div4">
        <a href="topológia.php">
          <img src="topology1.png" alt="topológia" title="topológia" class="img">
        </a>
      </div>
      <div class="div5">
        <a href="dokumentáció.php">
          <img src="unnamed.png" alt="dokumentáció" title="dokumentáció" class="img">
        </a>
      </div>
      <div class="div6">
        <a href="karbantartás.php">
          <img src="a.png" alt="karbantartás" title="karbantartás" class="img">
        </a>
      </div>
      <div class="div7">
        <a href="tervezés.php">
          <img src="terv.png" alt="tervrajz" title="tervrajz" class="img">
        </a>
      </div>
      <div class="div1">
        <h2>
          Helló, mi vagyunk a … nevű cég alapítói. Másodállásban a Székesfehérvári SZC Széchenyi István Műszaki Technikumban tanulunk, valamint gyakorlaton vagyunk a Harmannál, mint rendszerüzemeltetők. Cégünk különböző komplex szimulációkkal foglalkozik, tudományos kutatásokat végez asztronómiai entitásokról (pl. Szupernóvák, Nebulák). Bár meglehetősen kevés emberrel dolgozunk, nagyon hatékonyak vagyunk. Kiegészítjük egymás munkáját, segítünk egymásnak, közösen oldjuk meg a problémákat.
        </h2>
      </div>
    </div>
  </body>
</form>
</html>