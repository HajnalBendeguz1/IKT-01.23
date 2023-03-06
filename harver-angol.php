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
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->

    <!-- ######### CONTENT #########-->
    <div><a href="harver.html"><img src="mzaszlo.png" alt="Switch to Hungarian" title="Switch to Hungarian" class="zaszlok"></a></div>
    <div id="content">
        <h1 align="center">Hardware Requirements</h1>
        <h2 align="left">System specification for Employees</h2>
        <p>All the Hardware Requirements are specified on this page, which includes everything from the worstations and servers to the bridge router.</p>
        <div style="height: 5vh;" class="empty-space"></div>
        <p>A dolgozóknak a lehető legfolyékonyabb munkavégzés érdekében high-end rendszer lett speifikálva, amely alább látható:</p>
        <p>In order to achieve smooth work a high-end system was specified, which can be seen below:</p>
        <table class="container-table">
            <tr>
                <td><p><img src="./be quiet 802.png" alt="worket pc case" class="img-restrict"></p></td>
                <td><table id="personal-table" class="tables">
                    <tr>
                        <td class="alkatresz-nev">Case</td>
                        <td class="spec">Be Quiet! Silent Base 802</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Fans</td>
                        <td class="spec">3db Noctua NF-A14 PWM per Ház</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">CPU Cooler</td>
                        <td class="spec">Noctua NH-U14S TR4-SP3<br>or NH-D15 with a TR4 mount</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Motherboard</td>
                        <td class="spec">ASRock WRX80-SU8-IPMI</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">CPU</td>
                        <td class="spec">Ryzen Threadripper PRO 5965WX</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Memory</td>
                        <td class="spec">Corsair Vengance LPX 4x32GB 3200MHz</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">GPU</td>
                        <td class="spec">Nvidia RTX 6000 ADA Gen.</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Storage</td>
                        <td class="spec">Samsung 980 PRO NVMe 2TB<br>Seagate Exos 8TB HDD</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Power Supply</td>
                        <td class="spec">Corsair HX1200 1200W Platinum per gép<br>és 2db Legrand DAKER DK PLUS 5000VA UPS</td>
                    </tr>
                </table></td>
            <tr>
                <td colspan="2"><p id="spec-paragraph-restrict">Az alkatrészek úgy lettek összeállítva, hogy a lehető legnagyobb teljesítményt nyújtsák minimális zajszint mellett. Mivel az irodában 10+ gép lesz egymás közelében, fontosnak ítéltük, hogy a gépekből származó zaj minimális legyen.</p></td></tr>
                <td colspan="2"><p id="spec-paragraph-restrict">The parts were chosen with low noise levels in mind, even under heavy load owing to the fact that there will be 10+ workstations in the office.</p></td></tr>
            </tr>
        </table>
        <div style="height: 5vh;" class="empty-space"></div>
        <h2 align="left">Network Equipment list</h2>
        <p>Az alábbi eszközök az egész hálózatot kiteszik. A hálózat 3 subnetre van osztva és redundásan összekötve. A szerverszobának hűtése nem lett specifikálva a szoba látta híján.</p>
        <p>The network consinsts from the devices seen below. The network is split into 3 subnets and is connected with redundancy. The cooling of the server room wasn't specified yet due to missing knowledge of the properties of the server room </p>
        <table class="container-table">
            <tr>
                <td><p><img src="./ftp-server.png" alt="dell-poweredge-r630 szerver" class="img-restrict"></p></td>
                <td><table id="network-table" class="tables">
                    <tr>
                        <td class="alkatresz-nev">Routers</td>
                        <td>3db Cisco ISR 2911</td>
                    </tr>
                    <tr>
                        <td class="alkatresz-nev">Switches</td>
                        <td>5db Cisco 2960</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="alkatresz-nev">Servers</td>
                        <td>FTP server with 10Gbps Bandwidth<br>128GB 2400MHz memory<br>128TB 12Gbps SAS Tárhely (Hardware Raid)<br>Xeon E5-2673 V4</td> <!--https://www.bargainhardware.co.uk/dell-poweredge-r630-8-sff-configure-to-order-->
                    </tr>
                    <tr>
                        <td>Server with HTTP, DNS and DHCP services</td>
                    </tr>
                    <tr>
                        <td>HPC Server (consultation required)</td>
                    </tr>
                    <tr>
                        <td>Cables</td>
                        <td>Depends on the size and layout of the office</td>
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