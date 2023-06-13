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
    <?php $header = file_get_contents("./header.html"); echo $header; ?>
  <!-- ######### HEADER ######### -->
    <div><a href="dokumentáció-angol.php"><img src="azaszlo.png" alt="English" title="English" class="zaszlok"></a></div>
    <h1>Dokumentáció</h1>
    <p></p>  
    
</body>
</html>