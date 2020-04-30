<?php
require_once 'db.php';

$username=$password=$firstname=$lastname=$gender=$mailid=$mobile=$classs=$department=$age=$address=$sub="";

if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $gender = trim($_POST['gender']);
    $mailid = trim($_POST['mailid']);
    $mobile = trim($_POST['mobile']);
    $classs = trim($_POST['classs']);
    $department = trim($_POST['department']);
    $age = trim($_POST['age']);
    $address = trim($_POST['address']);
    $sub = $_POST['sub'];

    
    $sql = "INSERT INTO student(username,password,firstname,lastname,gender,mailid,mobile,classs,department,age,address,sub)values('$username','$password','$firstname','$lastname','$gender','$mailid','$mobile','$classs','$department','$age','$address','$sub')";

    $query = mysqli_query($conn,$sql);

    if($query){
       echo "<script>alert('Your are registered successfully!!');location.replace('log.php')</script>";
    }
    else{
        echo "<script>alert('Sorry!!! Error!!!')</script>";
    }
}
else{

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="wheat">
<div id="a">
<h2 align="center"><b><u>REGISTRATION FORM</u></b></h2>
</div>
<br>
        
<form action=""  method="POST" autocomplete="on">
    
    <div class="row">    
        <div class="col-20"><label>Username:</label></div>
        <div class="col-80"><input type="text" placeholder="Enter Username" name="username" required></div>
    </div>
        
    <div class="row">
        <div class="col-20"><label>Password:</label></div>
        <div class="col-80"><input type="password" placeholder="Enter Password" name="password" autocomplete="off" required></div>
    </div>
        
    <div class="row">
        <div class="col-20"><label>Firstname:</label></div>
        <div class="col-80"><input type="text" placeholder="Enter Firstname" name="firstname" required></div>
    </div>
        
    <div class="row">
        <div class="col-20"><label>Lastname:</label></div>
        <div class="col-80"><input type="text" placeholder="Enter Lastname" name="lastname" required></div>
    </div> 
        
    <div class="row">
        <div class="col-20"><label>Gender:</label></div>
    <div class="col-80"><input type="radio" name="gender" value="male"> Male
        <br>
    <input type="radio" name="gender" value="female">Female
    <br>
   <input type="radio" name="gender" value="other"> Other
</div>
        
    <div class="row">
        <div class="col-20"><label>Email:</label></div>
        <div class="col-80"><input type="email" placeholder="Enter Mail ID" name="mailid"  autocomplete="off"required></div>
</div>
        
    <div class="row">
        <div class="col-20"><label>Mobile:</label></div>
        <div class="col-80"><input type="number" placeholder="Enter mobile" name="mobile" autocomplete="off" required></div>
    </div> 
        
    <div class="row">   
        <div class="col-20"><label>Class:</label></div>
        <div class="col-80"><select id="ide" name="classs">
        <option value="FE">FE</option>
        <option value="SE">SE</option>
        <option value="TE">TE</option>
        <option value="BE">BE</option>
        </select>
    </div>
</div>
    <div class="row">     
        <div class="col-20"><label>Department:</label></div>
        <select name="department">
        
        <option value="Computer">Computer</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Civil">Civil</option>
        <option value="ENTC">ENTC</option>
        </select>
    </div>

        
    <div class="row">    
        <div class="col-20"><label>Age:</label></div>
        <div class="col-80">    <input type="number" placeholder="Enter Age" name="age" autocomplete="off" required>
</div>
    </div> 
        
    <div class="row">    
        <div class="col-20"><label>Address:</label></div>
        <div class="col-80"><textarea rows="4" cols="22" name="address">
        </textarea></textarea></div>
    </div> 
        
    <div class="row">
        <div class="col-20"><label>Subjects:</label></div>
        
    <div class="col-80"><input type="checkbox" name="sub[]" value="PHP">OOP
    <input type="checkbox" name="sub[]" value="C">C
    <input type="checkbox" name="sub[]" value="java" checked>JAVA
    <input type="checkbox" name="sub[]" value="DBMS">DBMS
</div>
</div>

            
    <input type="submit"  name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
        <br>
        <p>Do you want to Login instead?</p>
        <a href="log.php">LOGIN PAGE</a>
    
</form>
    </body>
    </html>