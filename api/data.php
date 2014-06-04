<?php
require_once ("../common.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Person1'])&& isset($_POST['Person2'])) {

	$persons = [$_POST['Person1'], $_POST['Person2']];

	foreach ($persons as $person){

		$person_name = $person['PersonName'];
	    $person_level = $person['level'];
	    $person_feeling = $person['feeling'];

$query = "INSERT INTO login_record (user_id, login_ip, login_time) VALUES ('" . $_SESSION['user_id'] . "','" . $ip ."','" . $_SESSION['login_time'] ."');";
        
        $connection = $db -> getDatabaseConnection();
        $connection->query($query);
	    print $person_name;
	    print $person_level;
	    print $person_feeling;
	}


};

header("HTTP/1.1 400 Bad Request");
print("URL did not match any known method.");