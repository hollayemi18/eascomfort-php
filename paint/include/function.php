<?php
$mysqli = new mysqli('localhost','root','','ease') or die (mysqli_error($mysqli));

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $schedule = $_POST["date"];
    $content = $_POST["content"];

    if(!empty($email) && !empty($name) && !empty($phone)) {
      $mysqli->query("insert into info(name,email,phone,address,schedule,content) 
      values('$name','$email','$phone','$address','$schedule','$content')") 
      or die(mysqli_error($mysqli));
      $_SESSION['message'] = "Record saved!";
      header('index.php');
    }

}

?>