
<!DOCTYPE html>
<html lang="tr">
    <head> 
        <meta charset="utf-8">
        <title>İletişim</title>
		<script src="../js/üye.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../../css/style.css" />
		<link rel="stylesheet" href="../../css/normalize.css" />
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
						<li><a href="../üye/index.php">ÜYE GİRİŞ</a></li>
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
					İletişim Sonuçları
				</div>
			</h1>
			<div class="container">
				<table border=1>
					<tr>
					<td>Kullanıcı Adı:</td>
					<td><?php echo $_POST["kadi"]; ?></td>
					</tr>
					<tr>
					<td>Şifre:</td>
					<td><?php echo $_POST["sifre1"]; ?></td>
					</tr>
					<tr>
					<td>E-Mail:</td>
					<td><?php echo $_POST["email"]; ?></td>
					</tr>
					<tr>
					<td>Mesaj:</td>
					<td><?php echo $_POST["mesaj"]; ?></td>
					</tr>
					<tr>
					<form action="../html/hakkimda.html">
					<td colspan="2"><center><input type="submit" value="Hakkımda"></center></td>
					</form>
					</tr>
				</table>
			</div>
		</div>
		<footer>
			<span>Hasan Semih Aktaş</span>
		</footer>
    </body>
</html>
