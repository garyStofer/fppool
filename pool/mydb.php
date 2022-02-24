<?php
//Check that Magic quotes are on- else die - fix in php.ini
//if (!get_magic_quotes_gpc() )	die( "magic_quotes_gpc is 'OFF' - Fix in php.ini -- Exiting ");
	


class Database 
{

  protected $dbLink;
  protected $result;


  function __construct($host, $user, $pwd, $dbName, $unused=1)
  {
  
	$this->dbLink = @new mysqli($host, $user, $pwd, $dbName);		// the @ sign turns Warings off 
	if ($this->dbLink->connect_errno ) 
	{	
		die("No DB link: ".$this->dbLink->connect_error);
	}
 
    	return $this->dbLink;
  }

 

  // Execute an SQL query
  public function query($query) 
  {

    $this->result = $this->dbLink->query($query);
    if ($this->dbLink->errno) 
	{ 
		die( "No Querry result : " . $this->dbLink->error);
	}

		return $this->result;
  }

  // Close MySQL Connection
  public function close()
  {
    $this->dbLink->close();
  }	

} /*end of class*/


?>