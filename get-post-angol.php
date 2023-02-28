<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hardver.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="zaszlok.css">
</head>
<style>
    p{
        font-size: medium;
    }
    td{
        border: 1px;
        border-style: none;
        box-shadow: 2px 2px 5px 1.4px rgba(0, 0, 0, 0.2);
        padding: 5px 8px 5px 8px;
        background-color: rgb(215, 215, 215);
        text-align: center;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
</style>
<body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->

    <!-- ######### CONTENT #########-->
    <div><a href="get-post.php"><img src="mzaszlo.png" alt="Switch to Hungarian" title="Switch to English" class="zaszlok"></a></div>
    <div id="content">
        <h1>HTTP and HTTPS</h1>
        <p>The HTTP and HTTPS work as request-response protocols between client and server.
           They are stateless protocols, which means, that every data-transfer is treated as a separate event. HTTPS uses SSL for a more secure data-transfer.
        </p>
        <p align="center"><img src="http_to_https.jpg" alt="http+ssl=https" width="100%"></p>
        <div style="height: 5vh;" class="empty-space"></div>
        <h1>GET and POST</h1>
        <p>The two most used HTTP method are GET and POST.<br>They serve different functionality and there's a significant differences between them.</p>
        <table>
            <tr><td>GET</td><td>POST</td></tr>
            <tr><td>Data are saved in chache, they can be found in browser history</td><td>data are not saved in cache, nor browser history.</td></tr>
            <tr><td>Because of data saving it is only used for data requests<br>sent data can be seen in the url.</td><td>used for modification and sending of data</td></tr>
            <tr><td>Only capable of using ASCII characters at a maximum of 2048 character length</td><td>no restrictions</td></tr>
        </table>
        <div style="height: 5vh;" class="empty-space"></div>
        <p>Personal Information, like passwords, e-mail addresses or any other confidential data are stored in cookies.</p>
    </div>
    <!-- ######### CONTENT #########-->
</body>