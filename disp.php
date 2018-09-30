<?php
require('sql_connect.php');
if (isset($_POST['submit'])){
$acc_no=mysql_escape_string($_POST['acc_no']);
$password=mysql_escape_string($_POST['password']);
$amt=($_POST['amt1']);
$sql= mysql_query("SELECT acc_no FROM `account` WHERE `acc_no` = '$acc_no' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
$acc_no= $_POST['acc_no'];
$disp= mysql_query("select cust_id ,name,balance from account a,customer c where a.acc_no=c.acc_no and a.acc_no='$acc_no'");
while($result= mysql_fetch_array($disp,MYSQL_ASSOC)){
	
echo "<br/> customer id: " . $result['cust_id'];
echo "<br/> customer name: " . $result['name'];
echo "<br/> customer old balance: " . $result['balance'];
$n2=$result['balance'];
$n3=$n2-$amt;
if($n3<0){
	echo "<br/><marquee > widthdrawal amount is more than your balance so transaction failed :(</marquee> ";
}
else{
echo "<br/>".$result['name']."  your new balance after '" .$amt."' withdrawal is: " . $n3;
$sql= mysql_query("update account set balance='$n3' where acc_no='$acc_no'");
}
}
}

else
{
	echo("<script language='javascript'>
			window.alert('wrong u name r pass')
			</script>");
	exit();
}
}

?>
<html>
<body style="background-color:#fffdd0">
</body>
</html>
