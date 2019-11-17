<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");
$result = mysqli_query($con, "SELECT * FROM COMMUNITY ORDER BY communityDate DESC;");
$response = array();

while($row = mysqli_fetch_array($result)){
array_push($response, array("communityContent"=>$row[0], "communityName"=>$row[1], "communityDate"=>$row[2]));
}

echo json_encode(array("response"=>$response));
mysqli_close($con);
?>