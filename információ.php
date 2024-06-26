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
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
    <div><a href="információ angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <h1>Mivel foglalkozik a cég?</h1>
    <p>A cég egy komplex és nyersanyag-éhes szimulációkat állít elő különböző tudományos területeken például:</p>
    <ul>
      <li>Asztronómiai entitások szimulálása pl.: Szupernóvák, Nebulák, Quazárok, és különböző csillagok</li>
      <li>Molekuláris felépítése és tulajdonságaik vizsgálása, fehérjéknek (Fehérje hajtogatás), DNS-eknek,
        szénhidrogénláncoknak.</li>
    </ul>
    <h1>A cég igényei</h1>
    <p>A cégben 10 dolgozó van akik a szimulációkon dolgoznak, akiknek kell egy high-end workstation,
        perifériák (eszközigényben megírva - általam), nagy sebességű kapcsolat a belső szerverekhez és wifi.</p>
    <p>A 2 főnöknek az irodába hálozati elérés, wifi. Nyomtatók minden helységbe.</p>
    <p>A rendszergazdának egy a szerverszobában lévő workstation, a szerverekhez gyors fizikai és távoli elérés
        karbantartáshoz és hibaelhárításhoz.</p>
    <img src="b.jpg" alt="Company Image">
  </body>
</html>