<!DOCTYPE html>
<html>
  <head>
    <title>Company Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
          h1 {
        text-align: center;
        font-size: 36px;
        margin-top: 50px;
      }

      p {
        text-align: justify;
        font-size: 18px;
        margin: 20px;
      }

      ul {
        list-style-type: square;
        margin-left: 50px;
        font-size: 18px;
      }

      img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border-radius: 10px;
        box-shadow: 0px 0px 10px grey;
        margin-top: 50px;
      }

      body {
        background-color: lightgray;
      }
    </style>
  </head>
  <body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="információ.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
    <h1>What does the company do?</h1>
    <p>The company produces complex and resource-hungry simulations in various scientific fields, for example:</p>
    <ul>
      <li>Simulate astronomical entities e.g.: supernovae, nebulae, quasars, and various stars</li>
      <li>Molecular structure and properties of proteins (Protein folding), DNA, hydrocarbon chains.</li>
    </ul>
    <h1>The needs of the company</h1>
    <p>The company has 10 people working on the simulations who need a high-end workstation,
        peripherals (written in device requirements - by me), high speed connection to internal servers and wifi.</p>
    <p>Network access to the office for the 2 bosses, wifi. Printers in all rooms.</p>
    <p>A workstation in the server room for the administrator, with fast physical and remote access to the servers
        for maintenance and troubleshooting.</p>
    <img src="b.jpg" alt="Company Image">
  </body>
</html>