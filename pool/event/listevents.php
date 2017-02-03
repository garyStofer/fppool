<?php
require_once('mydb.php'); // This also checks that magic_quotes are ON for GET/POST and exits if it's off
require_once('DB_defines.php');



$db= new Database(HOST,ADMIN,ADMINPWD,DATABASE);
//$db= new Database(HOST,USER,USERPWD,DATABASE);


//print_r($_POST); echo '<br>';

if(isset($_POST) && isset($_POST['Action']))

{

	switch ($_POST['Action'])

	{

		case 'Delete':

			//echo "call for deletion of ";

			if (isset($_POST['deletes']))

			{

				$deletelist =  implode(",",$_POST['deletes']);

				//echo $deletelist;

				$delRecs = "DELETE FROM events WHERE events.event_id IN ($deletelist)";

	            $deleted = $db->query($delRecs);

			}

			else 

				$alert = "Nothing selected to delete";	

			break;

			

		case 'Edit':

			// echo 'call for edit of ';

			if (isset($_POST['edit']))

			{

			//	echo $_POST['edit'];
				header('Location: editevents.php?edit_id='.$_POST['edit']);
				break;

			}

			else

				$alert = "Nothing selected to edit";		

			break;

			

		case 'New Event':

			header('Location: editevents.php?new=yes');

			break;

	}

}

	

$sql_list = 'SELECT * FROM events WHERE event=1 ORDER BY date ';

// create new readonly instance of mysqli class and connect to database



function MakeTable( $db,$query )

{

	$result = $db->query($query);

	while ( $row = $result->fetch_assoc()  ) 

	{

		echo '<tr class="hilite">';

		echo '<td>'. strftime("%B-%d", strtotime($row['date'])).'</td>' ; 

		echo '<td>'.$row['text'].'</td>';

		echo '<td class="ctr"><input name="d" readonly="" disabled= "" type="checkbox" ';

		if ($row['displ']!=0)

			echo 'checked="y" value="2"';

		echo '/></td>';

		echo '<td class="ctr"><input name="edit" type="radio" value="'.$row['event_id'].'"/></td>';

        echo '<td class="ctr"><input name="deletes[]" type="checkbox" value="'.$row['event_id'].'"/></td>';

		echo '</tr>';

	}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>FP Pool Event Editor</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="Content-Language" content="en-us" />

<link href="admin.css" rel="stylesheet" type="text/css" />

</head>





<body>

<h1> Forest Park Pool Event Editor

</h1>

<?php 

// insertMenu();

if (isset($alert))

	echo '<p id="alert">'.$alert.'</p>';	

?>



<div id="maincontent">

  <form name="list" id="list" method="post" action="<?php $_SERVER['PHP_SELF'];?>">

    <table id="eventlist">

	     <tr>

	        <th>When</th>

	        <th>What</th>

	        <th>Disp</th>

	        <th>Edit</th>

	        <th>Delete</th>

	     </tr>

			<?php MakeTable($db,$sql_list);?>

		<tr></tr>

		<tr>

	        <td class="ctr" colspan="3"><input name="Action" type="submit" value="New Event"/></td>

<!-- 	    <td class="ctr" colspan="3"></td>  -->

	        <td class="ctr"><input name="Action" type="submit" value="Edit"/></td>

	        <td class="ctr"><input name="Action" type="submit" value="Delete"/></td>

	    </tr>

    </table>

    </form>

</div>

</body>

</html>