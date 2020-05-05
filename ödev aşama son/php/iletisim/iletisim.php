<!DOCTYPE html>
<html lang="tr">
    <head> 
        <meta charset="utf-8">
        <title>İletişim</title>
		<script src="../../js/üye.js" type="text/javascript"></script>
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
					İletişim
				</div>
			</h1>
			<div class="container">
				<table border=1>
					<form name="uye_formu" action="iletisimsonuc.php" onsubmit="return isValid(this)" method="post">
					<tr>
					<td>Kullanıcı Adı:</td>
					<td><input type="text" name="kadi"></td>
					</tr>
					<tr>
					<td>Şifre:</td>
					<td><input type="password" name="sifre1"></td>
					</tr>
					<tr>
					<td>Şifre (Tekrar):</td>
					<td><input type="password" name="sifre2"></td>
					</tr>
					<tr>
					<td>E-Mail:</td>
					<td><input type="text" name="email"></td>
					</tr>
					<tr>
					<td>Mesaj:</td>
					<td><textarea  rows="2" cols="20" name="mesaj"></textarea></td>
					</tr>
					<tr>
					<td colspan="2"><center><input type="submit" value="Kaydet!"></center></td>
					</tr>
					</form>
					<tr>
					<form name="temizle" action="iletisim.php">
					<td colspan="2"><center><input type="submit" value="Temizle!"></center></td>
					</form>
				</table>
			</div>
	</div>
	<footer>
			<span>Hasan Semih Aktaş</span>
	</footer>
    </body>
</html>
