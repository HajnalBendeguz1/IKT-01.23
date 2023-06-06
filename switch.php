<!DOCTYPE html>
<html>
<head>
  <title>Cisco kapcsoló összehasonlítás</title>
  <link rel="stylesheet" href="zaszlok.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    h1 {
      color: #333;
      font-size: 28px;
      margin-bottom: 10px;
    }
    h2 {
      color: #333;
      font-size: 20px;
      margin-bottom: 10px;
    }
    p {
      color: #666;
      font-size: 16px;
      line-height: 1.5;
    }
    .container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
    }
    .switch {
      width: 45%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }
    .switch:hover {
      transform: scale(1.05);
    }
    .switch-title {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }
    .switch-features {
      margin-bottom: 20px;
    }
    .switch-features h2 {
      margin-bottom: 5px;
    }
    .switch-use-cases {
      margin-top: 20px;
    }
    .switch-use-cases h2 {
      margin-bottom: 5px;
    }
    .summary {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
    }
    .summary-title {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }
    .summary-content {
      margin-bottom: 20px;
    }
    .summary-content p:last-child {
      margin-bottom: 0;
    }
    .image-container {
      position: relative;
      width: 300px;
      height: 200px;
      overflow: hidden;
      border-radius: 5px;
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
    }
    .image-container:hover img {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header; ?>
<div><a href="switch-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
  <h1>Cisco kapcsoló összehasonlítás</h1>
  <div class="container">
    <div class="switch">
      <h2 class="switch-title">Cisco 2950</h2>
      <div class="switch-features">
        <h2>Jellemzők</h2>
        <p>A 2950 kapcsoló alapvető 2. rétegű kapcsolási lehetőségeket kínál. Támogatja a VLAN-okat (virtuális LAN-okat), a hidas fa protokollt és alapvető biztonsági funkciókat, mint például a portbiztonságot és az hozzáférésvezérlési listákat (ACL-eket). Azonban hiányzik néhány fejlettebb funkció, amelyek gyakran megtalálhatók az újabb kapcsolókban.</p>
      </div>
      <div class="switch-use-cases">
        <h2>Használati esetek</h2>
        <p>Az 2950 kapcsolót gyakran használják kisebb irodákban vagy otthoni irodákban (SOHO-kban), vagy hozzáférési kapcsolóként kisebb hálózatokban, ahol a teljesítménykövetelmények nem túl magasak. Az alapvető hálózati beállításokhoz költséghatékony lehetőség lehet.</p>
      </div>
      <div class="image-container">
        <img src="2950.jfif" alt="Cisco 2950 kapcsoló">
      </div>
    </div>
<div class="switch">
  <h2 class="switch-title">Cisco 2960</h2>
  <div class="switch-features">
    <h2>Jellemzők</h2>
    <p>A 2960 kapcsoló fejlett 2. rétegű kapcsolási funkciókat nyújt. Támogatja a VLAN-okat, a Rapid Spanning Tree Protocol (RSTP) -t, a hivatkozás-aggregációt, a Minőségbiztosítást (QoS) és a kibővített biztonsági funkciókat. A 2960 továbbá néhány 3. rétegű útválasztási lehetőséget kínál bizonyos modellekben, lehetővé téve a hálózat tervezésének nagyobb rugalmasságát.</p>
  </div>
  <div class="switch-use-cases">
    <h2>Használati esetek</h2>
    <p>A 2960 kapcsoló sokoldalúbb és alkalmasabb számos környezethez. Használható hozzáférési kapcsolóként közepes és nagy méretű hálózatokban, ahol magasabb teljesítmény és fejlett funkciók szükségesek. A néhány modellben található 3. rétegű képességek hasznosak lehetnek olyan környezetekben, ahol az alapvető útválasztás szükséges a hálózat szélén.</p>
  </div>
  <div class="image-container">
    <img src="2960.png" alt="Cisco 2960 kapcsoló">
  </div>
</div>
  </div>
  <div class="summary">
    <h2 class="summary-title">Összefoglaló</h2>
    <div class="summary-content">
      <p>A Cisco 2950 és a Cisco 2960 kapcsolók mindkettő Cisco modell, de különböznek teljesítményben, funkciókban és használati esetekben.</p>
      <ul>
        <li>A 2950 egy régebbi modell, gyors Ethernet csatlakozással és alapvető 2. rétegű funkciókkal rendelkezik, ami azt jelenti, hogy alkalmas kisebb hálózatokhoz egyszerűbb követelményekkel.</li>
        <li>A 2960 egy újabb modell, gigabites Ethernet csatlakozással, fejlettebb 2. rétegű funkciókkal és opcionális 3. rétegű útválasztási képességekkel rendelkezik, így sokoldalúbb és alkalmas közepes és nagy méretű hálózatokhoz, ahol magasabb teljesítmény követelmények vannak.</li>
      </ul>
    </div>
  </div>
</body>
</html>