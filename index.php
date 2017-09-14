<?php

require_once('./classes/Admin.class');
require_once('./classes/RegisteredUser.class');



$admin = new Admin('Administrator','blrbrown');
$user = new RegisteredUser('Regular User','crdillon');

$admin->__set('first_name', 'Blythe');
$admin->__set('last_name', 'Brown');
$admin->__set('email_address', 'blrbrown@iupui.edu');

$user->__set('first_name', 'Rob');
$user->__set('last_name', 'Dillon');
$user->__set('email_address', 'rdillon@iupui.edu');

function output() {
	global $admin, $user;
	
	$response = "<ul>\n";
	$response .= "<li>User Level: ".$user->__get('user_level')."</li>\n";
	$response .= "<li>Registered User ID: ".$user->__get('user_id')."</li>\n";
	$response .= "<li>Registered User Type: ".$user->__get('user_type')."</li>\n";
	$response .= "<li>Registered First Name: ".$user->__get('first_name')."</li>\n";
	$response .= "<li>Registered Last Name:".$user->__get('last_name')."</li>\n";
	$response .= "<li>Registered Email Address: ".$user->__get('email_address')."</li>\n";
	$response .= "</ul>\n";

	$response .= "<hr >\n";

	$response .= "<ul>\n";
	$response .= "<li>User Level: ".$admin->__get('user_level')."</li>\n";
	$response .= "<li>Admin User ID: ".$admin->__get('user_id')."</li>\n";
	$response .= "<li>Admin User Type: ".$admin->__get('user_type')."</li>\n";
	$response .= "<li>Admin First Name: ".$admin->__get('first_name')."</li>\n";
	$response .= "<li>Admin Last Name: ".$admin->__get('last_name')."</li>\n";
	$response .= "<li>Admin Email Address: ".$admin->__get('email_address')."</li>\n";
	$response .= "</ul>\n";
	
	return $response;
}

function id($length)
{
	$alphabet = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
	$id = '';
	for($i = 0; $i < $length; $i += 1) {
		$id .= $alphabet[rand(0,count($alphabet)-1)]; 
	}
	return $id;
}

?>

<!DOCTYPE html>
<html>

<head>
<title>CIT 313 Exercise 2: OOP</title>
</head>

<style>
	ul {
		list-style-type: none;
		padding: 0;
		margin: 0;
		
	}
</style>

<body>

<main>

<?php echo output(); ?>

</main>

</body>

</html>
