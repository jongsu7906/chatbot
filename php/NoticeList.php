<?php
$con= mysqli_connect( "localhost", "jongsu7906", "pudfh63147", "jongsu7906");
$result = mysqli_query($con, "SELECT * FROM NOTICE ORDER BY noticeDate DESC;");
$response = array();

while($row = mysqli_fetch_array($result)){
array_push($response, array("noticeContent"=>$row[0], "noticeName"=>$row[1], "noticeDate"=>$row[2]));
}

echo json_encode(array("response"=>$response));
mysqli_close($con);
?>
