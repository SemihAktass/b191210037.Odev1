<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/normalize.css" />
	<link rel="stylesheet" href="../../css/style.css" />
	<script src="../../js/giriş.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş</title>
</head>
<body>
	<header>
			<div class="container">
				<nav>
					<ul>
						<li><a href="../../html/hakkimda.html">HAKKIMDA</a></li>
						<li><a href="../../html/takım.html">TAKIM</a></li>
						<li><a href="../../html/memleket.html">MEMLEKET</a></li>
						<li><a href="../../html/istanbul.html">YAŞADIĞIM YER</a></li>
					</ul>
					<div class="clear"></div>
				</nav>
			</div>
	</header>
	<div class="slider">
	</div>
	<div class="content">
	<h1 class="title">
				<div class="container">
					<center>Giriş Yapınız</center>
				</div>
	</h1>
		<div class="container">
			<table border=1>
				<form name="uye_formu" action="kullanıcı.php" onsubmit="return isValid(this)" method="post">
					<tr>
					<td><center>Kullanıcı Adı</center></td>
					</tr>
					<tr>
					<td><center><input type="text" name="kadi"></center></td>
					</tr>
					<tr>
					<td><center>Şifre</center></td>
					</tr>
					<tr>
					<td><center><input type="password" name="sifre"></center></td>
					</tr>
					<tr>
					<td><center><button>Giriş Yap</button></center></td>
					</tr>
				</form>
			</table>	
		</div>	
	</div>	
	<footer>
			<a href="../iletisim/iletisim.php">İLETİŞİM</a>
	</footer>v
</body>
</html>