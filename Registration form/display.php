<?php
include("connection.php");

 if ($total != 0)
  {
  	?>
  	<form action="connection.php" method="post">
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
			

  	<?php
  	while($result = mysqli_fetch_assoc($data))
  	{
  		echo " <label>".$result['f']."</label><br>
			<input type="text" name="f" id="name" placeholder="Enter Your firstname"><br><br>
			<label>".$result['l']."</label><br>
			<input type="text" name="l" id="name" placeholder="Enter Your lastname"><br><br>
			<label>".$result['s']."</label><br>
			<input type="text" name="s" id="name" placeholder="Enter Your schoolname"><br><br>
			<label>".$result['c']."</label><br>
			<input type="text" name="c" id="name" placeholder="Enter Your class"><br><br>
			<label>".$result['n']."</label><br>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
				<option>+94</option>
			</select>
			<input type="text" name="n" id="Number" placeholder="Enter Your  mobilenumber"><br><br>
			<input type="submit" value="submit" id="submit">
			";
  	}


 }
 else
 {
 	echo "No record found";
 }
 ?>
</form>











