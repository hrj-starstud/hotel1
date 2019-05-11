<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
</head>
<body>

<h1>REQUEST SENT</h1>
<?php

if(isset($_POST['submit']))
{
$data_missing = array();

if(empty($_POST['First_name']))
{
$data_missing[]='First Name';

}
else
{
$f_name = trim($POST['First_name']);
}

if(empty($_POST['Last_name']))
{
$data_missing[]='Last Name';

}
else
{
$f_name = trim($POST['Last_name']);
}


}
if(empty($data_missing))
{
	require_once('../mysqli_connect.php');
	
	$query= "INSERT INTO hotel (First_name, Last_name , email,addr,phone) VALUES(?,?,?,?,?)";
	$stmt = mysqli_prepare($dbc,$query);
	
	i Integers
	d Doubles
	b Blobs
	s Everything Else
	mysqli_stmt_bind_param($stmt,"ssssi",$f_name,$l_name,$email,$addr,$phone);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	
	if($affected_rows == 1)
	{
		echo 'Request Sent';
		
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);
	}
		else
		{
			echo 'Error Occured ' ;
			echo mysqli_error();
		}
	
}
?>

</body>
</html>
