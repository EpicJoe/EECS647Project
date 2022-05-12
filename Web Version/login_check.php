<?php 
/**
* 登录验证
*/

$dbhost = "mysql.eecs.ku.edu";
$charset = 'utf8';
$dbname = "fengmiyang";	
$dbuser = "fengmiyang";	
$dbpass = "shohNu9y";	
$tbname = 'USERS'; 	
$name=$_POST['name'];  
$password=$_POST['password'];  

try
{
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
	$sql = "SELECT * FROM USERS where UserName='admin'and PassWord='admin'";
	
	if ( $query = $conn->query($sql) ) 
	{
		if($query->rowCount()<1)	//如果数据库中找不到对应数据
		{
			echo"<script type='text/javascript'>alert('user or password is wrong'); location='sign.php';</script>";  
		}
		else
		{	
			echo"<script type='text/javascript'>alert('succesful');location='select.php';</script>";  
		}
	}
	else
	{
		echo "Query failed\n";
	}
	$conn = null; // 关闭连接
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>
