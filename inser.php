<?php
$username = $_POST['username'];
$password =$_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phone)){
  $host= "localhost";
  $dbUssername = "root";
  $dbPassword = ""; 
  $dbname="test";

  $conn=new mysqli($host,$dbUssername,$dbPassword,$dbname);
  if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')' .mysqli_connect_error());
  }
  else{
    $SELECT ="SELECT email From register Where email =? Limit 1";
    $INSERT ="INSERT Into register(username , password, gender ,email, phone) values(?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

    if($rnum==0){
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("ssssi",$username,$password,$gender,$email,$phone);
        $stmt->execute();
        echo "New record inserted successfully";
    }
    else{
        echo "someone already registered using this email";
    }
    $stmt->close();
    $conn->close();
  }
}
else{
    echo "All field are required";
    die();
}
?>