<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hardver.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="zaszlok.css">
</head>
<style>
    p{
        font-size: medium;
    }
    td{
        border: 1px;
        border-style: none;
        box-shadow: 2px 2px 5px 1.4px rgba(0, 0, 0, 0.2);
        padding: 5px 8px 5px 8px;
        background-color: rgb(215, 215, 215);
        text-align: center;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
</style>
<body>
    <!-- ######### HEADER ######### -->
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->

    <!-- ######### CONTENT #########-->
    <div><a href="get-post-angol.php"><img src="azaszlo.png" alt="Switch to English" title="Switch to English" class="zaszlok"></a></div>
    <div id="content">
        <h1>HTTP és HTTPS</h1>
        <p>A HTTP és HTTPS kérés-válasz protokolként működik kliens és szerver között.
           Állapotnélküli protokolok, ami azt jelenti, hogy minden egyes adatcserét külön eseményként kezel. A HTTPS SSL-t használ az adatok biztonságosabb továbbítására.
        </p>
        <p align="center"><img src="http_to_https.jpg" alt="http+ssl=https" width="100%"></p>
        <div style="height: 5vh;" class="empty-space"></div>
        <h1>GET és POST</h1>
        <p>A kettő leggyakrabban használt http metódus a GET és a POST.<br>A kettő között jelentős különbség van és más más funkcionalitást töltenek be.</p>
        <table>
            <tr><td>GET</td><td>POST</td></tr>
            <tr><td>Adatok Cache-ben elmentve maradnak, böngésző előzményeiben megtalálhatóak</td><td>Adatok nincsenek mentve se cache-ben, se előzményekben</td></tr>
            <tr><td>Adatmentés miatt csak adatlekérésre használjuk<br>küldött adatok az urlben megtalálhatóak</td><td>Adatküldésre, Módosításra használjuk</td></tr>
            <tr><td>Csak ASCII karakterek használatára képes és azt is 2048 karakter erejéig</td><td>nincs korlátozás</td></tr>
        </table>
        <div style="height: 5vh;" class="empty-space"></div>
        <p>Személyes adatokat, mint jelszavakat, e-mail címeket vagy bármit ami bizalmas, sütikben tárolunk.</p>
    </div>
    <!-- ######### CONTENT #########-->
</body>