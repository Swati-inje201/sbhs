<?php
session_start();
?>

<?php

include_once("config.inc.php");
global $db, $db_host, $db_user, $db_password;

/* A script by Sitesh on sep 09 for Valid Email */

$q=$_GET["q"];

$con = mysql_connect($db_host, $db_user, $db_password);

if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$db", $con);

//Query should be 'select count(emailid) from account where emailid in('actual email i.e.$q');

 $sql="SELECT count(emailid) as cnt FROM account WHERE emailid in('".$q."')";

 $result = mysql_query($sql);

 $row = mysql_fetch_array($result);

 if($row['cnt']>0)
 {
       $disabled = "disabled='true'";
       echo "<p class='buttons'><button type='submit' id='next.x' name='next.x' + class='primary'" . $disabled . ">Create Account</button></p>";
       // $_SESSION['regemail']=0;
       echo "<font color='#FF0000' size=5><B>Emailid is already being used !! </B></font>";
     // echo "<script>document.getElementById('next.x').disabled=true</script>";
    // echo "<script language=javascript>alert('Please enter a valid username.')</script>";
   
    
 }
 else
 {
     // $disabled = "disabled='false'";
       echo "<p class='buttons'><button type='submit' id='next.x' name='next.x' + class='primary'" . ">Create Account</button></p>";

      // $_SESSION['regemail']=1;
      echo "<font color='#00FF00' size=5><B>Emailid is available for registration </B></font>";
    // echo "<script language=javascript>alert('Emailid is available for registration')</script>";
   
 }

 mysql_close($con);

?> 

