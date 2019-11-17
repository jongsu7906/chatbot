<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");

$Questionplus = $_POST["Questionplus"];
$Answerplus = $_POST["Answerplus"];

$statement = mysqli_prepare($con, "INSERT INTO QUESTION(question,answer) VALUES (?, ?)");
mysqli_stmt_bind_param($statement, "ss", $Questionplus, $Answerplus);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);
?>