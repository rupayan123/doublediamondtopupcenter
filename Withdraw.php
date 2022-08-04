<?php
include("Connection.php");
//error_reporting(0);
?>



<?php

if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $mobile=$_POST['mobile'];
  $fid=$_POST['userid'];
  $uid=$_POST['upiid'];
  $num=$_POST['num'];

  $query="insert into withdraw(Name,Mobile,Free_Fire_ID,UPI_ID,Refered_Friends) values('$name','$mobile','$fid','$uid','$num')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
    ?>
    <script>
      alert("Successful");
    </script>
    <?php
  }
  else
  {
    ?>
    <script>
      alert("Please fill the information");
    </script>
    <?php
  }
}

?>

<html>
  <head>
    <style type="text/css">
      #button1{
	padding: 15px 30px;
	border: none;
	background: red;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 20px;
      }
    </style>
  </head>
  <body bgcolor="e6e6ff">
    <center>
      <h1><font color="Green" face="Constantia">
        Withdrawal Successful!
      </h1></font>
      <h3><font face="Constantia">
	You will receive your payment in your bank account within 24-48 hours.
      </h3></font>
      <h2><font color="blue" face="Constantia">
	Thank You!
      </h2>
      </font><br><br>
      <form action="TopUp.html">
	<button type="Back" value="Back" name="back" id="button1"><font face="Constantia">Home</font></button>
      </form>
    </center>
  </body>
</html>