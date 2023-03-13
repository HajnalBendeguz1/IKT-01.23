<?php
require('phpfunctions.php');
if($_COOKIE['logged']==='true'){
    echo `<script>
    document.getElementById("login").style.height = "0%";
    document.getElementById("content-holder").style.pointerEvents = "all";
    </script>`;
}
else{include('indexlogin.php');}
mysqli_close($conn);
?>