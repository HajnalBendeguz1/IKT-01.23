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
  body{
      font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
        }
        body{
            background: linear-gradient(to left, #ff0000, #000000);
        }
    </style>
  </head>
  <body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="index.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
    <div class="div2">
      <a href="információ angol.html">
        <img src="d.jpeg" alt="information gathering" title="information gathering" class="img">
      </a>
    </div>
    <div class="div3">
      <a href="harver-angol.html">
        <img src="retzui.jpg" alt="hardver" title="hardver" class="img">
      </a>
    </div>
    <div class="div4">
      <a href="topológia-angol.html">
        <img src="topology1.png" alt="topology" title="topology" class="img">
      </a>
    </div>
    <div class="div5">
      <a href="dokumentáció-angol.html">
        <img src="unnamed.png" alt="documentation" title="documentation" class="img">
      </a>
    </div>
    <div class="div6">
      <a href="karbantartás-angol.html">
        <img src="a.png" alt="maintenance" title="maintenance" class="img">
      </a>
    </div>
    <div class="div7">
      <a href="tervezés-angol.html">
        <img src="terv.png" alt="plan" title="plan" class="img">
      </a>
    </div>
    <div class="div1">
      <h2>
        Hello, we are the founders of .... We study part-time at the Széchenyi István Székesfehérvár SZC Széchenyi István Technical Technical College and we are interns at Harman as system operators. Our company deals with various complex simulations, conducting scientific research on astronomical entities (e.g. Supernovae, Nebulae). Although we work with rather few people, we are very efficient. We complement each other's work, we help each other, we solve problems together.</h2>