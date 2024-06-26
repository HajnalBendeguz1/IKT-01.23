<html>
  <head>
    <title>Karbantartás</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
        body {
          font-family: Arial, sans-serif;
          text-align: center;
          background-color: lightgray;
        }
        h1 {
          color: blue;
        }
        img {
          width: 40%;
          height: auto;
          margin: 20px;
          border: 5px solid gray;
          box-shadow: 10px 10px 5px gray;
          border-radius: 15px;
        }
      </style>
  </head>
  <body>
    <!-- ######### HEADER ######### -->
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="karbantartás-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <h1>Karbantartás</h1>
    <p>A project telepítés részénél a megbízó cég rendszergazdáját is bevonjuk a folyamatba, hogy tisztában legyen a hálózat felépítésével. A telepítés végeztével körbe járunk vele az egész hálózatot hogy képes legyen az esetleges apróbb hibák elhárítására.</p>
    <p>Havonta egyszer ajánljuk a számítógépek portalanítását valamint a frissítések telepítését.</p>
    <p>Félévente cégünk biztosít egy átfogó, teljes körű karbantartást amiben a tűzfalakat, a szoftvereket és a telepített eszközöket (router, switch, server, pc) átnézzük és a szükséges javításokat és frissítéseket elvégezzük.</p>
    <img src="kar.jpg" alt="karbantartás kép 1">
    <p><b>HPC szerver karbantartása, használata</b></p>
    <p><b>Data Storage szerverről az adatok off-site cloudba küldése, tárhelyek karbantartása, esetleges visszaállítása (raid :)</b></p>
    <p>Amennyiben a rendszergazda nem képes a hiba elhárításra akkor ezen a számon: 06301234567 érhetnek el minket.</p>
    <img src="kar2.jpg" alt="karbantartás kép 2">
  </body>
</html>
