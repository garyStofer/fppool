<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml">

<!-- #BeginTemplate "../master.dwt" -->

<head>
<!-- #BeginEditable "doctitle" -->
<title>Forest Park Pool Hours</title>
<style type="text/css"> 
.CellStyle {
	border:1px solid blue;
	
	padding-left:5px;
	padding-right:5px;
	padding-top:2px;
	padding-bottom:2px
	}
.TableStyle {

	margin-left: 25px;
	margin-right:25px;
	margin-bottom:14px; 
	margin-top: 25px;
  	border-collapse:collapse;
}
</style>
<!-- #EndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="keywords" content="Forest Park Pool, Forest Park Swim Team, Forest Park Flyers, Private Swim Club Concord CA, Membership Pool Concord CA, Swimm lessons, Private Pools, Lap Swimming, Summer Fun in Concord CA," />
<meta name="description" content="Forest Park Pool is a private membership swim club in Concord near Concord High" />
<link href="style2.css" rel="stylesheet" type="text/css" />
</head>

<body > 

<!-- Begin Container -->
<div id="container">
	<!-- Begin Masthead -->
	<div id="masthead">
		<h1 > Forest Park Pool</h1>
		<h5  > A private membership Swim-Club</h5>

	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation" >
		<ul>
			<li><a href="../index.htm">Home</a></li>
			
			<li><a href="pictures.htm">Photos</a></li>
			<li><a href="history.htm">History</a></li>
			<li><a href="hours.php">Hours & Events</a> </li>
			
			
			<li>
			<a href="PDFs/FPSA%20President%20Letter%20Membership%20Packet.pdf">Presidents letter</a></li>
			<li><a href="membershp.htm">Membership Info</a></li>
			
			<li><a href="forms.htm">Forms & Docs</a></li>
			
			<li><a href="lessons.htm">Lesson & Aerobics</a> </li>
			<li><a href="parties.htm">Party Reservations</a> </li>
			<li><a href="PDFs/FPSA%20Calendar.pdf">Calendar</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<br />
			<li><a href="directions.htm">Directions</a></li>
			<li><a href="http://www.forestparkswimteam.com/">Our Swim team</a></li>
		</ul>
		<br />
		<img alt="The Swim Team logo" src="Images/forestparklogo.gif" width="144" height="128" style="margin-left: 6px; margin-bottom: 17px;" />

		
		<ul >
		<li>1766 Mendocino Dr.</li>
		<li>PO Box 21414</li>
		<li>Concord, CA, 94521</li>
		<li>(925) 686 1333</li>
		</ul>
		<a href="http://www.facebook.com/pages/Forest-Park-Pool/110729035609922">
		<img border="none" src="http://www.facebook.com/images/fb_logo.png"" alt="Follow Forest Park Pool on Facebook" width="156" height="34" style="margin-top:13px"/></a>
	</div>
	<!-- End Navigation -->
	<!-- Begin Content -->
	<div id="content">
<!-- #BeginEditable "content" -->
<?php
define("HOST", 'fppool.db.5460539.hostedresource.com');
define("USER",'fppoolreader');
define("PWD",'Flyers2009');
define("DATABASE",'fppool');
require_once('mydb.php'); // This also checks that magic_quotes are ON for GET/POST and exits if it's off

// create new instance of mysqli class and connect to database
$db= new Database(HOST,USER,PWD,DATABASE);

function GetTable( $query )
{
	global $db;
	$result = $db->query($query);
	while ( $row = $result->fetch_assoc()  ) 
	{ 	if ( strtotime($row['date']) > strtotime("-1 Day")) // only display items that are not  already passed 
		{
			echo '<tr>';
			echo '<td class="CellStyle">'. strftime("%B-%d", strtotime($row['date']))."</td>" ; 
			echo '<td class="CellStyle">'."$row[text] </td>" ;
			echo '</tr>';
		}
	}
	return $row;
}
?>

<h3>Hours of operation and special events</h3>
<p>If you have any questions or need further information, Call Sandi Cheer (925) 
798-1513 </p>

<h4>Schedule of Operation 2011</h4>
<table class="TableStyle">
	<tr>
		<td class="CellStyle">February</td>
		<td class="CellStyle">Spring Swim Clinic Sign Ups</td>
	</tr>
	<tr>
		<td class="CellStyle">March</td>
		<td class="CellStyle">Spring Clinic Starts</td>
	</tr>
	<tr>
		<td class="CellStyle">April</td>
		<td class="CellStyle">Pool Open Soon</td>
	</tr>
	<tr>
		<td class="CellStyle">&nbsp;</td>
		<td class="CellStyle">&nbsp;</td>
	</tr>
	<tr>
		<td class="CellStyle">&nbsp;</td>
		<td class="CellStyle">&nbsp;</td>
	</tr>
	</table>	

<p style="margin-left: 40px">* Except for swim team home meets on select Wednesdays: 1 
to 5 PM. Check the swim team&#39;s website for dates and location of meets.</p>
<h4> Spring Clinic is here!</h4>
<p>
Spring Swim Clinics start on Monday, March 1st. There are 5 weeks of clinics offered this season for beginners
 to advanced ability. You don't need to be on the Swim Team to participate. This is a great way for little ones 
 to learn how to swim or older kids to work on stroke techniques. Lessons are Mon/Wed or Tue/Thu times vary and 
 kids will be grouped by ability. There is always a low swimmer to instructor ratio. To 
<a href="PDFs/FOREST%20PARK%20SPRING%20CLINICS%20PACKET.pdf">sign-up</a> or get more information, 
 please email <a href="mailto:jeff.mellinger@gmail.com?subject=Sping Clinic">Jeff</a>.</p>

<h4>Special Events and Parties </h4>
<table class="TableStyle">
<?php
$sql = 'SELECT * FROM events WHERE event=1 AND displ=1 ORDER BY date ';
GetTable($sql);
?>
</table>

<h4><a href="lessons.htm">Swim lessons and Water-Aerobics</a></h4>
<table>
<tr>
<td style="width: 102px">Session 1</td><td>June 13 14 15 16 20 21 22 23 ( 8 CLASSES)</td></tr>
<tr>
<td> Session 2</td><td>June 27 28 29 30  July 5 6 7  ( 7 classes)</td>
</tr>
<tr>
<td>
Session 3</td><td>July 11 12 13 14 18 19 20 21 ( 8 classes)</td>
</tr>
<tr><td></td></tr>
<tr> <td></td><td>8 classes non members $50  members $ 45</td></tr>
<tr> <td></td> <td>7 class session non members $43.75   members $39.00</td></tr>
</table>
<!--
<table class="TableStyle">
<?php
$sql = 'SELECT * FROM events WHERE lessons=1 AND displ=1 ORDER BY date ';
if ( ! GetTable($sql) )
	echo "TBD";
?>
</table>
-->
<?php $db->close();	?>
	
		<!-- #EndEditable -->
	</div>
	<!-- End Content -->

	<div id="footer">
</div>

	</div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
