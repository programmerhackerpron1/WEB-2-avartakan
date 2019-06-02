<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "root", "little-site");
$sql = "SELECT * FROM pages WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<style type="text/css">
.main
{
	width: 1000px;
	border: 2px solid black;
	margin: auto;
	padding: 20px;
}
.image{
	width: 150px;
	height: 150px;
}
	</style>
</head>
<body>
	<div class="main">	
		<h1><?php echo $r['title']; ?></h1>
		<img src="<?php echo $r['images']; ?>">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</body>
</html>
<?php mysqli_close($db); ?>