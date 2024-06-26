<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="zaszlok.css">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<title>FTP and SFTP</title>
	<style>
		body {
			background: linear-gradient(to bottom, #3366cc, #ffffff);
			font-family: Arial, sans-serif;
			line-height: 1.6;
			margin: 0;
			padding: 0;
		}

		h1, h2 {
			font-weight: bold;
			margin-bottom: 10px;
			text-align: center;
			text-shadow: 2px 2px #000000;
		}


		h2 {
			font-size: 36px;
			color: black;
			margin-top: 50px;
			box-shadow: 2px 2px 4px #888888;
		}

		p {
			margin: 0 0 20px 0;
			padding: 0 20px;
			text-align: justify;
		}

		img {
			display: block;
			margin: 0 auto;
			max-width: 100%;
			height: auto;
			box-shadow: 2px 2px 4px #888888;
		}

		ul {
			margin: 0 0 20px 0;
			padding: 0 20px;
		}

		li {
			margin-bottom: 10px;
		}

		li::before {
			content: "\2022";
			color: #3366cc;
			font-weight: bold;
			display: inline-block;
			width: 1em;
			margin-left: -1em;
		}
.container {
    position: relative;
    z-index: 1;
    animation: slide-in 0.5s ease-out;
}
a:hover {
    color: #3366cc;
    transition: all 0.3s ease;
}
@keyframes slide-in {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0%);
    }
}
	</style>
	<script>

	</script>
</head>
<body>
	<!-- ######### HEADER ######### -->
	<?php $header = file_get_contents("./header.html"); echo $header; ?>
	<!-- ######### HEADER ######### -->
	<a href="ftp-sftp-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a>
	<h1>FTP</h1>
	<p>A File Transfer Protocol, vagy rövid nevén FTP TCP/IP hálózatokon mint amilyen az internet is történő állományátvitelre szolgáló szabvány.
        Az FTP kapcsolat ügyfél/kiszolgáló alapú, vagyis szükség van egy kiszolgáló- (=szerver) és egy ügyfélprogramra (=kliens). Elterjedt protokoll, a legtöbb modern operációs rendszerhez létezik FTP-szerver és kliens program, sok webböngésző is képes FTP-kliensként működni.
        Az FTP protokoll nem támogat titkosított autentikációt (felhasználó-azonosítást), így nem megbízható hálózaton való használata veszélyes lehet. Ezt küszöböli ki SSL/TLS protokollokkal az FTPS.</p>
	<img src="ftpkep.png" alt="FTP" class="container">
	<h1>SFTP</h1>
	<p>A számítástechnikában az SSH fájlátviteli protokoll (más néven Secure File Transfer Protocol vagy SFTP) egy olyan hálózati protokoll, amely fájlelérést, fájlátvitelt és fájlkezelést biztosít bármilyen megbízható adatfolyamon keresztül. Az Internet Engineering Task Force (IETF) tervezte a Secure Shell protokoll (SSH) 2.0 verziójának kiterjesztéseként, hogy biztonságos fájlátviteli képességeket biztosítson. Az IETF internetes tervezetében az áll, hogy bár ez a protokoll az SSH-2 protokoll kontextusában kerül leírásra, számos különböző alkalmazásban használható, például biztonságos fájlátvitelre a Transport Layer Security (TLS) protokollon keresztül és a VPN-alkalmazásokban a kezelési információk átvitelére.
        Ez a protokoll feltételezi, hogy biztonságos csatornán, például SSH-n keresztül fut, hogy a kiszolgáló már hitelesítette az ügyfelet, és hogy az ügyfél felhasználójának személyazonossága a protokoll számára elérhető.
        Az SFTP kliens extra képességei közé tartozik a megszakadt átvitel folytatása, a könyvtárak listázása és a távoli fájlok eltávolítása.
        Az SFTP megpróbál platformfüggetlenebb lenni, mint az SCP; az SCP esetében például az ügyfél által megadott vadkártyák kiterjesztése a kiszolgálótól függ, míg az SFTP felépítése elkerüli ezt a problémát.Az SFTP protokollban a fájlátvitel könnyen befejezhető anélkül, hogy a munkamenetet meg kellene szakítani, mint más mechanizmusok esetében.
        Az SFTP nem az SSH-n keresztül futtatott FTP, hanem egy új protokoll, amelyet az IETF SECSH munkacsoportja az alapoktól kezdve tervezett. Néha összetévesztik a Simple File Transfer Protocol protokollal.
        Maga a protokoll nem biztosítja a hitelesítést és a biztonságot; elvárja, hogy az alapul szolgáló protokoll biztosítsa ezt. Az SFTP-t leggyakrabban az SSH protokoll 2-es verziójú implementációinak alrendszereként használják. Lehetséges azonban SSH-1 protokollon vagy más adatfolyamokon keresztül is futtatni.. Az SSH-1 kiszolgálóhoz csatlakozni kívánó SFTP-kliensnek ismernie kell az SFTP-kiszolgáló binárisának elérési útvonalát a kiszolgálói oldalon.
        A feltöltött fájlokat alapvető attribútumaikkal, például időbélyegekkel lehet társítani. Ez előnyt jelent az általános FTP protokollal szemben.</p>
	<img src="sftpkep.png" alt="SFTP" class="container">
	<h1>Fő külömbségek</h1>
	<p>Bár mind az FTP-t, mind az SFTP-t fájlátvitelre használják, van köztük néhány alapvető különbség:</p>
	<ul>
		<li>Az FTP nem biztonságos, és az adatokat tiszta szövegben továbbítja, míg az SFTP titkosítást használ az adatátvitel biztonsága érdekében.</li>
		<li>Az FTP két külön kapcsolatot használ az adatátvitelhez és a hitelesítéshez, míg az SFTP mindkettőhöz egyetlen kapcsolatot használ.</li>
		<li>Az SFTP-hez SSH-hozzáférés szükséges a távoli kiszolgálóhoz, míg az FTP-hez nem.</li>
	</ul>
</body>
</html>
