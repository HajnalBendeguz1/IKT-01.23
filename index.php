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
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(to left, #ff0000, #000000);
}

/* Header styles */
.header {
  background-color: #333;
  color: white;
  padding: 20px;
  text-align: center;
}

/* Navigation styles */
.navbar {
  background-color: #555;
  overflow: hidden;
}

.navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
}

/* Image styles */
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

/* Text styles */
h2 {
  font-family: Arial, sans-serif;
  text-shadow: 2px 2px 10px black;
  color: white;
  text-align: center;
}

/* Division styles */
.division {
  display: inline-block;
  margin: 10px;
}

/* Gradient button styles */
.gradient-button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  color: white;
  background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
  box-shadow: 0px 5px 0px 0px #3e8e41;
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.gradient-button:hover {
  background-position: right center;
  box-shadow: 0px 5px 0px 0px #3e8e41;
  transform: translateY(-4px);
}

.gradient-button:active {
  background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
  box-shadow: 0px 2px 0px 0px #3e8e41;
  transform: translateY(2px);
}

/* Hover effect on division */
.division:hover {
  transform: rotate(10deg);
  transition: transform 0.5s ease-out;
}
  </style>
  </head>
  <body>
  <?php $header = file_get_contents("./header.html"); echo $header;?>
    <div><a href="index-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <div class="div2">
      <a href="információ.php" class="gradient-button">
        <img src="d.jpeg" alt="informácó gyűjtés" title="információ gyűjtés" class="img">
      </a>
    </div>
    <div class="div3">
      <a href="harver.php" class="gradient-button">
        <img src="retzui.jpg" alt="hardver" title="hardver" class="img">
      </a>
    </div>
    <div class="div4">
      <a href="topológia.php" class="gradient-button">
        <img src="topology1.png" alt="topológia" title="topológia" class="img">
      </a>
    </div>
    <div class="div5">
      <a href="dokumentáció.php" class="gradient-button">
        <img src="unnamed.png" alt="dokumentáció" title="dokumentáció" class="img">
      </a>
    </div>
    <div class="div6">
      <a href="karbantartás.php" class="gradient-button">
        <img src="a.png" alt="karbantartás" title="karbantartás" class="img">
      </a>
    </div>
    <div class="div7">
      <a href="tervezés.php" class="gradient-button">
        <img src="terv.png" alt="tervrajz" title="tervrajz" class="img">
      </a>
    </div>
    <div class="div1" class="division">
      <h2>
        Helló, mi vagyunk a … nevű cég alapítói. Másodállásban a Székesfehérvári SZC Széchenyi István Műszaki Technikumban tanulunk, valamint gyakorlaton vagyunk a Harmannál, mint rendszerüzemeltetők. Cégünk különböző komplex szimulációkkal foglalkozik, tudományos kutatásokat végez asztronómiai entitásokról (pl. Szupernóvák, Nebulák). Bár meglehetősen kevés emberrel dolgozunk, nagyon hatékonyak vagyunk. Kiegészítjük egymás munkáját, segítünk egymásnak, közösen oldjuk meg a problémákat.</h2>