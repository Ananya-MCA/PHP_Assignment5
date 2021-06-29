<?php  
$Month = 2592000 + time();
//this adds 30 days to the current time
date_default_timezone_set('Asia/Kolkata');
$first_name=$_POST['first_name'];
 setcookie("user_name", $first_name);
 setcookie('UserVisit', date("F jS - g:i a"), $Month);
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["user_name"])) {  
    echo "Sorry, cookie is not found!"."<br>";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["user_name"]."<br>"; 
    
   
}  
?>  
<?php
if(isset($_COOKIE['UserVisit']))
{
$last = $_COOKIE['UserVisit'];
echo "<br> You last visited on ". $last."<br>";
}
else
{
echo "Welcome to our site!"."<br>";
}
?>
<?php
if (isset($_COOKIE["user_name"]))
echo "Welcome back " . $_COOKIE["user_name"]."<br>";
else
echo "Welcome guest";
?>

<?php
 $first_name = $seat = $meal='';

	if(isset($_POST['form_submit'])) {
		
		$first_name = $_POST['first_name'];
		$seat = $_POST['seat'];
		$meal = $_POST['meal'];
		

									 //echo $dis; 
}
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title></title>
</head>
<body>
<div class="w3-container w3-half w3-margin-top w3-card-4">
	<h2>Thank you for choosing</h2>
			<!-- <img src="<?php echo $image_file; ?>" class="w3-round" alt="image" width="250" height="250"> -->
			<hr>
			<table>
				<tr>
				</tr>
				<th></th>
				<th></th>
				<th></th>
				<tr>
					<td><b>Name: </b></td>
					<td></td>
					<td><?php echo $first_name; ?></td>
				</tr>
				<tr>
					<td><b>Seat Selection: </b></td>
					<td></td>
					<td><?php echo $seat; ?></td>
				</tr>
				<tr>
					<td><b>Meal Selection: </b></td>
					<td></td>
					<td><?php echo $meal; ?></td>
				</tr>
			</table>

	</div>
</body>
</html>
<br>



