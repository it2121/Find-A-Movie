<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="moviemaster";
// Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

function getid(){

$getrow = mysqli_query($GLOBALS['conn'], "SELECT * FROM movies");

$maxid=mysqli_num_rows($getrow);
$id=rand(0, $maxid);
return $id;
}
$sid = getid();

function firstname(){ 
$fid = $GLOBALS['sid'];
$user_get = mysqli_query($GLOBALS['conn'], "SELECT * FROM movies WHERE id='$fid'");

$user = mysqli_fetch_array($user_get);

 // This will echo the Username
$name = $user['name'];
echo $name;

// This will echo their first name (I used this for a dashboard)
// $id = 3;
// $order = mysql_query("SELECT * FROM `movies` WHERE `id`='$id'");
// $result = mysql_fetch_array($order);
// $name = $result['name'];

// $id=3;
// $sql=mysql_query("select * from `movies` where id='3'")or die(mysql_error());
// $row=mysql_fetch_assoc($sql);
// echo $row['name'];
}
function firstposter(){
$fid =$GLOBALS['sid'];
$user_get = mysqli_query($GLOBALS['conn'], "SELECT * FROM imgs WHERE id='$fid'");
$user = mysqli_fetch_array($user_get);

 // This will echo the Username
$name = $user['imgs'];
return $name ;



}
function getrat(){
$fid =$GLOBALS['sid'];
$user_get = mysqli_query($GLOBALS['conn'], "SELECT * FROM movies WHERE id='$fid'");
$user = mysqli_fetch_array($user_get);

 // This will echo the Username
$name = $user['rat'];
echo $name ;



}
function getdis(){
$fid =$GLOBALS['sid'];
$user_get = mysqli_query($GLOBALS['conn'], "SELECT * FROM movies WHERE id='$fid'");
$user = mysqli_fetch_array($user_get);

 // This will echo the Username
$name = $user['dis'];
echo $name ;



}
function getgg(){
$fid =$GLOBALS['sid'];
$user_get = mysqli_query($GLOBALS['conn'], "SELECT * FROM movies WHERE id='$fid'");
$user = mysqli_fetch_array($user_get);

 // This will echo the Username
$name = $user['gg'];
echo $name ;



}
function getthetype(){
$fid =$GLOBALS['sid'];
if ($fid <= 90 ) {
	echo "Action";
	# code...
}elseif ($fid <= 180 && $fid > 90) {
	echo "Horror";
	# code...
}elseif ($fid <= 270 && $fid > 180){
	echo "Adventure ";
}



}




?>