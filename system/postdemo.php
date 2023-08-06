<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_POST['timesleep']) && !empty($_POST['yawn']))
	//if(!empty($_POST['timesleep']) 
    {
		$name = $_POST['name'];
    	$timesleep = $_POST['timesleep'];
    	$yawn = $_POST['yawn'];

	    $sql = "INSERT INTO logs (name, timesleep, yawn, Date, Time)
		
		VALUES ('".$name."','".$timesleep."', '".$yawn."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "Successful";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>