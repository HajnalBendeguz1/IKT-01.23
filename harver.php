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
    <div><a href="harver-angol.html"><img src="azaszlo.png" alt="Switch to English" title="Switch to English" class="zaszlok"></a></div>
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
                        <td class="spec">Be Quiet! Silent Base 802</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Ventillátorok</td>
                        <td class="spec">3db Noctua NF-A14 PWM per Ház</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Processzor-hűtő</td>
                        <td class="spec">Noctua NH-U14S TR4-SP3</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Alaplap</td>
                        <td class="spec">ASRock WRX80-SU8-IPMI</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Processzor</td>
                        <td class="spec">Ryzen Threadripper PRO 5965WX</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Memória</td>
                        <td class="spec">Corsair Vengance LPX 4x32GB 3200MHz</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Grafikuskártya</td>
                        <td class="spec">Nvidia RTX 6000 ADA Gen.</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Tárhely</td>
                        <td class="spec">Samsung 980 PRO NVMe 2TB<br>Seagate Exos 8TB HDD</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Tápegység</td>
                        <td class="spec">Corsair HX1200 1200W Platinum per gép<br>és 2db Legrand DAKER DK PLUS 5000VA UPS</td>
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
                        <td>3db Cisco ISR 2911</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Switchek</td>
                        <td>5db Cisco 2960</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="alkatresz-nev">Szerverek</td>
                        <td>FTP szerver 10Gbps Sávszélességgel<br>128GB 2400MHz ram<br>128TB 12Gbps SAS Tárhely (hardveres Raidben)<br>Xeon E5-2673 V4</td> <!--https://www.bargainhardware.co.uk/dell-poweredge-r630-8-sff-configure-to-order-->
                    </tr>
                    <tr>
                        <td>Szerver HTTP, DNS és DHCP Szolgáltatásokkal</td>
                    </tr>
                    <tr>
                        <td>HPC Szerver (Konzultáció szükséges)</td>
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