<!DOCTYPE html>
<html>
<head>
    <title>Router összehasonlítás</title>
    <link rel="stylesheet" href="zaszlok.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 70%;
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            font-weight: bold;
            background-color: #ffc107;
            transition: background-color 0.3s ease;
        }
        img {
            margin: 20px auto;
            width: 400px;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header;?>
<div><a href="router-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <h1>Router összehasonlítás</h1>
    <table>
        <tr>
            <th>Jellemzők</th>
            <th>Cisco 1841</th>
            <th>Cisco 1941</th>
        </tr>
        <tr>
            <td>Kiadás dátuma</td>
            <td>2004</td>
            <td>2009</td>
        </tr>
        <tr>
            <td>Teljesítmény</td>
            <td>Alacsonyabb</td>
            <td class="highlight">Magasabb</td>
        </tr>
        <tr>
            <td>Interfészek</td>
            <td>Korlátozott lehetőségek</td>
            <td class="highlight">Több lehetőség</td>
        </tr>
        <tr>
            <td>Biztonsági funkciók</td>
            <td>Alap</td>
            <td class="highlight">Fejlettebb</td>
        </tr>
        <tr>
            <td>Útvonalválasztási protokollok</td>
            <td>Széles választék</td>
            <td class="highlight">Lehetőség szerint fejlettebb</td>
        </tr>
        <tr>
            <td>Szoftver támogatás</td>
            <td>Rövidebb</td>
            <td class="highlight">Hosszabb</td>
        </tr>
        <tr>
            <td>Ár</td>
            <td>Megfizethető</td>
            <td class="highlight">Drága</td>
        </tr>
        <tr>
            <td></td>
            <td><img src="1941.jpg" alt="Cisco 1941 Router"></td>
            <td><img src="1841.png" alt="Cisco 1841 Router"></td>
        </tr>
</table>
</body>
</html>