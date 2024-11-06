<?php
$connect=mysqli_connect("localhost","root","","code");
if($connect){
    echo "Connected";
}else{
    echo "Failed";
}

$email=$_POST['email'];
$password=$_POST['password'];

$check = "SELECT * FROM userregistration WHERE email='$email' && password ='$password'";
$data_send = mysqli_query($connect,$check);
$count=0;
$count=mysqli_num_rows($data_send);
if($count>=1){
    header("location:spacenet/index.html");
}
else{
    echo "<script>
    alert('Invalid Credentials')
    </script>";
}
?>