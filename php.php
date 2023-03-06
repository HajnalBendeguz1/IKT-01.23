<!DOCTYPE html>
<html>
<head>
	<title>PHP Weblap</title>
	<style>
		body{
            font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
        }
        body{
            background: linear-gradient(to bottom, #000069, #a5a5ff);
        }
        
		h1 {
			color: #0080ff;
			font-size: 48px;
			margin-top: 50px;
			margin-bottom: 20px;
			text-align: center;
			text-shadow: 2px 2px 4px #ccc;
		}
		h2 {
			color: #444;
			font-size: 24px;
			margin-top: 30px;
			margin-bottom: 10px;
			text-shadow: 1px 1px 2px #ccc;
		}
		p {
			font-size: 18px;
			line-height: 1.5;
			margin: 10px 0;
			text-align: justify;
			text-shadow: 1px 1px 2px #ccc;
		}
		ul {
			margin: 10px 0;
			padding: 0 0 0 20px;
			list-style: square;
			text-shadow: 1px 1px 2px #ccc;
            list-style-type: none;
		}
		a {
			color: #0080ff;
			text-decoration: none;
			border-bottom: 2px solid #0080ff;
			transition: border-bottom-color 0.2s ease-in-out;
		}
		a:hover {
			border-bottom-color: #444;
		}
        img{
            margin-right: 10%;
            display: block;
            margin-left: auto;
            float: right;
            height: 200px;
            background-size: cover;
            background-position:right right;
        }
        .overlay {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            max-width: 1000px;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px #000;
        }
        .overlay h1 {
            font-size: 5em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }
        .overlay p {
            font-size: 2em;
            margin-bottom: 1.5em;
        }
        .overlay a {
            display: inline-block;
            background-color: #0080ff;
            color: #fff;
            padding: 0.5em 1em;
            border-radius: 50px;
            transition: background-color 0.2s ease-in-out;
       
        }
	</style>
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header; ?>
	<h1 class="overlay h1">PHP Weblap</h1>
	<p class="overlay p">A PHP (Hypertext Preprocessor) egy szerveroldali szkriptnyelv, amelyet dinamikus weboldalak létrehozására használnak. Ez az egyik legnépszerűbb programozási nyelv, amelyet webfejlesztéshez használnak.</p>
	<p class="overlay p">A PHP kód lefut a szerveren, és az eredményül kapott HTML kimenet elküldésre kerül a kliens webböngészőjébe. Ez lehetővé teszi a dinamikus tartalom generálását a felhasználói bevitel vagy más változók alapján.</p>
	 <img src="elefantos_php.png" alt="php logó" title="php logó"><h2 class="overlay">PHP tulajdonságai:</h2>
   
	<ul class="overlay">
		<li>Nyílt forráskód</li>
		<li>Könnyű használat</li>
		<li>Támogatja az adatbázisok széles skáláját</li>
		<li>Különféle webszerverekkel kompatibilis</li>
		<li>HTML kódba ágyazható</li>
		<li>Támogatja a cookie-kat és a munkameneteket</li>
		<li>Nagy fejlesztői és felhasználói közösséggel rendelkezik</li>
	</ul>
	<h2 class="overlay">Példák a PHP használatára</h2>
	<p class="overlay p">Néhány példa arra, hogy a PHP mire használható:</p>
	<ul class="overlay">
		<li>Dinamikus weboldalak készítése</li>
		<li>Adatok feldolgozása</li>
		<li>Adatbázisokkal való interakció</li>
		<li>PDF dokumentumok generálása</li>
		<li>Képek készítése és szerkesztése</li>
	</ul>
     
	<h2 class="overlay">A PHP használatának első lépései</h2>
	<p class="overlay p">A PHP-vel való fejlesztés megkezdéséhez szükség van egy PHP-t támogató webszerverre és egy szövegszerkesztőre a kód megírásához. Számos online forrás áll rendelkezésre a PHP használatának megkezdéséhez, beleértve az oktatóanyagokat, a dokumentációt és a fórumokat.</p>
	<p class="overlay p">Íme néhány népszerű forrás a PHP tanulásához:</p>
	<ul>
		<li>*nem elérhető magyar nyelvű dokumentáció*</li>
