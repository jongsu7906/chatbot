<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");

$question = $_POST["question"];
$answer;
$add_answer;

$statement = mysqli_prepare($con, "SELECT * FROM QUESTION WHERE question = ? ");
mysqli_stmt_bind_param($statement, "s", $question);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $question, $answer, $add_answer);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
$response["success"] = true;
$response["answer"] = $answer;
$response["add_answer"] = $add_answer;
}

echo json_encode($response);
?>
