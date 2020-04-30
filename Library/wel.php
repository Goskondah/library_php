<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["username"])){
    header("location: log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <hr>
    <h2>Your Information</h2>
    <table border="1">
        <tr>
        
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Mail-id</th>
            <th>Mobile</th>
            <th>Class</th>
            <th>Department</th>
            <th>Age</th>
            <th>Address</th>
            <th>Subjects</th>
        </tr>
        <?php
        //include the database connection file
        require_once 'db.php';
        session_start();
        //Check whether session is set or not
        if(!isset($_SESSION['username'])){
            header("location:log.php");
            exit;
        }

        $name= $_SESSION['username'];

        $sql = "SELECT *from student where username='$name'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "</td><td>".$row['username']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['gender']."</td><td>".$row['mailid']."</td><td>".$row['mobile']."</td><td>".$row['classs']."</td><td>".$row['department']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['sub']."</td><tr>";
            }
        }else{
            echo "0 Results";
        }
        ?>
    </table>
<p>
    <a href="logo.php">Logout</a>
</p>
</body>
</html>