<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(to left, #ff0000, #000000);
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
  color: white;
  text-align: center;
}

.division {
  display: inline-block;
  margin: 10px;
}

.division:hover {
  transform: rotate(10deg);
  transition: transform 0.5s ease-out;
}
  </style>
  </head>
  <body>
  <?php $header = file_get_contents("./header.html"); echo $header;?>
    <div><a href="index-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <div class="division">
      <a href="információ.php">
        <img src="d.jpeg" alt="informácó gyűjtés" title="információ gyűjtés" class="img">
      </a>
    </div>
    <div class="division">
      <a href="harver.php">
        <img src="retzui.jpg" alt="hardver" title="hardver" class="img">
      </a>
    </div>
    <div class="division">
      <a href="topológia.php">
        <img src="topology1.png" alt="topológia" title="topológia" class="img">
      </a>
    </div>
    <div class="division">
      <a href="dokumentáció.php">
        <img src="unnamed.png" alt="dokumentáció" title="dokumentáció" class="img">
      </a>
    </div>
    <div class="division">
      <a href="karbantartás.php">
        <img src="a.png" alt="karbantartás" title="karbantartás" class="img">
      </a>
    </div>
    </div>
    <div >
      <h2>
        Helló, mi vagyunk a … nevű cég alapítói. Másodállásban a Székesfehérvári SZC Széchenyi István Műszaki Technikumban tanulunk, valamint gyakorlaton vagyunk a Harmannál, mint rendszerüzemeltetők. Cégünk különböző komplex szimulációkkal foglalkozik, tudományos kutatásokat végez asztronómiai entitásokról (pl. Szupernóvák, Nebulák). Bár meglehetősen kevés emberrel dolgozunk, nagyon hatékonyak vagyunk. Kiegészítjük egymás munkáját, segítünk egymásnak, közösen oldjuk meg a problémákat.</h2>