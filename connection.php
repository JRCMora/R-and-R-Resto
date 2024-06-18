<?php 
	require_once __DIR__ . "/vendor/autoload.php";
	try 
    { 
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $dbResto = $client->dbResto;
        $colResto = $dbResto->colResto;
    }
    catch(MongoConnectionException $e) 
    {
        die("Failed to connect to database ".$e->getMessage());
    }
?>