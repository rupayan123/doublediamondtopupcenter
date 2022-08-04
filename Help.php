<?php
include("Connection.php");
//error_reporting(0);
?>



<?php

if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $email=$_POST['email'];
  $fid=$_POST['userid'];
  $msg=$_POST['message'];

  $query="insert into help(Name,Email,Free_Fire_ID,Message) values('$name','$email','$fid','$msg')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
    ?>
    <script>
      alert("Thank You!");
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
      <h1><U><font color="red" face="Constantia">
      <?php

	if($name)
	{
	  echo "Thank You Mr. $name !";
      ?>
	  <br>
      <?php
	  echo "We will try to solve your problem soon";
	}

      ?>
      </font></U></h1><br><br>
      <form action="TopUp.html">
	<button type="Back" value="Back" name="back" id="button1"><font face="Constantia">Home</font></button>
      </form>
    </center>
  </body>
</html>