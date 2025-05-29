<style>
   *{
      text-align:center;
   }
.h{
   color:#65554a;;
   margin-top:300px;
}



</style>
<script>
alert("successfully Booked! ");
</script>
<?php

   $Name=$_POST["name"];
   $Number=$_POST["number"];
   $Clocation=$_POST["from"];
   $Destination=$_POST["to"];
   $Vehicle=$_POST["vehicle"];
// $name="muskan";
// $email= "muskan@gmail.com";
// $password="123e4";
   $con=mysqli_connect("localhost","root","","student_db");
if($con==true)
{
//     echo"database sucessfully connected";
$sql= "INSERT into book VALUES (?,?,?,?,?)";
$ps=$con->prepare($sql);
$ps->bind_param("sisss",$Name,$Number,$Clocation,$Destination,$Vehicle);
$ps->execute();
// echo" record secussfully!";


//   $sql=bind_param("sss",$name,$email,$password); 
//   $sql->execute(); 
  // echo"siqn up sucessfully!";
  
}
else{
    error("sorry not connected!");
}
?>
<h1 class="h">
   THANKYOU FOR BOOKING
</h1>
<h2 class="v">
   Visit Again !
</h2>