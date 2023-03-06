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
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="topológia-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <div id="content">
      <h1>Topológia</h1>
      <p>A topológia felépítését a cég szükségletei alapján készítettük el.</p>
      <p>A céghez optikai kábellel van bekötve az internet. A topológia 3 vlanból áll (VLAN10, VLAN20, VLAN30), amelyek a Szervereknek, dolgozóknak és cégvezetőknek van külön-külön kialakítva.</p>
      <p><img src="topology1.png" alt="Topology Diagram">
      <span id="outdated">Ez a kép a topológia egy régebbi verzióját mutatja</span></p>
      <p>Az alhálózatok redundánsan vannak összekötve, hogy bármiféle kábelt érte sérülés vagy routerrel való probléma esetén ne áljon le az egész hálózat</p>
      <p style="height: 5vh;">
      <p>A dolgozóknak egy 30 eszközt kiszolgálni képes alhálózat van felállítva, így a nyomtató, számítógépek és telefonok is ráférnek a hálózatra egy access-pointal tartalék kapacitással. A hálózati kapcsolók etherchannel-el vannak összekötve extra redundanciát biztosítva.</p>
      <img src="VLAN20.png" alt="dolgozók alhálózata">
      <p style="height: 5vh;"></p>
      <table>
        <tr><td><p>A szerver hálózat nem az ábrázolás alapján lesz megépítve. A DHCP, DNS és Web szolgáltatások egy szerveren fognak futni porttovábbítással. A TFTP szerver SAS meghajtói RAID5-el lesznek összekötve. HPC(High-Performance Computation) szerverek fogják a szerver szoba nagyrészét elfoglalni. Ezeknek a beállításához a szervereket szolgáltató cégtől kiküldött szakember segítsége kell, amivel párhuzamosan tudjuk hozzáigazítani a subnet kiosztását.</p></td>
        <td><img src="VLAN10.png" alt="SZerver subnet" height="300vh"></td></tr>
        <tr>
          <td colspan="2" align="center"><p>A projektben egy Cloudban lévő FTP szerver is lett felállítva. Az ISP és a helyszínek között a NAT még fejlesztés alatt van. </p></td>
        </tr>
      </table>
      <p style="height: 5vh;"></p>
      <!-- <p>3 router redundásan összekapcsolva köti össze a vlanokat A routerek között az adatáramlás nagy sebességű legyen.</p> -->
      <!-- <img src="top.jpg" alt="Topology Image"> -->
    </div>
  </body>
</html>
