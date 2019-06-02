<?php  
$db = mysqli_connect("localhost", "root", "root", "little-site");
$sql = "SELECT * FROM pages";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<style type="text/css">
		.main
{
	width: 1000px;
	border: 1px solid black;
	margin: auto;
}
.header
{
	background-image: url("apple inc.jpg");
	border: 1px solid black;
	background-repeat: no-repeat;
	display: flex;
}
.smallimg
{
	width: 120px;
	margin: 0px;
}
.bigimg
{
	width: 368px;
	margin: 0px;
}
.img
{
	margin: 0px 20px 0px 0px;
	float: left;
}
.menu
{
	border: 1px solid black;
	justify-content: space-evenly;
	display: flex;
	padding: 5px;
	text-decoration: none;
}
.logo
{
	width: 700px;
	border: 0px solid black;
}
.phone
{
	width: 300px;
	border: 0px solid black
}
.list
{
	height: 340px;
	overflow: auto;
}
.conteiner
{
	border: 1px solid black;
	padding: 20px;
	display: flex;
	flex-wrap: wrap;
}
.footer
{
	border: 1px solid black;
	display: flex;
	padding: 20px;

}
.href
{
	width: 30px;
}
.div
{
	overflow: auto;
	height: 100px;
}
.h1img
{
	width: 150px;
}
.imglast
{
	border: 2px solid black;
	width: 150px;
	height: 150px;
}
.fh1
{
	text-align: center;
}
.imglastimg
{
	width: 150px;
}
.dat
{
	width: 108px;
}
.about
{
	width: 700px;
}
.meabout
{
	display: flex;
}
.immasin
{
	display: flex;
}
.asel
{
	width: 50%;
}
.patmel
{
	width: 50%;
}
.conteiner1
{
	border: 1px solid black;
	display: flex;
	padding: 20px;
}
.map
{
	border: 2px solid black;
}
.nkar
{
	border: 1px solid black;
	width: 220px;
	float: left;
	padding: 15px;
}
.imgapple
{
	margin: auto;
}
.text
{
	height: 313px;
	overflow: auto;
}
.post{
	margin-right: 9px;
	border: 2px solid black;
}
.images{
	width: 150px;
	height: 150px;
}
	</style>
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="logo"></div>
			<div class="phone">
				<h2>055 45 23 67</h2>
				<h2>099 12 34 56</h2>
			</div>
		</div>
		<div class="menu">
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index1.php">Home</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index2.php">HTML</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index3.php">CSS</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index4.php">About</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index5.php">Contact</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/index6.php">Apple</a></div>
			<div class="href"><a href="http://localhost:8888/Web%202%20avartakan/shop.php">Shop</a></div>
		</div>
		<div class="conteiner">	
			<?php 
			while ($r = mysqli_fetch_assoc($result)){?>
					<div class="post">
						<h1><?php echo $r["title"]; ?></h1>
						<a href="http://localhost:8888/Web%202%20avartakan/tex.php?id=<?php echo $r['id']; ?>">
							<img src="<?php echo $r['images']; ?>">
						</a>
					</div>
			<?php
				}
			?>
		</div>
		<div class="footer">
			<div class="logo">website by:Gor Chalyan</div>
			<div class="phone">copyright , etc ...</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($db); ?>