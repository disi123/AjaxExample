<?php
include("connect.php");
include("Mysql.class.php");
include("MysqlStatement.class.php");

$Mysql = new Mysql();

echo "My used data (id):" . $_POST[dataid];
echo " My used data (value):" .$_POST[inputdata];

//update data
$sql = "UPDATE userdata SET rating =:0 WHERE userdata_id = :1";
$MysqlStatement_update = $Mysql->getMysqlStatement($sql);
$MysqlStatement_update->execute($_POST[inputdata], $_POST[dataid]);

echo " Error Code: " . $MysqlStatement_update->error_code;
?>