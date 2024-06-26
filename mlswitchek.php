<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<title>Cisco 3560 vs 3650 Switch Összehasonlitás</title>
	<link rel="stylesheet" href="zaszlok.css">
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
		
		header {
			background-color: #006699;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		
		h1 {
			font-size: 36px;
			margin: 0;
		}
		
		h2 {
			font-size: 24px;
			margin-top: 50px;
			margin-bottom: 20px;
		}
		
		.container {
			margin: 0 auto;
			max-width: 1200px;
			padding: 50px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			border-radius: 10px;
			overflow: hidden;
		}
		
		table {
			border-collapse: collapse;
			margin: 0 auto;
			margin-bottom: 50px;
			width: 100%;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		
		th, td {
			padding: 15px;
			text-align: center;
			border-bottom: 1px solid #ddd;
            width: 50%;
		}
		
		th {
			background-color: #006699;
			color: #fff;
			font-weight: bold;
			text-transform: uppercase;
		}
		
		td:first-child {
			font-weight: bold;
		}
		
		img {
			max-width: 100%;
			height: auto;
		}
        
		
		.conclusion {
			margin: 0 auto;
			padding: 50px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			border-radius: 10px;
			text-align: justify;
			line-height: 1.5;
		}
		
		@media screen and (max-width: 768px) {
			header h1 {
				font-size: 28px;
			}
			.container {
				padding: 30px;
			}
			table {
				margin-bottom: 30px;
			}
			.conclusion {
				padding: 30px;
			}
		}
	</style>
</head>
<body>
	<link rel="stylesheet" href="header.css">
    <!-- ######### HEADER ######### -->
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->
	<div><a href="mlswitch-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
	<h1>Cisco 3560 vs 3650 Switch Összehasonlitás</h1>
	<table>
		<tr>
			<th>Cisco 3560</th>
			<th>Cisco 3650</th>
		</tr>
		<tr>
			<td><img src="switchkep1.png"td>
			<td><img src="switchkep2.png"></td>
		</tr>
		<tr>
			<td>A Catalyst 3560 switch egy olyan Ethernet switch, amelyhez olyan eszközöket csatlakoztathat, mint például munkaállomások, Cisco vezeték nélküli hozzáférési pontok, Cisco IP-telefonok és egyéb hálózatieszközökhöz, például kiszolgálókhoz, útválasztókhoz és más kapcsolókhoz. Ez a fejezet funkcionális áttekintést nyújt az eszközről.</td>
			<td>A Cisco Catalyst 3650 sorozat egy önálló és stackelhető hozzáférési kapcsolási platform, amely vezetékes és vezeték nélküli szolgáltatásokat tesz lehetővé egyetlen Cisco IOS XE szoftveralapú platformon.</td>
		</tr>
		<tr>
			<td>A 24 és 48 portos Catalyst 3560 kapcsolók gerinchálózati kapcsolóként telepíthetők, aggregálhatnak10BASE-T és 100BASE-TX Ethernet forgalmat más hálózati eszközökről. </td>
			<td>A Cisco úttörő módon számos gazdag képességet, például a stackelésen alapuló állapotváltáson, a granuláris QoS-t, a biztonságot és a Flexible NetFlow (FNF) szolgáltatást vezetékes és vezeték nélküli hálózatokon zökkenőmentesen biztosítja. </td>
		</tr>
		<tr>
			<td>A Catalyst 3560-8PC és Catalyst 3560-12PC-S kompakt switch-ek ugyanazt a Power over Ethernet (PoE) csatlakoztathatóságát biztosítják és a hagyományos kábelezési szekrénykörnyezeten kívül is telepíthetők, például irodai munkaterületeken és tantermekben.</td>
			<td>A vezetékes és a vezeték nélküli funkciók egyetlen Cisco IOS szoftver image-be vannak csomagolva, ami csökkenti a felhasználók által a hálózatukban történő engedélyezés előtt minősítendő/engedélyezendő szoftver image-ek számát. 
            A parancssori interfész (CLI) kezeléséhez használt egyetlen konzolport csökkenti a vezetékes és a vezeték nélküli szolgáltatások kezeléséhez szükséges érintkezési pontok számát, ezáltal csökkenti a hálózat összetettségét, egyszerűsíti a hálózati üzemeltetést, és csökkenti az infrastruktúra kezelésének TCO-ját.
                </td>
		</tr>
	</table>
    <p align="center"><img src="switchhasonlitas.png" alt="Összehasonlitás" title="Összehasonlitás"></p><h2 align="center">Következtetés</h2><p class="conclusion" align="center">A 3650 a jobb mert sokkal gyorsabb, lehet stackelni és azzal 160gbps gyorsaságra képes, több a flash memóriája, képes vezeték nélküli kapcsolatra, több magos cpu van benne.</p>
</body>
</html>
