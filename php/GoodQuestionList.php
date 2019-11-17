<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");
$result = mysqli_query($con, "SELECT * FROM GOODQUESTION;");
$response = array();

while($row = mysqli_fetch_array($result)){
array_push($response, array("questionQ"=>$row[0], "questionA"=>$row[1]));
}

echo json_encode(array("response"=>$response));
mysqli_close($con);
?>
