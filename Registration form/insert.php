<?php
include("connection.php");

?>
<html>
<head>
</head>
<body>
	<form action="" method="post">
		<h2>Register Here</h2>
		    <label>firstname:</label><br>
			<input type="text" name="f" id="name" placeholder="Enter Your firstname"><br><br>
			<label>lastname:</label><br>
			<input type="text" name="l" id="name" placeholder="Enter Your lastname"><br><br>
			<label>schoolname:</label><br>
			<input type="text" name="s" id="name" placeholder="Enter Your schoolname"><br><br>
			<label>class:</label><br>
			<input type="text" name="c" id="name" placeholder="Enter Your class"><br><br>
			<label>mobilenumber:</label><br>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
				<option>+94</option>
			</select>
			<input type="text" name="n" id="Number" placeholder="Enter Your  mobilenumber"><br><br>
			<input type="submit" value="submit" id="submit">
			
	</form>
<?php
$f = $_post['f'];
$l = $_post['l'];
$s = $_post['s'];
$c = $_post['c'];
$n = $_post['n'];

echo $f;

?>
</body>
</html>