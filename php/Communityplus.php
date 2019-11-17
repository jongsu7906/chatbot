<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");

$CommunityContent = $_POST["CommunityContent"];
$CommunityName = $_POST["CommunityName"];
$CommunityDate = $_POST["CommunityDate"];

$statement = mysqli_prepare($con, "INSERT INTO COMMUNITY(CommunityContent,CommunityName,CommunityDate) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($statement, "sss", $CommunityContent, $CommunityName, $CommunityDate);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);
?>