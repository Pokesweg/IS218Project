<?php
session_start();

$servername = "sql1.njit.edu";
$username = "mp98";
$password = "Veenakshi12345.";
$dbname = "mp98";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['add'])){
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $time = $_POST['time'];

    $sql = "INSERT INTO todo (id, Email, DateTime, Title, Description) VALUES ('$id','$uname','$time','$title','$description')";
    
    $rs = mysqli_query($conn, $sql);


    if($rs){
    
    header("Location: indexxx.php");
    
    }
    else{
    echo "somethings wrong";
    }
}

if(isset($_POST['delete'])){
    $id=$_POST['id0'];
    $sql9 = ("DELETE FROM `todo` WHERE id=$id");

    $rs = mysqli_query($conn, $sql9);

    if($rs){
    
        header("Location: indexxx.php");
        
        }
        else{
        echo "somethings wrong";
        }
}

if(isset($_POST['update'])){
    $id = $_POST['id1'];
    $uname = $_POST['uname1'];
    $title = $_POST['title1'];
    $description = $_POST['description1'];
    $time = $_POST['time1'];

    $sql2 = "UPDATE todo SET `Email`='$uname',`DateTime`='$time',`Title`='$title',`Description`='$description' WHERE `id`='$id'";
    
    $rs = mysqli_query($conn, $sql2);

    if($rs){
    
        header("Location: indexxx.php");
        
        }
        else{
        echo "somethings wrong";
        }
}

if(isset($_POST['completed'])){
    $id = $_POST['id2'];
    $uname = $_POST['uname2'];
    $title = $_POST['title2'];
    $description = $_POST['description2'];
    $time = $_POST['time2'];

    $sql7 = "INSERT INTO completedtasks (id, Email, DateTime, Title, Description) VALUES ('$id', '$uname','$time','$title','$description')";
    $query7 = mysqli_query($conn, $sql7);

    $sql8 = "DELETE FROM todo WHERE id=$id";
    $rs = mysqli_query($conn, $sql8);

    if($rs){
    
        header("Location: indexxx.php");
        
        }
        else{
        echo "somethings wrong";
        }
}

if(isset($_POST['uncompleted'])){
    $id = $_POST['id3'];
    $uname = $_POST['uname3'];
    $title = $_POST['title3'];
    $description = $_POST['description3'];
    $time = $_POST['time3'];

    $sql10 = "INSERT INTO todo (id, Email, DateTime, Title, Description) VALUES ('$id', '$uname','$time','$title','$description')";
    $query10 = mysqli_query($conn, $sql10);

    $sql11 = "DELETE FROM completedtasks WHERE id=$id";
    $rs = mysqli_query($conn, $sql11);

    if($rs){
    
        header("Location: completed.php");
        
        }
        else{
        echo "somethings wrong";
        }
}
?>