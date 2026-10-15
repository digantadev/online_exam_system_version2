<?php
$conn = new mysqli('sql108.infinityfree.com', 'if0_43185167', 'D8SctixtLhBje', 'if0_43185167_online_exam_system');
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
$role=$_POST['role'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$sql="INSERT INTO users (role,name,email,password) VALUES (?,?,?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssss",$role,$name,$email,$password);

if($stmt->execute())
{
    header("Location:sign_in.html");
}
else
{
    echo "Error: ".$stmt->error;
}
$stmt->close();
$conn->close();



?>