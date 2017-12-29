<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>

<?php

$total='';

if(isset($_POST['submit'])){

 $first_value = $_POST['first'];
 $second_value = $_POST['second'];
 if(is_numeric($first_value) && is_numeric($second_value))
					{
						// Calculate total
						if($_POST['calculate'] == 'plus')
						{
							$total = $first_value + $second_value;	
						}
						if($_POST['calculate'] == 'minus')
						{
							$total = $first_value - $second_value;	
						}
						if($_POST['calculate'] == 'times')
						{
							$total = $first_value * $second_value;
						}
						if($_POST['calculate'] == 'divided by')
						{
							$total = $first_value / $second_value;
						}
						

					
					} 
					
					else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
 

 





}

 ?>


<form method="post"  action="">
<p>First Value:<br/>
<input type="text" name="first"></p>
<p>Second Value:<br/>
<input type="text" name="second"></p>
<tr>

<td>Select Operation</td>

<td>

	<select name="calculate">	  
		   <option value="" disabled selected hidden>Please Select Operation</option>
		   <option  value="plus">+</option>
		   <option value="minus">-</option>
		   <option value="times">*</option>
		   <option value="divided by">/</option>
	</select>

</td>

</tr> <br/>	<br/>	

<button type="submit" name="submit">Calculate</button>

<p>Your Answer: <?php echo $total; ?> </p>

</form>
</body>
</html>