<?php
session_start();// come sempre prima cosa, aprire la sessione 
include("db_con.php"); // includere la connessione al database
?>
<html>  
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Registrazione</h2>   
<form name="form_registration" method="post" action="registration.php">
<br/>
<p>Username: <input type="text" name="username_reg"></p>
<br/>
<p>Password: <input type="password" name="password_reg"></p>
<br/>
<p>Email: <input type="text" name="email_reg" ></p>
<br/>
<button>Registrati</button>
</form>
<h2>Log in</h2>
<form name="form_login" method="post" action="login.php">
<p>Username</p><input type="text" name="username" ></p>
<p>Password <input name="password"></p>
<button>Accedi</button>
</form>
<body>
</html>
