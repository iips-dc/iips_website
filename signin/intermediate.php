 <?php
//echo "string"; 

 session_start();
include ('../database_connect.php');

$sql="SELECT * FROM `dc_member_social`";
$result = mysqli_query($dbconnect,$sql) or die('ERROR'.mysqli_error($dbconnect));
echo $email=$_GET['email'];
echo "<br><br>";
while($row = mysqli_fetch_array($result))
  {
    //echo $email;
   
  if($row['email'] == $email){
    echo "string";
   // header("Location:../dashboard/dashboard.php");
echo "<script>window.location.href='MIS/dashboard/dashboard.php';</script>";
 break;
  } 
  
  }
  echo "You are not a authorised user!";


?>
