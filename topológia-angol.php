<html>
  <head>
    <title>Topológia</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaszlok.css">
    <style>
        body {
          text-align: center;
        }
        img {
          display: block;
          margin: 20px auto;
          border: 1px solid black;
          width: 500px;
          box-shadow: 1px 1px 2px #888888
        }
        img:hover {
          transform: scale(1.01);
          box-shadow: 2px 2px 5px #888888;
          cursor: pointer;
          transition: all 0.2s ease-in-out;
        }
        body {
          margin: 0;
          font-family: Arial, sans-serif;
          background-color: lightgray;
        }
        h1 {
          margin-left: auto;
          margin-right: auto;
          color: #007BFF;
          font-size: 36px;
          font-weight: bold;
          text-shadow: 2px 2px 4px #BBBBBB;
        }
        #content{
          padding-left: 20vw;
          padding-top: 3vh;
          padding-bottom: 3vh;
          padding-right: 20vw;
        }
        #outdated{
          font-size: 75%;
          text-align: center;
          vertical-align: top;
          margin-top: 0;
          padding-top: 0; 
        }
      </style>
  </head>
  <body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="topológia.php"><img src="mzaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <div id="content">
      <h1>Topology</h1>
      <p>The topology was based on the needs of the company.</p>
      <p>The company is connected to the ISP via optical line. The topology consists of 3 vlans (VLAN10, 20 and 30), which contain the servers, the computers of the employees and the CEOs respectively.</p>
      <p><img src="topology1.png" alt="Topology Diagram">
      <span id="outdated">The picture represents an older version of the Topology</span></p>
      <p>The subnets are connected with redundancy, so in case of any damage or malfunction regarding the routers and the cables the network will still work.</p>
      <p style="height: 5vh;">
      <p>The subnet of the employees can serve up to 30 devices, thus the computers and the printer can all fit into the subnet with extra capacity for phones with an access-point set up. The switches are connected with etherchannel for extra redundancy and speed.</p>
      <img src="VLAN20.png" alt="dolgozók alhálózata">
      <p style="height: 5vh;"></p>
      <table>
        <tr><td><p>The network of the servers won't be built like the picture, it's a representation of how will different services, like DHCP, DNS and Webservice run on different ips with portforwarding. The SAS Drives of the Storage server will be connected with RAID5. HPC(High-Performance Computation) Servers will take up most of the space in the room. To set up these servers, we'll need the help of the expert(s) sent by the providing company.</p></td>
        <td><img src="VLAN10.png" alt="Server subnet" height="300vh"></td></tr>
        <tr>
          <td colspan="2" align="center"><p>In the project a cloud-based Storage server was also set up. The Network Address Translation between the ISP and the sites is still under development. </p></td>
        </tr>
      </table>
      <p style="height: 5vh;"></p>
      <!-- <p>3 router redundásan összekapcsolva köti össze a vlanokat A routerek között az adatáramlás nagy sebességű legyen.</p> -->
      <!-- <img src="top.jpg" alt="Topology Image"> -->
    </div>
  </body>
</html>
