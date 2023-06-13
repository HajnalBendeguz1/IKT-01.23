<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hardver.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="zaszlok.css">
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header; ?>

    <!-- ######### CONTENT #########-->
    <div><a href="harver-angol.php"><img src="azaszlo.png" alt="Switch to English" title="Switch to English" class="zaszlok"></a></div>
    <div id="content">
        <h1 align="center">Hardverkövetelmények</h1>
        <h2 align="left">Rendszerspecifikációk dolgozóknak</h2>
        <p>Ezen az oldalon céghez idáig tervezett hardveres igényei vannak specifkálva, ami magába takarja a dolgozók számítógépétől és szerverektől kezdve a bridge routerig mindent.</p>
        <div style="height: 5vh;" class="empty-space"></div>
        <p>A dolgozóknak a lehető legfolyékonyabb munkavégzés érdekében high-end rendszer lett speifikálva, amely alább látható:</p>
        <table class="container-table">
            <tr>
                <td><p><img src="./be quiet 802.png" alt="worket pc case" class="img-restrict"></p></td>
                <td><table id="personal-table" class="tables">
                    <tr>
                        <td class="alkatresz-nev">Gépház</td>
                        <td class="spec">Cooler Master MasterCase H500P Mesh + 2x Noctua NF-A20 PWM</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Ventillátorok</td>
                        <td class="spec">3db Noctua NF-A14 PWM per Ház</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Processzor-hűtő</td>
                        <td class="spec">NH-D15 NM-AM4 felfogatással</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Alaplap</td>
                        <td class="spec">ASRock WRX80 Creator R2.0</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Processzor</td>
                        <td class="spec">Ryzen Threadripper PRO 5965WX</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Memória</td>
                        <td class="spec">G.SKILL Ripjaws V 64GB (4x16GB) -  DDR4 4400MHz F4-4400C19D-32GVK x2</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Grafikuskártya</td>
                        <td class="spec">RTX A6000 Ada</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Tárhely</td>
                        <td class="spec">Samsung 970 EVO Plus 2TB x 5</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Tápegység</td>
                        <td class="spec">Corsair HX1200 1200W Platinum per gép<br>és 2db Legrand DAKER DK PLUS 5000VA UPS</td>
                    </tr>
                    <tr>
                        <td>Billentyűzet</td>
                        <td>Redragon Kumara 2 (K552-2_BROWN_HU)</td>
                    </tr>
                    <tr>
                        <td>Egér</td>
                        <td>SteelSeries Arctis 7p+</td>
                    </tr>
                </table></td>
            <tr>
                <td colspan="2"><p id="spec-paragraph-restrict">Az alkatrészek úgy lettek összeállítva, hogy a lehető legnagyobb teljesítményt nyújtsák minimális zajszint mellett. Mivel az irodában 10+ gép lesz egymás közelében, fontosnak ítéltük, hogy a gépekből származó zaj minimális legyen.</p></td></tr>
            </tr>
        </table>
        <div style="height: 5vh;" class="empty-space"></div>
        <h2 align="left">Hálózati eszközök listája</h2>
        <p>Az alábbi eszközök az egész hálózatot kiteszik. A hálózat 3 subnetre van osztva és redundásan összekötve. A szerverszobának hűtése nem lett specifikálva a szoba látta híján.</p>
        <table class="container-table">
            <tr>
                <td><p><img src="./ftp-server.png" alt="dell-poweredge-r630 szerver" class="img-restrict"></p></td>
                <td><table id="network-table" class="tables">
                    <tr>
                        <td class="alkatresz-nev">Routerek</td>
                        <td>4db Cisco C891F-K9 Router</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Switchek</td>
                        <td>2db Cisco CBS220-24P-4G-EU</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="alkatresz-nev">Szerverek</td>
                        <td>FTP Server 100TB SAS háttértárral<br>128GB 2400MHz ram<br>128TB 12Gbps SAS Tárhely (hardveres Raidben)<br>Xeon E5-2673 V4</td> <!--https://www.bargainhardware.co.uk/dell-poweredge-r630-8-sff-configure-to-order-->
                    </tr>
                    <tr>
                        <td>Windows vagy linux szerver DHCP, DNS és WEB Localhosting szolgáltatásra</td>
                    </tr>
                    <tr>
                        <td>HPC Szerver (Konzultáció szükséges)</td>
                    </tr>
                    <tr>
                        <td>Multi-layer switchek</td>
                        <td>4db Cisco C9200L-48T-4G-E</td>
                    </tr>
                    <tr>
                        <td>Nyomtatók</td>
                        <td>HP LaserJet Enterprise M652dn (J7Z99A)</td>
                    </tr>
                    <tr>
                        <td>Soho router</td>
                        <td>ASUS ZenWiFi Pro XT12 (1-Pack) Router</td>
                    </tr>
                    <tr>
                        <td>vezetékek</td>
                        <td>térségtől függően</td>
                    </tr>
                </table></td>
            </tr>
        </table>
        
        <div style="height: 5vh;" class="empty-space"></div>
        <p>
        </p>
    </div>
    <!-- ######### CONTENT ######### -->
</body>
</html>