<!DOCTYPE HTML>
<html>
	<head>
		<title>Spletni testi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Meni</span></a>
				</nav>
				<a href="index.php" class="logo">Spletni testi</a>
				<nav class="right">
                                        <?php 
                                            if (isset($_SESSION['user_id'])) 
                                            {
                                                echo '<a href="logout.php" class="button alt">Odjava</a>';
                                            }
                                            else 
                                            {
                                                echo '<a href="login.php" class="button alt">Prijava</a>';
                                                echo " ";
                                                echo '<a href="register.php" class="button alt">Registracija</a>';
                                            }
                                        ?>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Domov</a></li>
                                        <li><a href="subjects.php">Predmeti</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Prijava</a></li>
				</ul>
			</nav>