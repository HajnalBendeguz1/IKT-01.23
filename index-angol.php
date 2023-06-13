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
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="index.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
    <div class="division">
      <a href="információ angol.php">
        <img src="d.jpeg" alt="information gathering" title="information gathering" class="img">
      </a>
    </div>
    <div class="division">
      <a href="harver-angol.php">
        <img src="retzui.jpg" alt="hardver" title="hardver" class="img">
      </a>
    </div>
    <div class="division">
      <a href="topológia-angol.php">
        <img src="topology1.png" alt="topology" title="topology" class="img">
      </a>
    </div>
    <div class="division">
      <a href="dokumentáció-angol.php">
        <img src="unnamed.png" alt="documentation" title="documentation" class="img">
      </a>
    </div>
    <div class="division">
      <a href="karbantartás-angol.php">
        <img src="a.png" alt="maintenance" title="maintenance" class="img">
      </a>
    </div>
    <div>
      <h2>
        Hello, we are the founders of .... We study part-time at the Széchenyi István Székesfehérvár SZC Széchenyi István Technical Technical College and we are interns at Harman as system operators. Our company deals with various complex simulations, conducting scientific research on astronomical entities (e.g. Supernovae, Nebulae). Although we work with rather few people, we are very efficient. We complement each other's work, we help each other, we solve problems together.</h2>