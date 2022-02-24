<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

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
.style1 {
	text-align: left;
}
.style2 {
	text-align: center;
}
</style>
<!-- #EndEditable -->
<meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" "content=-1"/>
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
			<li><a href="improvments.htm">Improvements</a></li>
			<li><a href="hours.php">Hours & Events</a> </li>
			
			
			<li>
			<a target="_blank" href="PDFs/FPSA%20President%20Letter%20Membership%20Packet.pdf">Presidents letter</a></li>
			<li><a href="membershp.htm">Membership</a></li>
			<li><a href="forms.htm">Forms & Docs</a></li>
			<li><a href="lessons.htm">Lessons/Aerobics</a> </li>
		<!--	<li><a href="pool/parties.htm">Party Reservations</a> </li> -->
			<li><a target="_blank" href="https://www.signupgenius.com/go/70A0E4FADA828AB9-gatekeepers">Gate Keep Signup</a></li>
			<li><a href="GoogCalendar.htm">Calendar</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<br/>
			<li><a href="directions.htm">Directions</a></li>
			<li><a href="http://www.forestparkswimteam.com/">Our Swim team</a></li>
		</ul>
		<br />
		<img alt="The Swim Team logo" src="Images/forestparklogo.gif" width="144" height="128" style="margin-left: 6px; margin-bottom: 17px;" />

		
		<ul >
		<li>Forest Park Pool</li>
		<li>1766 Mendocino Dr.</li>
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
	<div id="content0">
<?php
define("HOST", 'fppool.db.13967474.hostedresource.com');
define("USER",'fppoolreader');
define("PWD",'Flyers%2009');
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
<h5>Please note the special instructions on the home  page for this years COVID plagued season.</h5>

<p>If you have any questions or need further information, please call the 
President or Membership person as listed on the <a href="http://forestparkpool.info/pool/contact.php">
Contact</a> page. </p>

<h4>General Schedule of Operation</h4>
<table class="TableStyle">
	<tr>
		<td class="CellStyle" style="width: 310px; height: 22px">Swim Camps 
		starts&nbsp; , email
		<a href="mailto:jeff.mellinger@gmail.com?subject=Swim Camp question">
		Jeff Mellinger</a></td>
		<td class="CellStyle" style="height: 22px">March 1st</td>
		</tr>
		<tr>
			<td class="CellStyle" style="width: 310px; height: 21px">Lap Swim 
			starts,
			<a href="https://www.signupgenius.com/go/70a0e4fada828ab9-march">
			Sign up for a spot here</a></td>
			<td class="CellStyle" style="height: 21px">March 2nd</td>
		</tr>
			<tr>
			<td class="CellStyle" style="width: 310px; height: 21px">Aqua Fit 
			starts , Email
			<a href="mailto:adlegault@sbcglobal?subject=Aqua Fit signup">for sign up</a> </td>
			<td class="CellStyle" style="height: 21px">March 1st</td>
		</tr>

		<tr>
		<td class="CellStyle" style="width: 310px">Tri-Fit Aqua starts, 
		SMS Piankhi Gibson at <br />
		510-593-5319</td>
		<td class="CellStyle">March 6th</td>
	</tr>

	<tr>
		<td class="CellStyle" style="width: 310px">Open for membership</td>
		<td class="CellStyle">April 3rd, Pool open Weekends 1-6PM</td>
	</tr>
	<tr>
		<td class="CellStyle" style="height: 19px; width: 310px;">Open 
		daily *</td>
		<td class="CellStyle" style="height: 19px">June, July, August<br />
		1 PM to 9 PM</td>
	</tr>
	<tr>
		<td class="CellStyle" style="width: 310px; height: 21px;">Fall Clinics, 
		Lap Swim </td>
		<td class="CellStyle" style="height: 21px">September</td>

	</table>	

<p style="margin-left: 40px">* Except for swim team home meets on select Wednesdays: 1 
to 5 PM. Check the swim team&#39;s website for dates and location of meets.</p>
<p style="margin-left: 40px">
For day by day information and special events please consult the <a href="GoogCalendar"> Google Calendar</a>.
</p>
		`<!--
<h4> Spring Clinic</h4>
<p>We are pleased to be able to offer stroke clinics at Forest Park Swim Club  again! The first day of clinics is February 27th and they will run Mondays thru Thursdays until March 30th.
</p>
<div class="style1">
	<div class="style2">
		<strong>
	<a  href="https://www.teamunify.com/recccslfpst/__doc__/FOREST%20PARK%202017%20SPRING%20CLINICS%20Packet.pdf">
	CLICK HERE FOR SIGN-UP PACKET</a></strong></div>
<p>Clinics are a great way to spend 5 extra weeks improving your abilities in the water. You can never spend enough time on technique. Our focus is strictly on technique during Spring Clinics. There will be 1 week spent on each stroke and a final week for turns/starts and review.

</p>
<p>We are offering options of 2, 3 or 4 days a week, Monday through Thursday.
  There will be no clinics on Fridays. To remain eligible for the County Meet,
   the maximum number of clinic hours allowed between Jan 1st and April 14th is fifteen.
    The 4-day a week option provides exactly fifteen hours of clinics.

</p>
<p>This will be a first come/first serve clinic. In order to provide the swimmers with a small swimmer-to-coach ratio, we have to limit the number of swimmers that can sign up for each session. Due to the availability of our coaches, Wednesday sessions will have a lower maximum than others. Payment is due in full by the end of Week 1.  All participants must be in good standing with the pool/team and unpaid balances from 2013 must be brought current.

</p>
<p>Please email jeff.mellinger@gmail.com ASAP and let me know which Group and which Days for your swimmer(s) so I can save your slot. It's easier for us if you mail completed pages 1 and 4 and checks to Jeff Mellinger 5040 St. Garrett Court, Concord, 94521. Or you can bring them on first day of clinics. Make checks payable to FPSA.
</p>
--><!--  ----------------------  --><!--
<p>
Fall clinic TBA . For more info see <a href="PDFs/FOREST%20PARK%20FALL%20CLINICS%20PACKET.pdf"><span class="style1">Fall Clinic Signup</span></a>. 
</p>
--><!--
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
--><!--
<table class="TableStyle">
<?php
$sql = 'SELECT * FROM events WHERE lessons=1 AND displ=1 ORDER BY date ';
if ( ! GetTable($sql) )
	echo "TBD";
?>
</table>
--><?php $db->close();	?></div>
	
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
