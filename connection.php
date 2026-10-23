<?php
 error_reporting('E_ALL');
session_start();

$servername='localhost';
$username='root';
$dbpass='';
$con=mysql_connect($servername,$username,$dbpass);
if(!$con){
	// echo "Database not Connected";
}else{
	//echo "Database Connected";
}
mysql_select_db('aksolondb',$con);	

?>