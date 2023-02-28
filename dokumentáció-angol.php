<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentáció és fizikai felépítés</title>
    <link rel="stylesheet" href="zaszlok.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: lightgray;
      }
      h1 {
        text-align: center;
        margin-top: 50px;
        color: navy;
      }
      p {
        margin: 20px;
        font-size: 18px;
      }
      img {
        display: block;
        margin: 20px auto;
        border: solid 5px gray;
        width: 50%;
      }
    </style>
</head>
<body>
    <!-- ######### HEADER ######### --> 
    <?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
    <!-- ######### HEADER ######### -->
    <div><a href="dokumentáció.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
    <h1>Documentation and physical architecture</h1>
    <p>I use Word word processor for documentation</p>
    <p>I determined the asset requirements by creating an Excel spreadsheet</p>
    <p>The tools were purchased and installed by me</p>
    <img src="zsoldos.png" alt="Zsoldos kép">
</body>
</html>