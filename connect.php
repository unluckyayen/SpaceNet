<?php
$connect=mysqli_connect("localhost","root","","code");
if($connect){
    echo "Connected";
}
else{
    echo "Failed";
}
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password!==$cpassword){
    echo "<script>
    alert ('Password does not macth');
    </script>
    ";
}
else{
    $data = "INSERT INTO userregistration VALUE ('','$fname','$email','$password','$cpassword')";
    $check = mysqli_query($connect,$data);
    if($check){
        //echo "Data Sended";
        header("location:spacenet/index.html");
    }
    else{
        echo "registration failed";
    }
}
?>