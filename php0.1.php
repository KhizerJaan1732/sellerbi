<?php
include_once('include/conn.php');

$email = $_POST["email"];
$pass = $_POST["pwd"];
$name = $_POST["name"];
$num = $_POST["num"];


$sql = "SELECT email FROM users  WHERE email = '$email'";
       $result = mysqli_query($conn,$sql);
       if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
      $count = mysqli_num_rows($result);

if ($count > 0) {

	echo "<script type='text/javascript'>alert('Email already Exists');
window.location='index.php';
</script>";

} 

else {

$sql = "INSERT INTO users (email, name, contact, pass) VALUES ('$email', '$name', '$num', '$pass')";

if ($conn->query($sql) === TRUE) {
	header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
// header("location:index.php");
?>
