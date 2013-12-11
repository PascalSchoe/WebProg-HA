<!DOCTYPE html>
<html>
	<head>
		<title>Willkommen bei  |E X P O| </title>
	</head>
	<body>
		<h1>Herzlich willkommen bei E X P O</h1>
		<div>
			
			<form method="post" name="login">
				<fieldset>
					<label>Username: </label><input name="uName" type="text"/>
					<label>Passwort: </label><input name="pWord" type="text"/>
					<input type="submit" name="loginSubmit"/>
					<hr>
					<label >Sie sind noch nicht registriert dann mal los !</label><input type="submit" name="register"/>
				</fieldset>
			</form>
			
			<?php
			class Login
			{
				public $username;
				public $password;
				
				function __constructor($username, $password)
				{
					$this->username = $username;
					$this->password = $password;
				}
				
				public function login()
				{
					if(isset($_POST["register"]))
					{
						echo "Du wirst gerade weitergeleitet zur Registrierung !";
					}
					
						if(isset($_POST["loginSubmit"]))
						{
							if(empty($_POST["uName"]) || empty($_POST["pWord"]))
							{
								echo "bitte geben sie was ein!";
							}
						}
				}
			}
		
			?>
			
			
		</div>
	</body>
</html>