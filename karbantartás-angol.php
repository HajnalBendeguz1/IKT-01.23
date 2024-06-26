<html>
  <head>
    <title>Karbantartás</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
        body {
          font-family: Arial, sans-serif;
          text-align: center;
          background-color: lightgray;
        }
        h1 {
          color: blue;
        }
        img {
          width: 40%;
          height: auto;
          margin: 20px;
          border: 5px solid gray;
          box-shadow: 10px 10px 5px gray;
          border-radius: 15px;
        }
      </style>
  </head>
  <body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="karbantartás.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
    <h1>Maintenance</h1>
    <p>During the deployment part of the project, we also involve the client company's system administrator in the process so that they are aware of the network architecture. After the installation is complete, we walk him through the entire network so that he can troubleshoot any minor problems.</p>
    <p>Once a month we recommend dusting your computers and installing updates.</p>
    <p>Every six months, our company provides a comprehensive, full-service maintenance that includes a review of your firewalls, software and installed devices (router, switch, server, pc) and the necessary repairs and updates.</p>
    <img src="kar.jpg" alt="karbantartás kép 1">
    <p><b>HPC server maintenance, usesage</b></p>
    <p><b>Sending data from the Data Storage server to the cloud off-site, maintenance of storage, possible restoration (raid :)</b></p>
    <p>If the administrator is unable to troubleshoot the problem, you can reach us on 06301234567.</p>
    <img src="kar2.jpg" alt="karbantartás kép 2">
  </body>
</html>
