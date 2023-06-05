<!DOCTYPE html>
<html>
<head>
  <title>Cisco Switch összehasonlítás</title>
  <link rel="stylesheet" href="zaszlok.css">
  <style>
    /* Apply some basic styles to the page */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f8f8f8;
    }
    
    h1 {
      text-align: center;
      color: #333;
      text-transform: uppercase;
      margin-top: 50px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    h2 {
      color: #555;
      margin-top: 30px;
    }
    
    h3 {
      color: #777;
      margin-top: 20px;
    }
    
    ul {
      margin-left: 40px;
    }
    
    img {
      display: block;
      margin: 20px auto;
      border: 2px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    
    img:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }
    
    p {
      line-height: 1.5;
      margin-top: 20px;
      color: #444;
    }
  </style>
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header; ?>
<div><a href="switch-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
  <h1 style="color: #1E90FF;">Cisco Switch összehasonlítás: 2950 és 2960</h1>
  
  <h2>Teljesítmény</h2>
  <h3>2950</h3>
  <ul>
    <li>Az 2950-es modell az 2000-es évek elején került bevezetésre</li>
    <li>Fast Ethernet (10/100 Mbps) kapcsolatot biztosít</li>
    <li>Korlátozott switchelési kapacitással és továbbítási sebességgel rendelkezik</li>
    <li>Alkalmas kis és közepes méretű hálózatokhoz alapvető követelményekkel</li>
  </ul>
  <img src="2950.jfif" alt="2950 Switch kép" width="200">
  
  <h3>2960</h3>
  <ul>
    <li>A 2960-as modell a 2000-es évek közepén került bevezetésre</li>
    <li>Gigabit Ethernet (10/100/1000 Mbps) kapcsolatot biztosít</li>
    <li>Javított switchelési kapacitással és továbbítási sebességgel rendelkezik</li>
    <li>Jobban alkalmas a modern hálózatokhoz, amelyek magasabb teljesítményt igényelnek</li>
  </ul>
  <img src="2960.png" alt="2960 Switch kép" width="200">
  
  <h2>Jellemzők</h2>
  <h3>2950</h3>
  <ul>
    <li>Alapvető 2. rétegű switchelési képességek</li>
    <li>Támogatja a VLAN-okat, a spanning tree protokollt, a portbiztonságot és az hozzáférési vezérlési listákat (ACL)</li>
    <li>Hiányzik néhány fejlett jellemző, amelyeket újabb switcheknél gyakran megtalálunk</li>
  </ul>
  
  <h3>2960</h3>
  <ul>
    <li>Fejlett 2. rétegű switchelési jellemzők</li>
    <li>Támogatja a VLAN-okat, a Rapid Spanning Tree Protocolt (RSTP), a hivatkozási összevonást (link aggregation), a Minőségi Szolgáltatást (QoS) és a fejlesztett biztonsági jellemzőket</li>
    <li>Néhány modellben a 2960 switch biztosít néhány 3. rétegű útválasztási képességet is, ami nagyobb rugalmasságot biztosít a hálózat tervezésében</li>
  </ul>
  
  <h2>Használati esetek</h2>
  <h3>2950</h3>
  <ul>
    <li>Kis irodákban vagy otthoni irodákban (SOHO környezetekben)</li>
    <li>Access switchek kisebb hálózatokban egyszerű követelményekkel</li>
    <li>Költséghatékony lehetőség alapvető hálózati beállításokhoz</li>
  </ul>
  
  <h3>2960</h3>
  <ul>
    <li>Közepes és nagy méretű hálózatokban</li>
    <li>Access switchek nagyobb teljesítményt igénylő hálózatokban</li>
    <li>Hasznos környezetekben, ahol a hálózat szélén alapvető útválasztásra van szükség</li>
  </ul>
  
  <p>Összefoglalva, habár a 2950 és 2960 switchek mindkettő Cisco modellek, különböznek teljesítményben, jellemzőkben és használati esetekben. Az 2950 egy régebbi modell, Fast Ethernet kapcsolattal és alapvető 2. rétegű jellemzőkkel, ami alkalmassá teszi kisebb hálózatokra egyszerűbb követelményekkel. Másrészt a 2960 egy újabb modell, Gigabit Ethernet kapcsolattal, fejlettebb 2. rétegű jellemzőkkel és opcióként néhány 3. rétegű útválasztási képességgel, amely sokoldalúbbá és alkalmasabbá teszi közepes és nagy méretű hálózatokra, magasabb teljesítménykövetelményekkel.</p>
</body>
</html>