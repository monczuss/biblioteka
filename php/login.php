<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once 'connection.php';

		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
		if ($result = @$dbc->query(
		sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND password='%s'",
		mysqli_real_escape_string($dbc,$login),
		mysqli_real_escape_string($dbc,$password))))
		{
			$ilu_userow = $result->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['login'] = true;
				
				$wiersz = $result->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['email'] = $wiersz['email'];
				
				unset($_SESSION['error']);
				$result->free_result();
				header('Location: ../panel.php');
				
			} else {
				
				$_SESSION['error'] = '<p>Nieprawidłowy login lub hasło!</p>';
				header('Location: ../logowanie.php');
				
			}
			
		}
		
		mysqli_close($dbc); 
	
?>