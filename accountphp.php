<?php
include_once('include/conn.php');

$business_type_id = $_POST["business_type_id"];
$merchant_category_code = $_POST["merchant_category_code"];
$company_title = $_POST["company_title"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];
$country = $_POST["country"];
$province_id = $_POST["province_id"];
$city_id = $_POST["city_id"];
$corporate_website = $_POST["corporate_website"];
$ntn_number = $_POST["ntn_number"];
$cnic_number = $_POST["cnic_number"];
$str_number = $_POST["str_number"];



// $sql = "INSERT INTO users (email, name, contact, pass) VALUES ('$email', '$name', '$num', '$pass')";

// if ($conn->query($sql) === TRUE) {
//    header("location:account.php");
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// }
// $conn->close();
// // header("location:index.php");
?>
