<?php
ob_start();
require_once("includes/dbsmain.inc.php");

$enquiry_name = $_GET['name'];
$enquiry_comp_name = $_GET['company'];
$enquiry_mobile = $_GET['phone'];
$enquiry_email = $_GET['email'];
$enquiry_subject = $_GET['subject'];
$enquiry_detail = $_GET['message'];
$enquiry_source = "Through App";
$currdate = date("Y-m-d");
$sql = "INSERT INTO tbl_enquiry SET
			enquiry_name='$enquiry_name',
			enquiry_comp_name='$enquiry_comp_name',
			enquiry_mobile='$enquiry_mobile',
			enquiry_email='$enquiry_email',
			enquiry_subject='$enquiry_subject',
			enquiry_detail='$enquiry_detail',
			enquiry_source='$enquiry_source',
			enquiry_add_date='$currdate'";
			if($enquiry_email!=''){
			$sqlExe = db_query($sql);
			}

if ($sqlExe===True){

            $response["result"]="0";
			$response["error_msg"]="Enquiry form submitted successfully";
			echo json_encode($response);

} else{
            $response["result"]="1";
			$response["error_msg"]="Sorry! some error occurred";
			echo json_encode($response);
}
?>

