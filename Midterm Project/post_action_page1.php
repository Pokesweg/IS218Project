
<?php
$servername = "sql1.njit.edu";
$username = "mp98";
$password = "Veenakshi12345.";
$dbname = "mp98";

$conn = new mysqli($servername, $username, $password, $dbname);

$uname = $_POST['uname'];
$psw = $_POST['psw'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$college = $_POST['college'];
$major = $_POST['major'];

$sql = "INSERT INTO final (userID, userPsw, userFname, userLname, userCollege, userMajor) VALUES ('$uname','$psw','$fname','$lname','$college','$major')";
$check = mysqli_query($conn, $sql);

if ($check){
    header('Location: https://web.njit.edu/~mp98/home.php');
}else{
    echo "Something went wrong";
}
?>

