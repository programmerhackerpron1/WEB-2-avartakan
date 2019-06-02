<html>
<head>
	<title>Admin page</title>
</head>
<body>
	<form action="action.php" method="post">
		<input type="text" name="title" placeholder="Վերնագիր"> <br><br>
		<input type="number" name="order" placeholder="Հերթական համար"> <br><br>
		<textarea name="excerpt" placeholder="Նախաբան" rows="3" cols="60"></textarea> <br><br>
		<textarea name="content" placeholder="Բովանդակություն" rows="5" cols="60"></textarea> <br><br>
		<textarea name="images" placeholder="Նկարի հղումը" rows="2" cols="30"></textarea> <br><br>
		<input type="submit" name="add"><br><br>
		<?php include 'news_list.php'; ?>
	</form>
</body>
</html>