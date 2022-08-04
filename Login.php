<?php
include("Connection.php");
//error_reporting(0);
?>



<?php

if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $fid=$_POST['userid'];
  $rc=$_POST['usercode'];

  $query="insert into login(Name,Free_Fire_ID,Referal_Code) values('$name','$fid','$rc')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
    ?>
    <script>
      alert("Login Successfully");
    </script>
    <?php
  }
  else
  {
    ?>
    <script>
      alert("Data not inserted");
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
	background: cyan;
	color: red;
	font-size: 14px;
	cursor: pointer;
	border-radius: 20px;
      }

      #button2{
	padding: 15px 30px;
	border: none;
	background: red;
	color: cyan;
	font-size: 14px;
	cursor: pointer;
	border-radius: 20px;
      }
    </style>
  </head>
  <body bgcolor="e6e6ff">
    <center>
      <h1><font color="blue" face="Constantia">
      <?php

	if($name)
	{
	  echo "Welcome Mr. $name !";
	}
      ?>
      </font></h1><br>
      <h3><font face="Constantia">
      <?php
	if($fid)
	{
	  echo "Your Free Fire ID : $fid";
	}
      ?>
      <br>
      </h3><br><br>
      <br><br>
      <h4>
	<B>If you want to get first time double diamond in your free fire account, <U>click the next button below</B></U>
      </font></h4><br>
      <form action="DiamondTopUp.html">
	<button type="submit" value="submit" name="submit" id="button1"><font face="Constantia"><B>Next</B></font></button>
      </form><br><br>

      <h4>
	<B>Note : If you want to get 15% comission of your friend's payment then <U>share this website link and your refferal code with your friends</B></U>
      </h4>
      <h3>
        Website link : <br>
      <?php
	if($fid)
	{
	  echo "Your Referal code : ddtc@A7$fid";
	}
      ?>
      </h3>
      <h4>
        <B>To withdraw your comission <U>click 'Withdraw' below</B></U>
      </font></h4><br>
      <form action="Withdraw.html">
	<button type="submit" value="submit" name="submit" id="button2"><font face="Constantia"><B>Withdraw</B></font></button>
      </form>
    </center>
  </body>
</html>


