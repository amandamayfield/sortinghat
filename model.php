<?php
	function dbConnect() {
    	$dbConn = mysqli_connect('localhost', 'root', 'root', 'practice');
		// add error processing ??
		return $dbConn;
    }
    function query($query) {
    	$dbConn = dbConnect();
    	$result = mysqli_query($dbConn,$query);
    	if (!$result) {
            die(mysqli_error($dbConn));
        }
        return $result; 
    }
    function listHouse($Id) {
        $query = "SELECT founder, quote FROM harrypotter WHERE id = $Id;";
        $result = query($query);
        if (mysqli_num_rows($result)==1) {
            return $result;
        } else {
            return false;
        }
    }
?>