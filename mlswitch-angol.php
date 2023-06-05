<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<title>Cisco 3560 vs 3650 Switch Comparison</title>
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
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->
	<div><a href="mlswitchek.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
	<h1>Cisco 3560 vs 3650 Switch Comparison</h1>
	<table>
		<tr>
			<th>Cisco 3560</th>
			<th>Cisco 3650</th>
		</tr>
		<tr>
			<td><img src="switchkep1.png"></td>
			<td><img src="switchkep2.png"></td>
		</tr>
		<tr>
			<td>The Catalyst 3560 switch is an Ethernet switch that can connect devices such as workstations, Cisco wireless access points, Cisco IP phones, and other network devices like servers, routers, and other switches. This chapter provides a functional overview of the device.</td>
			<td>The Cisco Catalyst 3650 series is a standalone and stackable access switching platform that enables wired and wireless services on a single Cisco IOS XE software-based platform.</td>
		</tr>
		<tr>
			<td>The 24 and 48-port Catalyst 3560 switches can be deployed as backbone switches, aggregating 10BASE-T and 100BASE-TX Ethernet traffic from other network devices.</td>
			<td>Cisco provides several rich features, such as stack-based stateful switchover, granular QoS, security, and Flexible NetFlow (FNF) services seamlessly on wired and wireless networks.</td>
		</tr>
		<tr>
			<td>The Catalyst 3560-8PC and Catalyst 3560-12PC-S compact switches provide the same Power over Ethernet (PoE) connectivity and can be deployed outside the traditional wiring closet environment, such as office workspaces and classrooms.</td>
			<td>The wired and wireless features are packaged into a single Cisco IOS software image, reducing the number of software images that need to be qualified/authorized in the network before enabling them. A single console port used for command-line interface (CLI) management reduces the number of touchpoints required for managing wired and wireless services, thereby reducing network complexity, simplifying network operations, and reducing the TCO of infrastructure.</td>
		</tr>
	</table>
    <p align="center"><img src="switchhasonlitas.png" alt="Comparison" title="Comparison"></p><h2 align="center">Conclusion</h2><p class="conclusion" align="center">The 3650 is better because it is much faster, supports stacking for 160Gbps throughput, has more flash memory, supports wireless connectivity, and has a multi-core CPU.</p>
</body>
</html>