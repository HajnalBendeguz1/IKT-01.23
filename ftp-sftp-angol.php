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
	<?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
	<!-- ######### HEADER ######### -->
	<a href="ftp-sftp.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a>
	<h1>FTP</h1>
	<p>File Transfer Protocol, or FTP for short, is a standard for transferring files over TCP/IP networks such as the Internet.
        The FTP connection is client/server based, i.e. it requires a server and a client program. It is a widely used protocol, FTP server and client programs exist for most modern operating systems, many web browsers can also act as FTP clients.
        The FTP protocol does not support encrypted authentication (user identification), so it can be dangerous to use on untrusted networks. FTPS uses SSL/TLS protocols to overcome this.
</p>
	<img src="ftpkep.png" alt="FTP" class="container">
	<h1>SFTP</h1>
	<p>In computing, the SSH file transfer protocol (also known as Secure File Transfer Protocol or SFTP) is a network protocol that provides file access, file transfer and file management over any trusted data stream. It was designed by the Internet Engineering Task Force (IETF) as an extension of the Secure Shell Protocol (SSH) version 2.0 to provide secure file transfer capabilities. According to the IETF's web draft, although this protocol is described in the context of the SSH-2 protocol, it can be used in a variety of applications, such as secure file transfers over Transport Layer Security (TLS) and the transfer of management information in VPN applications.
        This protocol assumes that it is running over a secure channel such as SSH, that the server has already authenticated the client, and that the identity of the client user is available to the protocol.
        Extra capabilities of the SFTP client include resuming interrupted transfers, directory listing and remote file removal.
        SFTP tries to be more platform independent than SCP; for example, in SCP, the extension of wildcards provided by the client depends on the server, while the SFTP architecture avoids this problem.In SFTP, file transfers can be easily terminated without interrupting the session as in other mechanisms.
        SFTP is not FTP over SSH, but a new protocol designed from the ground up by the IETF SECSH working group. It is sometimes confused with the Simple File Transfer Protocol.
        The protocol itself does not provide authentication and security; it expects the underlying protocol to provide it. SFTP is most commonly used as a subsystem of SSH version 2 implementations. However, it is also possible to run it over SSH-1 or other data streams. An SFTP client wishing to connect to an SSH-1 server must know the path to the SFTP server binary on the server side.
        Uploaded files can be associated with basic attributes such as timestamps. This is an advantage over the general FTP protocol.

</p>
	<img src="sftpkep.png" alt="SFTP" class="container">
	<h1>Main differences</h1>
	<p>Although both FTP and SFTP are used for file transfers, there are some fundamental differences:</p>
	<ul>
		<li>FTP is not secure and transmits data in clear text, while SFTP uses encryption to ensure the security of the data transfer.</li>
		<li>FTP uses two separate connections for data transfer and authentication, while SFTP uses a single connection for both.</li>
		<li>SFTP requires SSH access to the remote server, while FTP does not.</li>
	</ul>
</body>
</html>
