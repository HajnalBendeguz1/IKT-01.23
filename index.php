<!DOCTYPE html>
<html>
  <head>
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
    </style>
  </head>
  <body>
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
  </body>
</html>