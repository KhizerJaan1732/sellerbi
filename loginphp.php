
<?php
   include_once('include/conn.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 
      
      $sql = "SELECT id,name FROM users WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         $_SESSION['data1'] = $row ;
         
         header("location: dashboard.php");
      }else {
         echo "<script type='text/javascript'>alert('Invalid email or password');
window.location='login.php';
</script>";
        exit();
        
      }
   }
?>

