<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="zaszlok.css">
	<title>PHP Webpage</title>
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
            color: #a5a5ff;
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
<?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
	<div><a href="php.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
	<h1 class="overlay h1">PHP Webpage</h1>
	<p class="overlay p">PHP (Hypertext Preprocessor) is a server-side scripting language that is used to create dynamic web pages. It is one of the most popular programming languages used for web development.</p>
	<p class="overlay p">PHP code is executed on the server and the resulting HTML output is sent to the client's web browser. This allows for dynamic content to be generated based on user input or other variables.</p>
	 <img src="elefantos_php.png" alt="php logó" title="php logó"><h2 class="overlay">Features of PHP</h2>
   
	<ul class="overlay">
		<li>Open source</li>
		<li>Easy to learn and use</li>
		<li>Supports a wide range of databases</li>
		<li>Compatible with various web servers</li>
		<li>Can be embedded into HTML code</li>
		<li>Provides support for cookies and sessions</li>
		<li>Has a large community of developers and users</li>
	</ul>
	<h2 class="overlay">Examples of PHP Usage</h2>
	<p class="overlay p">Some examples of what PHP can be used for include:</p>
	<ul class="overlay">
		<li>Creating dynamic web pages</li>
		<li>Processing form data</li>
		<li>Interacting with databases</li>
		<li>Generating PDF documents</li>
		<li>Creating and manipulating images</li>
	</ul>
     
	<h2 class="overlay">Getting Started with PHP</h2>
	<p class="overlay p">To start developing with PHP, you will need a web server that supports PHP and a text editor to write your code. There are many resources available online to help you get started with PHP, including tutorials, documentation, and forums.</p>
	<p class="overlay p">Here are some popular resources for learning PHP:</p>
	<ul>
		<li><a href="https://www.php.net/manual/en/getting-started.php" class="overlay a">PHP Documentation</a>
