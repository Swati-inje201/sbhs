<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--

## Note : Removing the copyright notice is violation of the GNU Licenses ##
// +----------------------------------------------------------------------+                
// +----------------------------------------------------------------------+
// | Developed by Sushanth Poojary                                        |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GNU - GPL license, |
// | that is bundled with this package in the folder LICENSE, and is      |
// | available through the world-wide-web at                              |  
// |	    http://www.gnu.org/licenses/gpl-2.0.html                      |  
// | This program is free software; you can redistribute it and/or modify | 
// | it under the terms of the GNU General Public License as published by |
// | the Free Software Foundation; either version 2 of the License, or	  |
// | (at your option) any later version.			          | 
// |                                                                      |
// | This program is distributed in the hope that it will be useful,      |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of       |  
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the         | 
// | GNU General Public License for more details.                         |
// |                                                                      | 
// | You should have received a copy of the GNU General Public License    |
// | along with this program; if not, write to the Free Software          |
// | Foundation, Inc., 59 Temple Place, Suite 330, Boston,                |  
// | MA 02111-1307 USA.                 				  |	
// +----------------------------------------------------------------------+
// | Author: Sushanth Poojary <sushanth.poojary@gmail.com>     		  |
// | Copyright © 2010             					  |
// +----------------------------------------------------------------------+
// +----------------------------------------------------------------------+ 

-->
<html class=" jsEnabled" lang="en"><head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title> Single board heater system</title>
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<link media="screen" rel="stylesheet" type="text/css" 
href="css/global.css">
<link rel="stylesheet" type="text/css" 
href="css/flowConsumerOnboarding.css">

<link rel="stylesheet" type="text/css" href="css/country.css">
<link media="print" rel="stylesheet" type="text/css" 
href="css/print.css">

<style type="text/css">

/*Menu*/
.underlinemenu{
font-weight: bold;
width: 100%;
}

.underlinemenu ul{
padding: 6px 0 7px 0; /*6px should equal top padding of "ul li a" below, 7px should equal bottom padding + bottom border of "ul li a" below*/
margin: 0;
text-align: center; //set value to "left", "center", or "right"*/
}

.underlinemenu ul li{
display: inline;
}

.underlinemenu ul li a{
color: #494949;
padding: 6px 3px 4px 3px; /*top padding is 6px, bottom padding is 4px*/
margin-right: 20px; /*spacing between each menu link*/
text-decoration: none;
border-bottom: 3px solid gray; /*bottom border is 3px*/
}

.underlinemenu ul li a:hover, .underlinemenu ul li a.selected{
border-bottom-color: black;
}

</style>

<script type="text/javascript">

/***********************************************
* Local Time script- © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var weekdaystxt=["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"]

function showLocalTime(container, servermode, offsetMinutes, displayversion){
if (!document.getElementById || !document.getElementById(container)) return
this.container=document.getElementById(container)
this.displayversion=displayversion
var servertimestring=(servermode=="server-php")? '<? print date("F d, Y H:i:s", time())?>' : (servermode=="server-ssi")? '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' : '<%= Now() %>'
this.localtime=this.serverdate=new Date(servertimestring)
this.localtime.setTime(this.serverdate.getTime()+offsetMinutes*60*1000) //add user offset to server time
this.updateTime()
this.updateContainer()
}

showLocalTime.prototype.updateTime=function(){
var thisobj=this
this.localtime.setSeconds(this.localtime.getSeconds()+1)
setTimeout(function(){thisobj.updateTime()}, 1000) //update time every second
}

showLocalTime.prototype.updateContainer=function(){
var thisobj=this
if (this.displayversion=="long")
this.container.innerHTML=this.localtime.toLocaleString()
else{
var hour=this.localtime.getHours()
var minutes=this.localtime.getMinutes()
var seconds=this.localtime.getSeconds()
var ampm=(hour>=12)? "PM" : "AM"
var dayofweek=weekdaystxt[this.localtime.getDay()]
this.container.innerHTML=formatField(hour, 1)+":"+formatField(minutes)+":"+formatField(seconds)+" "+ampm+" ("+dayofweek+")"
}
setTimeout(function(){thisobj.updateContainer()}, 1000) //update container every second
}

function formatField(num, isHour){
if (typeof isHour!="undefined"){ //if this is the hour field
var hour=(num>12)? num-12 : num
return (hour==0)? 12 : hour
}
return (num<=9)? "0"+num : num//if this is minute or sec field
}

</script>

</head>

<body onLoad='new showLocalTime("timecontainer", "server-php", 0, "short")'>
<!--
<body onLoad='document.getElementById("roll_no").focus()'>
-->
<iframe style="position: absolute; visibility: visible; 
width: 2em; height: 2em; top: -29px; left: 0pt; border-width: 0pt;" 
title="Text Resize Monitor" id="_yuiResizeMonitor"></iframe><div 
style="z-index: 17; visibility: hidden;" id="balloonCalloutPanel_c" 
class="yui-panel-container balloon yui-overlay-hidden"><div 
style="visibility: inherit; top: 873px; left: 442px;" class="yui-module 
yui-overlay yui-panel posUnder" id="balloonCalloutPanel"><div 
class="body"></div></div></div>
<noscript><p class="nonjsAlert">NOTE: Many features on the website require Javascript and cookies. You can enable both via your browser's preference settings.</p></noscript>
<div class="onboarding signup" id="page">
<div id="header" class="notab">
<h1><img 
src="img/1.jpg" alt="Single board heater system" border="0"></h1>
<div class="empty" id="navPrimary"></div>
</div>
<div id="content">
<div id="headline">
<div class="underlinemenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="book.php">Book Slot</a></li>
<li><a href="delete_booking.php">View / Delete Slot</a></li>
<li><a href="dirbrowser.php">Download Log Files</a></li>
<li><a href="showvideo.php">Show Video</a></li>
<li><a href="change_pass_logon.php">Change Password</a></li>
<?
session_start();
if(isset($_SESSION['rollno']) && isset($_SESSION['mid']) )
{
print "
<li><a href=logout.php>Logout</a></li>
";
}
else
{
print "
<li><a href=login.php>Login</a></li>
";
}
?>
</ul>
</div>
<br><br>
<h2>Change Your Password</h2>
</div>
<div id="messageBox"></div>
<p class="group">
<?php
include_once("config.inc.php");
global $db, $db_host, $db_user, $db_password, $mailsite, $mailserver;

//Connet to database
$connect=mysql_connect($db_host, $db_user, $db_password) or die();
mysql_select_db("$db") or die();

$myid=$_GET['id'];
$mycode=$_GET['code'];

if($myid && $mycode)
{
	$check=mysql_query("SELECT * FROM account WHERE acc_id='$myid' AND rollno='$mycode'");
	$checknum=mysql_num_rows($check);
	
	if($checknum==1)
	{
		
		
		if($_POST['submit'])
		{
			//check fields
	
			$newpassword=($_POST['newpassword']);
			$repeatnewpassword=($_POST['repeatnewpassword']);
			//$newpassword=mysql_real_escape_string($newpassword);
			//$repeatnewpassword=mysql_real_escape_string($repeatnewpassword);

			if(strlen($newpassword)>25||strlen($newpassword)<8)
				{
					echo "Password must be between 8 and 25 character";
				}
				else 
				{
				
				
				$queryget=mysql_query("SELECT password FROM account WHERE acc_id='$myid'");
				$row=mysql_fetch_assoc($queryget);
				
				
				//check two new password
					if($newpassword==$repeatnewpassword)
					{
						//Change the Password in database
						
						
						$newpassword=md5($newpassword);
						

							
						$querychange=mysql_query("UPDATE account SET password='$newpassword' WHERE acc_id='$myid'");

						if(isset($_SESSION['rollno']))
		    					unset($_SESSION['rollno']); 
	    					
						if(isset($_SESSION['mid']))
		    					unset($_SESSION['mid']); 


						die("You're password has been changed successfully! Please re-login with your new password to continue.");
						session_destroy();
						
					}
					else
						die("New Passwords don't Match.");
			
			}	
		}
		else 
		{
			echo"
			<form action='change_pass.php?id=$myid&code=$mycode' method='post'>
			<table>
			<tr>
				<td>New Password:</td>
				<td><input type='password' name='newpassword'></td>
			</tr>
			<tr>
				<td>Repeat New Password:</td>
				<td><input type='password' name='repeatnewpassword'></td>
			</tr>
			<tr>
				<td>
				<input type='submit' name='submit' value='Change Password'>
				</td>
			</tr>
			</table>
			</form>
			";
		}
	}
	else
		die("Database Check Failed of the Given ID and code!");
}
else 
	die("We are sorry! But, No ID and CODE with this Link!");

?>
</p>
</div>
</div>
<style>
.LV_validation_message{
    font-weight:bold;
    margin:0 0 0 5px;
}

.LV_valid {
    color:#00CC00;
}
	
.LV_invalid {
    color:#CC0000;
}
    
.LV_valid_field,
input.LV_valid_field:hover, 
input.LV_valid_field:active,
textarea.LV_valid_field:hover, 
textarea.LV_valid_field:active {
    border: 1px solid #00CC00;
}
    
.LV_invalid_field, 
input.LV_invalid_field:hover, 
input.LV_invalid_field:active,
textarea.LV_invalid_field:hover, 
textarea.LV_invalid_field:active {
    border: 1px solid #CC0000;
}
</style>
<script type="text/javascript" src="livevalidation_standalone.compressed.js"></script>

<script type="text/javascript">
var rollno = new LiveValidation('uname',{validMessage: "OK", onlyOnSubmit: true});
var pass = new LiveValidation('pass', { validMessage: "OK", onlyOnSubmit: true });

rollno.add( Validate.Presence, { failureMessage: "Can't Be Empty!" });
pass.add( Validate.Presence, { failureMessage: "Can't Be Empty!" });

</script>
<div id="footer">
<ul>
<li class="last"><a 
href="contactus.php">Contact
 Us</a></li>
<li class="last">

</li>
</ul>
Current Server Time:<span id="timecontainer"></span>
<p id="legal">Single Board Heater System Lab - Automation Lab - <b>Chemical Dept IIT Bombay</b></div>

</body></html>

