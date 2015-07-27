<?php

$data = json_decode(file_get_contents("php://input")); //data from post_es.html is recieved by variable $data

$usrname = mysql_real_escape_string($data->uname);// extracting username from $data
$upswd = mysql_real_escape_string($data->pswd);
$uemail = mysql_real_escape_string($data->email);

$con = mysql_connect('localhost', 'root', ''); // creating connection with database
mysql_select_db('sample', $con);// here sample is the name of database



$qry_em = 'select count(*) as cnt from users where email ="' . $uemail . '"'; // query to check if the record already exists

$qry_res = mysql_query($qry_em);
$res = mysql_fetch_assoc($qry_res);

if($res['cnt']==0){ 
$qry = 'INSERT INTO users (name,email,pass) values ("' . $usrname . '","' . $uemail . '","' . $upswd . '")'; // insert query to insert new record
$qry_res = mysql_query($qry);
if ($qry_res) {
    $arr = array('msg' => "User Created Successfully!!!", 'error' => ''); //message to show successful user creation
    $jsn = json_encode($arr);
    print_r($jsn);
} else {
    $arr = array('msg' => "", 'error' => 'Error In inserting record'); 
    $jsn = json_encode($arr);
    print_r($jsn);
}
}
else
{
     $arr = array('msg' => "", 'error' => 'User Already exists with same email');
    $jsn = json_encode($arr);
    print_r($jsn);
}
?>