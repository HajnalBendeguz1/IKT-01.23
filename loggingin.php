<!DOCTYPE html>
<?php
require('phpfunctions.php');
$uname = test_input($_POST["felhasznalonev"]);
$upass = test_input($_POST["jelszo"]);
if(query($conn, $uname, $upass)===true){

    echo `<script>
    document.getElementById("login").style.height = 0%;
    document.getElementById("content-holder").style.pointerEvents = all;
    </script>`;
}
?>