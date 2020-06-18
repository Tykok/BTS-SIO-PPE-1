<?php
	//fonction permettant d'aller d'une page a l'autre
	function html_goto($url)
	{
	
		echo("<script language=\"Javascript\">\n");
		echo("location.href='$url';\n");
		echo"</script>";
	}
	// Similaire à htmlgoto ()
	function redirect($url, $info, $time=2) 
			{
				echo'<meta http-equiv="refresh" content="'.$time.';URL='.$url.'">
						<br><br><div align="center"><p style="color:#000000">'.$info.'</p></div><br><br>';
				echo' <center><img src="images/wait.gif"></center>';
			}
	//fonction permettant la deconexion de l'utilisateur
	function logout()
	{
		// On appelle la session
		@session_start();

		// On écrase le tableau de session
		$_SESSION = array();

		// On détruit la session
		session_destroy();
		header("Location: index.php");
	}
	//Fonction permettant de convertir le champ DATETIME
		function mysql_DateTime($d) 
			{ 
				$date = substr($d,8,2)."/";       	 // jour 
				$date = $date.substr($d,5,2)."/";  	 // mois 
				$date = $date.substr($d,0,4). " ";	 // année 
				$date = $date.substr($d,11,5);    	 // heures et minutes 
				return $date;
			}
?>
