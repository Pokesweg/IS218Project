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

        $uname= $_SESSION["username"];

        $sql2 = "SELECT `userFname` FROM `final` WHERE `userID`='$uname'";
        $query2 = mysqli_query($conn,$sql2);
        $result2 = mysqli_fetch_assoc($query2);
        $resultstring2 = $result2['userFname'];
        
        
        
        $sql3 = "SELECT `userLname` FROM `final` WHERE `userID`='$uname'";
        $query3 = mysqli_query($conn,$sql3);
        $result3 = mysqli_fetch_assoc($query3);
        $resultstring3 = $result3['userLname'];
        
        
        $sql4="SELECT * FROM `todo` ORDER BY `DateTime` ASC";
        echo "<br>";

        $query4 = mysqli_query($conn,$sql4);
    ?>
        <h1 style="color:white"><?php echo $resultstring2; ?>     <?php echo $resultstring3; ?>  </h1>
       
        <h2>To-do</h2>
    <?php
    $result = mysqli_query($conn, $sql4);
    echo "<br>";
    echo "<table border='1' style=background-color:black>";
    echo"<tr style=background-color:white><th>ID</th><th>Username</th> <th> Due Date and Time</th><th>Title</th> <th>Description</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr style=background-color:white>";
        foreach ($row as $value) { 
            echo "<td>" . $value . "</td>"; 
        }
     echo "</tr>";
    }
    echo "</table>";
    ?>

    <?php require_once 'process.php'; ?>
    <h1>Create a Task</h1>
    <form action="process.php" method="POST">
        <label for="id"><b>ID Number</b></label>
        <input type="number" placeholder="Enter ID Number" name="id"><br><br>

        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="uname"><br><br>

        <label for="title"><b>Title of Activity</b></label>
        <input type="text" placeholder="Enter title" name="title"><br><br>

        <label for="description"><b>Description</b></label>
        <input type="text" placeholder="Enter description" name="description"><br><br>

        <label for="time"><b>Due Date and Time</b></label>
        <input type="datetime-local" placeholder="Enter date and time" name="time"><br><br>

        <button type="submit" name="add">Add</button> 

    </form>
    <h1>Delete a Task</h1>
    <form action="process.php" method="POST">
        <label for="id0"><b>ID Number</b></label>
        <input type="number" placeholder="Enter ID Number" name="id0"><br><br>

        <button type="submit" name="delete">Delete</button> 

    </form>
    <h1>Update a Task</h1>
    <form action="process.php" method="POST">
        <label for="id1"><b>ID Number</b></label>
        <input type="number" placeholder="Enter ID Number" name="id1"><br><br>
        
        <label for="uname1"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="uname1"><br><br>

        <label for="title1"><b>Title of Activity</b></label>
        <input type="text" placeholder="Enter title" name="title1"><br><br>

        <label for="description1"><b>Description</b></label>
        <input type="text" placeholder="Enter description" name="description1"><br><br>

        <label for="time1"><b>Due Date and Time</b></label>
        <input type="datetime-local" placeholder="Enter date and time" name="time1"><br><br>

        <button type="submit" name="update">Modify</button> 

    </form>
    <h1>Complete a Task</h1>
    <form action="process.php" method="POST">

        <label for="id"><b>ID Number</b></label>
        <input type="number" placeholder="Enter ID Number" name="id2"><br><br>

        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="uname2"><br><br>

        <label for="title"><b>Title of Activity</b></label>
        <input type="text" placeholder="Enter title" name="title2"><br><br>

        <label for="description"><b>Description</b></label>
        <input type="text" placeholder="Enter description" name="description2"><br><br>

        <label for="time"><b>Due Date and Time</b></label>
        <input type="datetime-local" placeholder="Enter date and time" name="time2"><br><br>

        <button type="submit" name="completed">Complete</button> 

    </form>

    </body>
</html>