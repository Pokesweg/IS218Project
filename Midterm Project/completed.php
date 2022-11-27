<html>
<link rel="stylesheet" href="style.css">
<div class="topnav">
<a class="active" href="home.php">Home</a>
        <a href="indexxx.php">To-do List</a>
        <a href="completed.php">Completed Tasks</a>
        <a href="Login.html">Signout</a>
    </div>
    <body>
    <?php 
    session_start();
        $servername = "sql1.njit.edu";
        $username = "mp98";
        $password = "Veenakshi12345.";
        $dbname = "mp98";
            
        $conn = new mysqli($servername, $username, $password, $dbname);

        $username= $_SESSION["username"];

        $sql2 = "SELECT `userFname` FROM `final` WHERE `userID`='$username'";
        $query2 = mysqli_query($conn,$sql2);
        $result2 = mysqli_fetch_assoc($query2);
        $resultstring2 = $result2['userFname'];
        
        
        
        $sql3 = "SELECT `userLname` FROM `final` WHERE `userID`='$username'";
        $query3 = mysqli_query($conn,$sql3);
        $result3 = mysqli_fetch_assoc($query3);
        $resultstring3 = $result3['userLname'];
        
        
        $sql4="SELECT * FROM `completedtasks` ORDER BY `DateTime` ASC";
        echo "<br>";
        $query4 = mysqli_query($conn,$sql4);
    ?>
        <h1 style="color:white"><?php echo $resultstring2; ?>     <?php echo $resultstring3; ?>  </h1>
       
        <h2>This is what you have to do </h2>
    <?php
    $result = mysqli_query($conn, $sql4); // First parameter is just return of "mysqli_connect()" function
    echo "<br>";
    echo "<table border='1' style=background-color:black>";
    echo"<tr style=background-color:white><th>ID</th><th>Username</th> <th> Due Date and Time</th><th>Title</th> <th>Description</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
        echo "<tr style=background-color:white>";
        foreach ($row as $value) { // I you want you can right this line like this: foreach($row as $value) {
            echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
        }
     echo "</tr>";
    }
    echo "</table>";
    ?>
        <h1>Uncomplete a Task</h1>
    <form action="process.php" method="POST">

        <label for="id"><b>ID Number</b></label>
        <input type="number" placeholder="Enter ID Number" name="id3"><br><br>

        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="uname3"><br><br>

        <label for="title"><b>Title of Activity</b></label>
        <input type="text" placeholder="Enter title" name="title3"><br><br>

        <label for="description"><b>Description</b></label>
        <input type="text" placeholder="Enter description" name="description3"><br><br>

        <label for="time"><b>Due Date and Time</b></label>
        <input type="datetime-local" placeholder="Enter date and time" name="time3"><br><br>

        <button type="submit" name="uncompleted">Uncomplete</button> 

    </form>