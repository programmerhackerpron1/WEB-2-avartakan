<?php  
if( isset($_POST['add']) ){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$excerpt = $_POST['excerpt'];
	$order = $_POST['order'];
	$images = $_POST['images'];
	$link = mysqli_connect('localhost','root','root','little-site');
	$sql = "INSERT INTO `pages` (`title`,`content`,`excerpt`,`images`) VALUES ('$title','$content','$excerpt','$images')";
	$result = mysqli_query($link,$sql);
}
if( isset($_POST["update"]) ){
	$id = $_POST['id'];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$excerpt = $_POST["excerpt"];
	$images = $_POST["images"];
	$db = mysqli_connect("localhost", "root", "root", "little-site");
	$sql = "UPDATE pages SET title = '$title',content = '$content',excerpt = '$excerpt',images = '$images' WHERE id = '$id'";
	$r = mysqli_query($db, $sql);
	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo "db error";
	}
}
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];
	$db = mysqli_connect("localhost", "root", "root", "little-site");
	$sql = "DELETE FROM pages WHERE id = $id";
	$r = mysqli_query($db, $sql);
}
mysqli_close($db);
?>