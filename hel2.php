<<?php

$cust_id= filter_input(INPUT_POST,'cust_id');
$name=filter_input(INPUT_POST,'name');
$address=filter_input(INPUT_POST,'address');
$ph_no=filter_input(INPUT_POST,'ph_no');
$acc_no=filter_input(INPUT_POST,'acc_no');
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="atmmgmt";
	$con=new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
		die('connect error'.mysqli_connect_error());
}
else{
	$sql = "INSERT INTO customer(cust_id,name,address,ph_no,acc_no) values('$cust_id','$name','$address','$ph_no','$acc_no')" ;
	if($con->query($sql)){
		
		echo("<script language='javascript'>
			window.alert('record inserted successfully');
				window.location.href='cust.html';
				</script>");
}
else{
	echo "error";
}


}
?> 