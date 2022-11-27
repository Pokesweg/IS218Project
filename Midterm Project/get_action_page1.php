<?php

$servername = "sql1.njit.edu";
$username = "mp98";
$password = "Veenakshi12345.";
$dbname = "mp98";

$conn = new mysqli($servername, $username, $password, $dbname);
    $uname1=$_GET['uname'];
    $psw1=$_GET['psw'];
    $sql="SELECT * FROM final WHERE userID='$uname1' AND userPsw='$psw1'";

    $check = mysqli_query($conn, $sql);

    if ($check){
        header('Location: https://web.njit.edu/~mp98/home.php');
    }
    else{
        echo "Something went wrong";
    }
?>
