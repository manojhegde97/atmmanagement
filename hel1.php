<?php

$acc_no= filter_input(INPUT_POST,'acc_no');
$password=filter_input(INPUT_POST,'password');
$acc_type=filter_input(INPUT_POST,'acc_type');
$balance=filter_input(INPUT_POST,'balance');
$b_id=filter_input(INPUT_POST,'b_id');
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="atmmgmt";
	$con=new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
		die('connect error'.mysqli_connect_error());
}
else{
	$sql = "INSERT INTO account(acc_no,password,acc_type,balance,b_id) values('$acc_no','$password','$acc_type','$balance','$b_id')" ;
	if($con->query($sql)){
		
		echo("<script language='javascript'>
			window.alert('record inserted successfully');
				window.location.href='ACC.html';
				</script>");
}
else{
	echo "error";
}


}
?> 