<?php
 $servername="localhost";
 $username = "root";
 $password = "";
 $db = "pbcmsgbd";

 $conn = mysqli_connect ($servername,$username,$password,$db);
  if ($conn) {echo "connected" ;} else {echo "not connected"; }
if (isset($_POST['send message'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO comment
VALUES('$name','$email','$subject','$message')";
    $resualt=mysqli_query($conn,$sql);
    if ($resualt) {header("Location: index.html");

    }
    else {
        echo "not submited";
    }
}
?>