<?php
include 'ser.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Name=$_POST["name"];
        $Email=$_POST["mail"];
        $Password=$_POST["pwd"];
        $Phonenumber=$_POST["phone"];
          
        $qry1="INSERT INTO `registration`(`Name`,`Email`, `Password`, `Phonenumber`) VALUES ('$Name','$Email','$Password','$Phonenumber')";
        $res1=mysqli_query($conn,$qry1);
        echo "data inserted";
    }
    mysqli_close($conn);

?>

<html>
<head>
    <title>Lab 10</title>
</head>
<body>
     <form method="POST" action="">
    <h2><b>Registration form</h2><br>
     <label>Userame:</label><input type="text" name="name" required><br></br>
    <label> Password:</label><input type="password" name="pwd" required><br></br>
     <label>  Email id:</label><input type="email" name="mail" required><br></br>
     <label>Phone no:</label><input type="text" name="phone"  required><br></br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>
