<?php
// $username = "id20407110_admin";
// $password =  "G000fy@444hh";
// $dbname = "id20407110_userdatabase";
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "user_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn===false) {
  die("Connection failed: \n" . $conn->connect_error . "<br>");
}
echo("connected successfully \n" . $conn->host_info . "<br>");
echo print_r($_COOKIE);

//check login
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function query($conn, $Name, $userPassword){
    $mysql = "SELECT * FROM user_table WHERE user_name='$Name' AND user_password='$userPassword'";
    $result = mysqli_query($conn, $mysql);  //viszadobja a resultot minden találattal (ergo: akár több sorral is)
    if(mysqli_num_rows($result) === 0){
        echo '<br>A felhasználónév vagy jelszó hibásan lett megadva<br>';
        return false;
    }
    if(mysqli_num_rows($result) === 1) { //ha csak egy sort talált a querryhez akkor:
        $_COOKIE["logged"] = 'true';
        echo '<br>Sikeres belépés!<br>';
        echo print_r($_COOKIE);
        return true;
    }
    
}
?>