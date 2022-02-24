<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<!-- #BeginTemplate "../master.dwt" -->

<head>
<!-- #BeginEditable "doctitle" -->
<title>Contact Forest Park Pool</title>
<style type="text/css">







.CellStyle {
	border: none; padding-left : 5px;
	padding-right: 5px;
	padding-top: 2px;
	padding-bottom: 2px;
	padding-left: 15px;
}

.TableStyle {
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 14px;
	margin-top: 25px;
	border-collapse: collapse;
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
<h3>Contacts:</h3>
<table class="TableStyle">
	<tr>
		<td class="CellStyle" style="height: 40px;">Front Desk, Gatekeeper</td>
		<td class="CellStyle" colspan="2">(925) 686-1333</td>
	</tr>
		<tr>
		<td class="CellStyle" style="height: 40px;">General Membership Inquiries</td>
		<td class="CellStyle" colspan="2">(925) 202-8584</td>
	</tr>

	<tr>
		<td class="CellStyle">General email contact</td>
		<td class="CellStyle" style="height: 40px;" colspan="2">
		<a href="mailto:forestparkpool@gmail.com?subject=Info on Forest Park Pool">
		forestparkpool@gmail.com</a></td>
	</tr>
	<tr>
		<td style="height: 60px;"></td>
	</tr>
</table>

<table class="TableStyle">
<?php
// until the DB access problem is fixed. After Godaddies update of their hosting platform our database with the user roles can't be found anymore 
die( "");  // remove this to have the code below execute 

define("HOST", 'fppool.db.13967474.hostedresource.com');
define("USER",'fppoolreader');
define("PWD",'Flyers%2009');
define("DATABASE",'fppool');

require_once('mydb.php'); // This also checks that magic_quotes are ON for GET/POST and exits if it's off


$db= new Database(HOST,USER,PWD,DATABASE);


$q = 'SELECT role_id,role_name FROM roles ORDER by sort';
$result = $db->query($q);
while ($row = $result->fetch_assoc()  )
{
	$all_roles[] = $row;
}

$q = 'SELECT * FROM role_to_member_lu';
$result = $db->query($q);
while ($row = $result->fetch_assoc()  )
{
	$lookup[] = $row;
}


	foreach($all_roles as $i => $role)
	{
		foreach($lookup as $ii => $lu)
		{
			if ( $role['role_id'] == $lu['role_id'])
			{
				$id = $lu['member_id'];
				$q = "SELECT * FROM members WHERE member_id = '$id'";
				$result = $db->query($q);

				while ($row = $result->fetch_assoc()  )
				{
					echo '<tr>'.
					 '<td class="CellStyle" style="font-style: italic">'."$role[role_name]</td>" .
					 '<td class="CellStyle">'."$row[first_name] $row[last_name]</td>" ;
					
					if (strlen($row['email']))
						echo '<td class="CellStyle"><a href="mailto:'.$row['email'].'?subject=Forest Park Pool">E-mail</a></td>';
					else
						echo '<td> </td>';	
					
					if (strlen($row['phone']) == 7)
					{
						echo '<td class="CellStyle">'."$row[AreaCode]</td>".
					 		 '<td class="CellStyle"> '. substr($row['phone'],0,3) . '-' . substr($row['phone'],3,4) . '</td>';
					}
					echo '</tr>';
				}
			}
		}
	}
$db->close();

?>
</table>
		
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
