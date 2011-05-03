<?php
require_once('DB_defines.php');
require_once('mydb.php'); // This also checks that magic_quotes are ON for GET/POST and exits if it's off

//echo '<pre>';
//echo "Get ";print_r($_GET); echo '<br>';
//echo "Post ";print_r($_POST);echo '<br>';
//echo '</pre>';
// create new readonly instance of mysqli class and connect to database
$db= new Database(HOST,ADMIN,ADMINPWD,DATABASE);

if (isset($_POST) && isset($_POST['Action']) )
{	
	switch ($_POST['Action'])
	{
		case 'Save':
			if (isset($_POST['displ'] ))
				$display_event=1;
			else 
				$display_event=0;
					
			if( isset($_GET['edit_id'] ))
			{
				$sql='UPDATE events
                 SET date = "'.$_POST['date'].'",
                 text = "'.$_POST['text'].'",
                 event = "1",
                 displ = "'.$display_event.'"
                 WHERE event_id = '.$_GET['edit_id'];
				
				//echo $sql;	
			}
			else	// A new entry
			{
				$sql =  'INSERT INTO events (date,text,displ,event,calendar)
                 		 VALUES ("'.$_POST['date'].'","'.$_POST['text'].'","'.$display_event.'","1","0")';
				              
				//echo $sql;	

			}
			$db->query( $sql);
			// fall through to default on purpose
		default: 
			header('Location: listevents.php');	// exit back 
	}
}


if (isset($_GET['edit_id']))
{
	if ($editrecord = $_GET['edit_id'] )
	{
		$sql = 'SELECT * FROM events WHERE event_id='.$editrecord;
		$res = $db->query($sql);
		$row = $res->fetch_assoc();
	}
}	
else	// a new record to be created
{
	$row['date']= date('Y-m-d');
	$row['text']="";
	$row['displ']=1;
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>edit/new events</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<link href="admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
 <?php 
 if(isset($editrecord ))
 	echo "Edit "; 
 else
 	echo("Create New ");

 ?>
Event
</h1>
<div id="maincontent">
<form name="events" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<table id="entry">
     <tr>
        <th>Date (Y-M-D)</th>
        <th>Text</th>
        <th>Display</th>
   
      </tr>
    <tr class="hilite">
      	<td class="ctr"><input name="date" type="text" value="<?php echo $row['date'];?>" /></td>
      	<td class="ctr"><input name="text" type="text" value="<?php echo $row['text'];?>" style="width: 318px"/></td>
		<td class="ctr"> 
			<input name="displ" type="checkbox" <?php if($row['displ']) echo 'checked="y"'; ?> value="1" />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input name="Action" type="submit" value="Save" />
			<input name="Action" type="submit" value="Cancel" />
		</td>
	</tr>
</table>


</form>

 </div>
</body>
</html>