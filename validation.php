<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) &&
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$username = htmlspecialchars ($_POST[username]);
		$email = htmlspecialchars ($_POST[email]);
		$password = htmlspecialchars ($_POST[password]);
	// TODO

$checkUser = isUsernameAvailable($db, $username);
$checkMail = isEmailAvailable($db, $email);

	if (!$checkUser) {
		$_SESSION['message'] = 'Nom déjà pris';
		$error = 'Nom indisponible';
		header('Location: register.php');
	}

	else {
		isEmailAvailable($db, $email);
		if (isEmailAvailable($db, $email) == false) {
			# code...

		$_SESSION['message'] = 'Mail déjà utilisé';
		$error = 'Mail indisponible';
		header('Location: register.php');
	}


	else {
		userRegistration($db, $username, $email, $password);
		$_SESSION['message'] = 'Formulaire complet';
		header('Location: register.php');
	}
}

}else{
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}